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
            if ( isset($this->session['user_id']) )
            {
                $this->redirect('HelloWorld');
            }
            else
            {
                $info=array();
                $this->load->model('account');
                if ( $this->user->login($this->request->post['email'], $this->request->post['password']) )
                {
                    $info['status']='ok';
                    $info['user_id']=$this->user->get_id();
                    $info['info']='登陆成功';
                }
                else
                {
                    $info['status']='error';
                    $info['info']='登陆失败';
                }

                $info=$this->model_account_account->login();

                if ( $info['status']=='ok' )
                {
                    $this->session['user_id']=$info['user_id'];
                    $this->session['last_ip']=$this->request->server['REMOTE_ADDR'];
                }
            }

            return $this->response->set_output(json_encode($info));
        }
    }

}



?>
