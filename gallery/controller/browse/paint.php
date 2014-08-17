<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-15
 * Time: 下午6:50
 */

const kCommentCount=15;
const kPreviewCount=8;

class ControllerBrowsePaint  extends Controller
{
    public  function __construct($registry)
    {
        parent::__construct($registry);
        $this->load->model('browse/paint');
        $this->load->model('account');
    }
    //  Index Interface.
    public function  index()
    {
        $paint_id=$this->request->get_args('pid');
        if ( $paint_id )
        {
            $this->get_paint($paint_id);
            $this->get_preview($paint_id);
            $this->get_comment($paint_id);
            $this->get_user_record($paint_id);

            $this->template="browse/paint.php";
            $this->children=array("common/header","common/footer" );
            $this->response->set_output($this->render());
        }
    }

    private function  get_paint($paint_id)
    {
        $paint=$this->model_browse_paint->get_paint($paint_id,null,0);
        $this->data['href']=$paint['file_path'];
        $this->data['paint_id']=$paint_id;

        if ( $this->picture->easy_parse(DIR_Storage . $paint['file_path']) )
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
        $neighbors=$this->model_browse_paint->get_neighbors($paint_id, null , true ,kPreviewCount);
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

    private function  get_user_record($paint_id)
    {
        $this->data['is_good']=0;
        $this->data['is_bad']=0;
        $this->data['is_favorite']=0;

        if ( $this->user->is_logged() )
        {
            $this->data['is_logged']=true;
            $record=$this->model_browse_paint->get_record( $this->user->get_id(), $paint_id );
            if ( $record )
            {
                $this->data['is_good']=($record&1)? 1 : 0;
                $this->data['is_bad']=($record&2)? 1 : 0;
                $this->data['is_favorite']=($record&4)? 1: 0;
                return;
            }
        }
    }

    //浏览切换
    public function get_neighbor_view( )
    {
        $cur_pid=intval($this->request->get_args('pid'));
        $offset=intval($this->request->get_args('offset'));
        $type='';
        switch($type)
        {
            case 'favorite':
                break;
            case 'board':
                break;
            case 'search':
                break;
            case 'album':
                break;
            default:
                $result=$this->model_browse_paint->get_paint($cur_pid, $type, $offset);
                break;
        }

        if ( $this->picture->easy_parse(DIR_Root . $result['file_path']) )
        {
            $dimension=$this->picture->get_pic_dimension();
            $result['width']=$dimension['x'];
            $result['height']=$dimension['y'];
        }
        else
        {
            $result['width']=0;
            $result['height']=0;
        }
        return $this->response->set_output( json_encode($result));
    }

    public function get_neighbor_thumbs()
    {
        $cur_pid=intval($this->request->get_args('pid'));
        $offset=intval($this->request->get_args('offset'));
        $type='';
        switch($type)
        {
            case 'favorite':
                break;
            case 'board':
                break;
            case 'search':
                break;
            case 'album':
                break;
            default:
                $result=$this->model_browse_paint->get_neighbors($cur_pid, $type, $offset, kPreviewCount);
                break;
        }
        return $this->response->set_output(json_encode($result));
    }

    //浏览更多评论
    public function  get_more_comment($paint_id, $last)
    {
        $this->data['update_comments']=$this->get_comment( $paint_id , $last, kCommentCount);
    }
    //接收用户评论
    public function comment()
    {
        if ( $this->user->is_logged() )
        {
            if ($this->request->method()=="POST" )
            {
                $user_id= 4;//$this->user->get_id() ;
                $paint_id=$this->request->get_args("paint_id");
                $comment=$this->request->get_args("comment");
                $this->model_browse_paint->comment($paint_id, $user_id, $comment );

                $info=array('status'=>"success");
                $this->response->set_output(json_encode($info));
            }
        }
        else
        {
            $info=array('status'=>"fail");
            $this->response->set_output(json_encode($info));
        }
    }

    public function operate()
    {
        $info=array();

        if ( $this->user->is_logged() )
        {
            if ( $this->request->method()=="POST" )
            {
                $user_id=$this->user->get_id();
                $paint_id=$this->request->get_args('pid');
                $operate_type=$this->request->get_args('type');
                $old_value=$this->request->get_args('val');

                switch($operate_type)
                {
                    case 0: //赞
                        $this->model_browse_paint->appraise($user_id ,$paint_id ,true, $old_value);
                        break;
                    case 1: //踩
                        $this->model_browse_paint->appraise($user_id, $paint_id ,false, $old_value);
                        break;
                    case 2: //收藏
                        $this->model_browse_paint->favicon($user_id, $paint_id, $old_value);
                        break;
                }

                $info['status']='success';
            }
            else
            {
                $info['status']='fail';
                $info['info']='方法不对';
            }
        }
        else
        {
            $info['status']='fail';
            $info['info']='请先登录';
        }
        $this->response->set_output(json_encode($info));
    }



}

?>
