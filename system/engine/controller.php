<?php

abstract class  Controller
{
    protected $registry;
    protected $id;
    protected $layout;
    protected $template;
    protected $children=array();
    protected $data=array();
    protected $output;

    public function __construct($registry)
    {
        $this->registry=$registry;
    }

    public function __get($key)
    {   //Controller类可以调用registry的成员变量
        return $this->registry->get($key);
    }
    public function  __set($key, $value)
    {
        return $this->registry->set($key, $value);
    }

    protected function forward($route, $args=array())
    {
        return new Action($route, $args);
    }

    protected function  redirect($url, $status=302)
    {
        header('Status: ' . $status);
        header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url));
        exit();
    }


    protected  function render()
    {
        foreach ($this->children as $child )
        {
            $this->data[basename($child)]=$this->get_child($child);
        }

        if ( file_exists(DIR_Gallery_Template . $this->template) )
        {
            extract($this->data);

            ob_start();

            require(DIR_Gallery_Template . $this->template);

            $this->output=ob_get_contents();

            ob_end_clean();
            return $this->output;
        }
        else
        {
            trigger_error('Error: Could not load template ' . DIR_Gallery_Template . $this->template . '!' );
            exit();
        }
    }

    protected function get_child($child, $args=array())
    {
        $action=new Action($child, $args);

        if (file_exists($action->get_file()))
        {
            require_once($action->get_file());

            $class=$action->get_class();

            $controller=new $class($this->registry);

            $controller->{$action->get_method()}($action->get_args());

            return $controller->output;
        }
        else
        {
            trigger_error('Error: Counld not load controller '. $child.'!');
            exit();
        }
    }

}






?>