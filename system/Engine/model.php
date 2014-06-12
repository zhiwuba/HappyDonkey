<?php


abstract class Model
{
    protected $registry;
    
    public function __construct($registry)
    {
        $this->registry=$registry;
    }
    
    public function __get($key)
    {   //使Model共享Registry的成员变量
        return $this->registry->get($key);
    }
    public function __set($key , $value)
    {
        $this->registry->set($key, $value);
    }


}                                          




?>

