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

        $this->data["base"]=HTTP_SERVER;
        $this->data["title"]=$this->document->get_data('title');
        $this->data["description"]=$this->document->get_data('description');
        $this->data["current"]=$this->document->get_data("current");
        $this->data["links"]=$this->document->get_links();
        $this->data["styles"]=$this->document->get_styles();
        $this->data["scripts"]=$this->document->get_scripts();

        $this->data["icon"]='';

        $this->data['main']=$this->url->link('browse/main', '');
        $this->data['board']=$this->url->link('browse/board', '');
        $this->data['search']=$this->url->link('browse/search', '');

        $this->data['login']=$this->url->link('account/login', '');
        $this->data['logout']=$this->url->link('account/logout', '');
        $this->data['register']=$this->url->link('account/register', '');

        if ($this->user->is_logged() )
        {
            $this->data['username']=$this->user->get_username();
            $this->data['logged']=true;
            $this->data['home']=$this->url->link('zone/home', array('uid'=>$this->user->get_id()));
        }
        else
        {
            $this->data['logged']=false;
            $this->data['home']=$this->url->link('zone/home', '');
        }

        $this->template="common/header.php";

        $this->render();
    }

    private function init_document()
    {
        $this->document->add_style(HTTP_SERVER . "static/bootstrap-3.0.3/css/bootstrap.css");
        $this->document->add_script(HTTP_SERVER . "static/jquery-2.1.1.js");
        $this->document->add_script(HTTP_SERVER . "static/jquery.form.js");
        $this->document->add_script(HTTP_SERVER . "static/bootstrap-3.0.3/js/bootstrap.js");
        $this->document->add_style(HTTP_SERVER . "static/main.css");
        $this->document->add_script(HTTP_SERVER . "static/main.js");

    }

}




?>
