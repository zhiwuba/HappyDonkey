<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-30
 * Time: 下午9:18
 */

require_once("GifFrameExtractor.php");
use GifFrameExtractor\GifFrameExtractor;

class GifToMP4
{
    private  $extractor;

    public function __construct()
    {
        $this->extractor=new GifFrameExtractor();
    }

    public function convert($source, $destination)
    {
        $temp_path=DIR_Temp+"gif";
        empty_path($temp_path);
        extract_gif($source , $temp_path);
        compound($temp_path,$destination);
        return true;
    }

    //解压
    private function extract_gif($src, $temp_path)
    {
        try
        {
            $this->extractor->extract($src);
            $images=$this->extractor->getFrameImages();
            $frames=$this->extractor->getFrames();

            $i=0;
            foreach($images as $image)
            {
                imagepng($image, $temp_path . "frame$i.png");
                $i++;
            }

            return true;
        }
        catch(Exception $e)
        {
            echo "extract_gif  exception: " . $e->getMessage(). "\n";
            return false;
        }
    }

    //合成
    private function compound($temp_path, $destination)
    {
        $duration=$this->extractor->getTotalDuration();
        $count=$this->extractor->getFrameNumber();
        $fre=intval($count/$duration);
        system("ffmpeg.exe -f image2 -i $temp_path/frame%d.png -vcodec libx264 -r $fre $destination");
    }

    //清空
    private function  empty_path($path)
    {
        if ( $handle=opendir($path) )
        {
            while(false!==($file=readdir($handle)))  //值不相等 或者 类型不同
            {
                if ( $file!='.' && $file!='..' )
                {
                    unlink($file);
                }
            }
        }
        closedir($handle);
    }
}