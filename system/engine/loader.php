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

    public function library($library)
    {
        $file=DIR_System . 'library/' . $library . '.php';
        if ( file_exists($file) )
        {
            include_once($file);
        }
        else
        {
            trigger_error("Error: Could not load library " . $library . '!' );
            exit();
        }
    }

    public function model($model)
    {
        $file=DIR_Gallery . 'model/' . $model . '.php';
        $class='Model' . preg_replace('/[^a-zA-Z0-9]/', '', $model);

        if ( file_exists($file) )
        {
            include_once($file);
            $this->registry->set('model_' . str_replace('/','_', $model), new $class($this->registry) );
        }
        else
        {
            trigger_error("Error: Could not load model " . $model . '!');
            exit();
        }
    }

}




