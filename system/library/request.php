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

    }

    public function clean($data)
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
            $data=htmlspecialchars($data, ENT_COMPAT, 'UTF-8');
        }
        return $data;
    }


}



?>