<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-13
 * Time: 下午1:26
 */

class ControllerAccountRegister extends  Controller
{
    public function index()
    {
        $this->template="account/register.php";

        if ( $this->request->server['REQUEST_METHOD']=='POST' )
        {
            $this->load->model("account");
            $info=$this->model_account_register->register( $this->request->post['username'], $this->request->post['email'], $this->request->post['password'] );
            return $this->response->set_output(json_encode($info));
        }
        else
        {
            $this->response->set_output($this->render());
        }
    }

}


