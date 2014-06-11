<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-11
 * Time: 下午5:24
 */

require_once "registry.php";

final class Loader
{
    protected $registry;

    public function __construct($registry)
    {
        $this->registry=$registry;
    }

    public function __get($key)
    {
        return $this->registry->get($key);
    }

    public function __set($key, $value)
    {
        $this->registry->set($key, $value);
    }

    


}




