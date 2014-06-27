<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-13
 * Time: 下午1:26
 */

class ControllerAccountLogin extends  Controller
{
    public function  index()
    {
        if ($this->request->server['REQUEST_METHOD']=='POST')
        {
            $info=array();
            if ( $this->user->is_logged() )
            {
                $info['status']='success';
                $info['user_id']=$this->user->get_id();
                $info['info']='已经登陆';
            }
            else
            {
                $info=array();
                $this->load->model('account');
                if ( $this->user->login($this->request->get_args('email'), $this->request->get_args('password')) )
                {
                    $info['status']='success';
                    $info['user_id']=$this->user->get_id();
                    $info['info']='登陆成功';
                    $this->session->set('user_id', $info['user_id'] );
                    $this->session->set('last_ip' , $this->request->server['REMOTE_ADDR'] );
                }
                else
                {
                    $info['status']='fail';
                    $info['info']='登陆失败';
                }
            }

            return $this->response->set_output(json_encode($info));
        }
    }

}



?>
