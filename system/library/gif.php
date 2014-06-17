<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-17
 * Time: 上午11:54
 */

class Gif
{
    // 文件大小
    private $handle;

    public function easy_parse_gif($path)
    {
        $handle=imagecreatefromgif($path);
    }

    public function get_gif_size($path)
    {
        return getimagesize($path);
    }

    //gif尺寸
    public function get_gif_dimension()
    {
        $dimension=array();
        if ( isset($handle) )
        {
            $dimension=array('x'=>imagesx($handle) ,'y'=>imagesy($handle));
        }
        return $dimension;
    }

    //缩略图
    public function create_gif_thumb($path)
    {
        if (isset($handle))
        {
            imagepng($handle, $path);
        }
    }

}


