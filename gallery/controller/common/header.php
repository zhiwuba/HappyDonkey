<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 上午12:23
 */


class ControllerCommonHeader extends Controller
{
    public  function  index()
    {
        $this->init_document();

        $this->data["title"]=$this->document->get_title();
        $this->data["description"]=$this->document->get_description();
        $this->data["links"]=$this->document->get_links();
        $this->data["styles"]=$this->document->get_styles();
        $this->data["scripts"]=$this->document->get_scripts();

        $this->data["icon"]='';

        $this->data['home']=$this->url->link('common/home', '');
        $this->data['login']=$this->url->link('account/login', '');
        $this->data['logout']=$this->url->link('account/logout', '');
        $this->data['register']=$this->url->link('account/register', '');


        $this->template="common/header.php";

        $this->render();
        //$this->response->set_output($this->render()) ;
    }

    private function init_document()
    {
        $this->document->set_title("Test");

        $this->document->add_style(HTTP_SERVER . "static/bootstrap-3.0.3/css/bootstrap.css");
        $this->document->add_script(HTTP_SERVER . "static/jquery-2.1.1.js");
        $this->document->add_script(HTTP_SERVER . "static/bootstrap-3.0.3/js/bootstrap.js");
        $this->document->add_style(HTTP_SERVER . "static/main.css");

    }

}




?>
