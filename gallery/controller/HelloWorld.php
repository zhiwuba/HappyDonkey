<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-12
 * Time: 下午3:21
 */

class ControllerHelloWorld extends  Controller
{
    private $error=array();

    public function  index()
    {
        $this->load->model('HelloWorld');

        $this->data['title']="Hello World!!";
        $this->data['content']="echo 'Hello World!!'";

        $this->template='HelloWorld.php';

        $this->data['username']=$this->model_HelloWorld->get_user_name();

        $this->response->set_output($this->render());
    }
}

?>