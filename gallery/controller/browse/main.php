<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:01
 */



class ControllerBrowseMain extends Controller
{
    public function index()
    {
        if ( $this->request->method()=='GET' )
        {
            $this->load->model('browse/main');
            $this->load->model('account');
            $this->load->model('browse/top');
            $req_page=$this->request->get_args('page');
            $req_page=$req_page? $req_page: 1;

            $this->set_document();
            $this->get_paints($req_page);
            $this->get_pagination($req_page);
            $this->get_popular();
            $this->get_recommend();
            $this->get_browse_history();

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

    private function  get_popular()
    {
        $result=$this->model_browse_top->get_hot_paint_by_mark(kSideShowCount);
        foreach( $result as &$paint )  /* 引用改变其原值*/
        {
            $paint['url']=$this->url->link('browse/paint', array('id'=>$paint['paint_id']) );
        }

        $this->data['popular']=$result;
    }

    private function  get_browse_history()
    {
        if ( isset( $this->session->data['history'] ) )
        {
            $paints=$this->session->data['history'];
            $result=$this->model_browse_top->get_paints_header($paints);
            foreach( $result as &$paint )  /* 引用改变其原值*/
            {
                $paint['url']=$this->url->link('browse/paint', array('id'=>$paint['paint_id']) );
            }
            $this->data['history']=$result;
        }
        else
        {
            $this->data['history']=array();
        }
    }

    private function  get_recommend()
    {
        $result=$this->model_browse_top->get_hot_paint_by_mark(kSideShowCount);
        foreach( $result as &$paint )  /* 引用改变其原值*/
        {
            $paint['url']=$this->url->link('browse/paint', array('id'=>$paint['paint_id']) );
        }
        $this->data['recommend']=$result;
    }

    private function  set_document()
    {
        $this->document->set_data('title', "GIF库");
        $this->document->set_data('description', "搜集GIF图片");
        $this->document->set_data('current', "main");
    }

}

