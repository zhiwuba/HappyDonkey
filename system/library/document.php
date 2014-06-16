<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-16
 * Time: 下午5:07
 */

class Document
{
    private $title;
    private $description;
    private $links=array();
    private $styles=array();
    private $scripts=array();

    public function set_title($title)
    {
        $this->title=$title;
    }

    public function get_title()
    {
        return $this->title;
    }

    public function set_description($description)
    {
        $this->description=$description;
    }

    public function get_description()
    {
        return $this->description;
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
        $this->styles[md5($href)]=array('href'=>$href, 'rel'=>$rel, 'media'=>$media);
    }

    public function get_style()
    {
        return $this->styles;
    }

    public function add_script($script)
    {
        $this->scripts[md5($script)]=$script;
    }

    public function get_script()
    {
        return $this->scripts;
    }


}


?>