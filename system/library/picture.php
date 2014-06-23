<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-17
 * Time: 上午11:54
 */

class Picture
{
    // 文件大小
    private $handle;
    private $file_type;

    public function easy_parse($path)
    {
        if ( isset($this->handle) )
        {
            imagedestroy($this->handle);
        }
        $path_parts=pathinfo($path);
        $extension=$path_parts['extension'];
        if ( isset($extension) )
        {
            $this->file_type=$extension;
            switch($extension)
            {
                case 'gif':
                    $this->handle=imagecreatefromgif($path);
                    break;
                case 'png':
                    $this->handle=imagecreatefrompng($path);
                    break;
                case 'jpg':
                    $this->handle=imagecreatefromjpeg($path);
                    break;
                default:
                    return false;
                    break;
            }
            return true;
        }
        else
        {
            return false;
        }
    }

    public function get_pic_size($path)
    {
        return getimagesize($path);
    }

    //gif尺寸
    public function get_pic_dimension()
    {
        $dimension=array();
        if ( isset($this->handle) )
        {
            $dimension=array('x'=>imagesx($this->handle) ,'y'=>imagesy($this->handle));
        }
        return $dimension;
    }

    //缩略图
    public function create_pic_thumb($path)
    {
        if (isset($this->handle))
        {
            imagepng($this->handle, $path);
        }
    }

}


