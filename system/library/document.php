<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-16
 * Time: 下午5:07
 */

class Document
{
    private $data=array();
    private $links=array();
    private $styles=array();
    private $scripts=array();


    public function set_data($key, $value)
    {
        $this->data[$key]=$value;
    }

    public  function  get_data($key)
    {
        if ( isset($this->data[$key]) )
        {
            return $this->data[$key];
        }
        else
        {
            return false;
        }
    }

    public function add_link($href, $rel)
    {
        $this->links[md5($href)]=array( 'href'=>$href, 'rel'=>$rel);
    }

    public function get_links()
    {
        return $this->links;
    }

    public function add_style($href, $rel='stylesheet', $media='screen')
    {
        $this->styles[md5($href)]=array('href'=>$href , 'rel'=>$rel, 'media'=>$media);
    }

    public function get_styles()
    {
        return $this->styles;
    }

    public function add_script($script)
    {
        $this->scripts[md5($script)]=$script;
    }

    public function get_scripts()
    {
        return $this->scripts;
    }

}


?>