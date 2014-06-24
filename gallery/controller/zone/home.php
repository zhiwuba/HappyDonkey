<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:22
 */

class ControllerZoneHome extends  Controller
{
    public function index()
    {
        $this->load->model("zone/home");

        $request_uid=$this->request->get_args('uid');

        if ( $this->user->is_logged() )
        {   //如果登陆了且访问网址是自己的主页可以修改, 比人的不能修改
            if ( ($request_uid)&&($request_uid!=$this->user->get_id()) )
            {   //不合并到上面的if , 方便理解
                $this->get_home_page($this->user->get_id() , false);
                $this->get_recommend(null);
            }
            else
            {
                $this->get_home_page($this->user->get_id() , true);
                $this->get_recommend($this->user->get_id() );
            }
        }
        else
        { //不可以修改
            $this->get_home_page($request_uid , false);
            $this->get_recommend(null);
        }

        $this->get_user_info($request_uid);

        $this->template="zone/home.php";
        $this->children=array("common/header","common/footer");
        $this->response->set_output($this->render());
    }

    private function get_home_page($uid, $writable)
    {
        if ( $writable )
        { //可写

        }
        else
        { //仅读

        }
    }

    private function get_user_info($uid)
    {

    }

    private function  get_recommend($uid)
    {
        if ( isset($uid) )
        { //推荐算法

        }
        else
        { //推荐热门

        }
    }


    public function delete_favriote()
    {

    }



}




