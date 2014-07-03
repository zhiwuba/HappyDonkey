<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-11
 * Time: 下午6:29
 */
class Request
{
    public $get=array();
    public $post=array();
    public $cookie=array();
    public $files=array();
    public $server=array();

    public function __construct()
    {
        $_GET=$this->clean($_GET);
        $_POST=$this->clean($_POST);
        $_REQUEST=$this->clean($_REQUEST);
        $_COOKIE=$this->clean($_COOKIE);
        $_FILES=$this->clean($_FILES);
        $_SERVER=$this->clean($_SERVER);

        $this->get=$_GET;
        $this->post=$_POST;
        $this->request=$_REQUEST;
        $this->cookie=$_COOKIE;
        $this->files=$_FILES;
        $this->server=$_SERVER;
    }

    public function method()
    {
        return $this->server['REQUEST_METHOD'];
    }

    public function  get_args($key)
    {
        if ( $this->method()=='GET' )
        {
            if (isset($this->get[$key]))
            {
                return $this->get[$key];
            }
            else
            {
                return false;
            }
        }
        else if( $this->method()=='POST' )
        {
            if (isset($this->post[$key]))
            {
                return $this->post[$key];
            }
            else
            {
                return false;
            }
        }
    }


    private function clean($data)
    {
        if (is_array($data))
        {
            foreach( $data as $key=>$value )
            {
                unset($data[$key]);
                $data[$this->clean($key)]=$this->clean($value);
            }
        }
        else
        {
            $data=htmlspecialchars_decode($data, ENT_QUOTES);//ENT_COMPAT, 'UTF-8');
        }
        return $data;
    }


}



?>