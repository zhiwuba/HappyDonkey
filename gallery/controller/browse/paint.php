<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-15
 * Time: 下午6:50
 */

const kCommentCount=15;
const kPreviewCount=7;

class ControllerBrowsePaint  extends Controller
{
    public function  index()
    {
        $paint_id=$this->request->get_args('paint_id');
        if ( $paint_id )
        {
            $this->load->model('browse/paint');
            $this->load->model('account');
            $this->get_paint($paint_id);
            $this->get_preview($paint_id);
            $this->get_comment($paint_id);

            $this->template="browse/paint.php";
            $this->children=array("common/header","common/footer" );
            $this->response->set_output($this->render());
        }
    }

    private function  get_paint($paint_id)
    {
        $paint=$this->model_browse_paint->get_paint($paint_id);
        $this->data['href']=$paint['file_path'];

        if ( $this->picture->easy_parse(DIR_Root . $paint['file_path']) )
        {
            $dimension=$this->picture->get_pic_dimension();

            $this->data['width']=$dimension['x'];
            $this->data['height']=$dimension['y'];
        }
        else
        {
            $this->data['width']=0;
            $this->data['height']=0;
        }
    }

    private function  get_preview($paint_id)
    {
        $neighbors=$this->model_browse_paint->get_neighbors($paint_id, true ,kPreviewCount);
        $this->data['neighbors']=$neighbors;
    }

    private function  get_comment($paint_id, $page=1)
    {
        $begin=($page-1)*kCommentCount;
        $results=$this->model_browse_paint->get_comment($paint_id,$begin, kCommentCount);
        foreach ( $results  as  $comment)
        {
            $user_info=$this->model_account->get_user_info($comment['user_id']);
            if ( $user_info )
            {
                $comments[]=array(
                    'user_id'=>$comment['user_id'],
                    'user_name'=>$user_info['username'],
                    'user_avatar'=>$user_info['avatar_thumb_path'],
                    'user_url'=>$this->url->link('zone/home', array('id'=>$comment['user_id'])),
                    'date'=>$comment['date_added'],
                    'content'=>$comment['content'],
                );
            }
        }
        $this->data['comments']=$comments;
    }

    //浏览更多评论
    public function  get_more_comment($paint_id, $last)
    {
        $this->data['update_comments']=$this->get_comment( $paint_id , $last, kCommentCount);
    }
    //接收用户评论
    public function   receive_my_comment()
    {
        if ( $this->user->is_logged() )
        {

        }
        else
        {

        }
    }





}



?>