<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:01
 */

const kShowCount=10;  // 每页显示的数量
const kPageCount=10;  //  导航的条数
const KHotCommentCount=3; //显示热评个数

class ControllerBrowseMain extends Controller
{
    public function index()
    {
        if ( $this->request->method()=='GET' )
        {
            $this->load->model('browse/main');
            $this->load->model('account');
            $req_page=$this->request->get_args('page');
            $req_page=$req_page? $req_page: 1;


            $this->get_paints($req_page);
            $this->get_pagination($req_page);


            $this->template="browse/main.php";
            $this->children=array("common/header", "common/footer");
            $this->response->set_output( $this->render() );
        }
    }

    private function  get_paints($req_page )
    {
        $start=($req_page-1)*kShowCount;
        $end=$req_page*kShowCount;  //not include.

        $paints=$this->model_browse_main->get_paint_sort_by_date($start ,  $end-$start );

        $this->data["paint_list"]=array();
        foreach ($paints as $paint )
        {
            $other_comments=array();
            $comments=$this->model_browse_main->get_hot_comment($paint['paint_id'],KHotCommentCount );
            foreach ( $comments  as  $comment)
            {
                $user_info=$this->model_account->get_user_info($comment['user_id']);
                if ( $user_info )
                {
                    $other_comments[]=array(
                        'user_id'=>$comment['user_id'],
                        'user_name'=>$user_info['username'],
                        'user_avatar'=>$user_info['avatar_thumb_path'],
                        'user_url'=>$this->url->link('zone/home', array('id'=>$comment['user_id'])),
                        'date'=>$comment['date_added'],
                        'content'=>$comment['content'],
                    );
                }
            }


            $this->data["paint_list"][]=array(
                'id'=>$paint['paint_id'] ,
                'comment'=>$paint['comment'],
                'other_comments'=> $other_comments,
                'href'=>$paint['thumb_path'],
            );
        }
    }


    private function get_pagination($req_page)
    {
        $paint_count=$this->model_browse_main->get_paint_count();
        $page_count=intval($paint_count / kPageCount);

        if ( $req_page<=kPageCount/2 ) //前10页
        {
            $start=1;
            $end= ( $page_count< kPageCount )? $page_count : kPageCount;
        }
        else if($page_count - $req_page<=kPageCount/2 )
        {   //后10页
            $end=$page_count;
            $start=$page_count<kPageCount? 1 : $page_count-kPageCount;
        }
        else
        {
            $start= $req_page-kPageCount/2;
            $end= $req_page+kPageCount/2;
        }
        for ( $i=$start; $i<$end; $i++ )
        {
            $this->data['pages'][]=array('status'=>'', 'url'=>$this->url->link('browse/main', array("page"=>$i )), 'num'=>$i);
        }

        $this->data['pages'][$req_page-$start]=array('status'=>'active', 'url'=>$this->url->link('browse/main', array("page"=>$req_page )), 'num'=>$req_page );
        $this->data['previous']=array('status'=>'', 'url'=>$this->url->link('browse/main', array("page"=>$req_page-1 )) );
        $this->data['next']=array('status'=>'', 'url'=>$this->url->link('browse/main', array("page"=>$req_page+1 )) );
        if ( $req_page==1  )
        {
            $this->data['previous']=array('status'=>'disabled', 'url'=>'' );
        }
        if( $req_page==$page_count )
        {
            $this->data['next']=array('status'=>'disabled', 'url'=>'' );
        }
    }

}

