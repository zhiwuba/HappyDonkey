<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-12
 * Time: 上午10:31
 */

final class Front
{
    protected  $registry;
    protected  $pre_action=array();
    protected  $error;

    public function __construct($registry)
    {
        $this->registry=$registry;
    }

    public function add_pre_action($pre_action)
    {
        $this->pre_action[]=$pre_action;
    }

    public function dispatch($action, $error)
    {
        $this->error=$error;

        foreach( $this->pre_action as $value )
        {
            $result=$this->execute($value);
            if ( $result )
            {
                $action=$result;
                break;
            }
        }

        while($action)
        {
            $action=$this->execute($action);
        }
    }

    private function execute($action)
    {
        if ( file_exists($action->get_file()) )
        {
            require_once($action->get_file());
            $class=$action->get_class();

            $controller=new $class($this->registry);

            if ( is_callable( array($controller,$action->get_method()) ) )
            {
                $result=call_user_func_array( array($controller, $action->get_method()), $action->get_args() );
                return $result;
            }
            else
            {
                $action=$this->error;
                $this->error='';
            }
        }
        else
        {
            $action=$this->error;
            $this->error='';
        }
        return $action;
    }

}





?>