<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:22
 */

class ControllerZoneHome extends  Controller
{
    public function __construct($registry)
    {
        parent::__construct($registry);

        $this->load->model("zone/home");
        $this->load->model("browse/top");
        $this->load->model("account");
        $this->load->model("browse/paint");
    }

    public function index()
    {
        $this->set_document();

        $request_uid=$this->request->get_args('uid');

        if ( $this->user->is_logged() )
        {   //如果登陆了且访问网址是自己的主页可以修改, 比人的不能修改
            if ( ($request_uid)&&($request_uid!=$this->user->get_id()) )
            {   //不合并到上面的if , 方便理解
                $this->get_home_page($request_uid , false);
            }
            else
            {
                $this->get_home_page($this->user->get_id() , true);
            }
        }
        else
        { //不可以修改
            $this->get_home_page($request_uid , false);
        }

        $this->template="zone/home.php";
        $this->children=array("common/header","common/footer");
        $this->response->set_output($this->render());
    }

    private function get_home_page($uid, $owner)
    {
        $this->get_user_info($uid);
        if ( $owner )
        { //可写
            $this->data["owner"]=true;
            $this->get_favorites($uid);
            $this->get_recommend($this->user->get_id() );
        }
        else
        { //仅读
            $this->data["owner"]=false;
            $this->get_favorites($uid);
            $this->get_recommend(null);
        }
    }

    private function get_user_info($uid)
    {
        $user_info=$this->model_account->get_user_info($uid);
        if ( $user_info )
        {
            $this->data['get_user_info']=true;
            $this->data['avatar_large_path']=$user_info['avatar_large_path'];
            $this->data['avatar_small_path']=$user_info['avatar_thumb_path'];
            $this->data['username']=$user_info['username'];
            $this->data['email']=$user_info['email'];
            $this->data['user_id']=$uid;
        }
        else
        {
            $this->data['get_user_info']=false;
        }
    }

    private function  get_favorites($uid)
    {
        $items=$this->model_zone_home->get_favorites($uid);
        $last_date=null;
        $group=array();
        $squad=array();
        foreach( $items as $item )
        {
            $date=strtok($item['favorite_date'], ' ');
            $paint_info=$this->model_browse_paint->get_paint($item['paint_id']);
            $item['thumb_href']=$paint_info['thumb_path'];
            if ( $date==$last_date )
            {
                $squad['items'][]=$item;
            }
            else
            {
                if ( isset($squad['items']) )
                {
                    $group[]=$squad;
                    unset($squad);
                }
                $last_date=$date;
                $squad['items'][]=$item;
                $squad['date']=$date;
                $squad['type']='favorite';
            }
        }
        if ( isset($squad['items']) )
        {
            $group[]=$squad;
        }

        $this->data['collection']=$group;
    }

    private function  get_recommend($uid)
    {
        #if ( isset($uid) )
        #{   //TODO: 推荐算法
        #
        #}
        #else
        {   //推荐热门
            $result=$this->model_browse_top->get_hot_paint_by_mark(kSideShowCount);
            foreach( $result as &$paint )  /* 引用改变其原值*/
            {
                $paint['url']=$this->url->link('browse/paint', array('pid'=>$paint['paint_id']) );
            }
            $this->data['recommend']=$result;
        }
    }

    private function  set_document()
    {
        $this->document->set_data('title', "我的空间");
        $this->document->set_data('description', "我的个人空间");
        $this->document->set_data('current', "home");
    }


    public function delete_favorite($favorite_id)
    {
        if ( $this->user->is_logged() )
        {
            $this->model_zone_home->delete_favorite($favorite_id);
            return true;
        }
        else
        {
            return false;
        }
    }



}




