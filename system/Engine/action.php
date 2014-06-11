<?php


final class Action
{
    protected  $file;
    protected  $class;
    protected  $method;
    protected  $args=array();
    
    
    public function __construct($route, $args=array())
    {
        $path='';
        
        $parts=  explode('/', str_replace('../', '', (string)$route ));
        
        foreach ($parts as $part)
        {
            $path.=$part;
            
            if ( is_dir(HD_GalleryPath.'controller/'.$path) )
            {
                $path.='/';
                array_shift($parts);
                continue;
            }
            
            if ( is_file(HD_GalleryPath.'controller/'.  str_replace(array('../','..\\','..'), '', $path).'.php') )
            {
                $this->file=HD_GalleryPath.'controller/'.str_replace(array('../','..\\','..'), '', $path).'.php';
                $this->class='Controller'.preg_replace('/[^a-zA-Z0-9]/', '', $path);
                array_shift($parts);
                break;
            }
            
            if ( $args )
            {
                $this->args=$args;
            }
            
            $method=  array_shift($parts);
            
            if ( $method )
            {
                $this->method=$method;
            }
            else
            {
                $this->method='index';
            }
        }
    }
    
    public function get_file()
    {
        return $this->file;
    }
    
    public function get_class()
    {
        return $this->class;
    }
    
    public  function get_method()
    {
        return $this->method;
    }
    
    public function get_args()
    {
        return $this->args;
    }
    
}


?>