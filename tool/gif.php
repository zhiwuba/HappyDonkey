<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-30
 * Time: 下午9:18
 */

require_once("config.php");
require_once("GifFrameExtractor.php");
use GifFrameExtractor\GifFrameExtractor;


class Gif
{
    private  $extractor;
    public function __construct()
    {
        $this->extractor=new GifFrameExtractor();
        if(!is_dir(DIR_Temp))
        {
            mkdir(DIR_Temp);
        }
    }

    public function extract($source)
    {
        $this->clear_path(DIR_Temp);
        $this->extract_gif($source);
        return true;
    }

    public function to_mp4($destination)
    {
        $this->compound($destination);
        return true;
    }

    public function save_thumb($destination)
    {
        $src_file=DIR_Temp . 'frame0.jpg';
        if(file_exists($src_file))
        {
            copy($src_file,$destination);
            return true;
        }
        else
        {
            echo('保存截图失败 '. $destination . '\n');
        }
        return false;
    }

    //解压
    private function extract_gif($src)
    {
        try
        {
            $this->extractor->extract($src);
            $images=$this->extractor->getFrameImages();

            $i=0;
            foreach($images as $image)
            {
                imagejpeg($image, DIR_Temp . "frame$i.jpg", 100);
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
    private function compound($destination)
    {
				$fre=10;
        $duration=$this->extractor->getTotalDuration();
        $count=$this->extractor->getFrameNumber();
        if($duration<=0 || $count <=0)
        {
          echo "$count  $duration $destination \n";
        }
				else
				{
					$fre=intval(($count/$duration)*100);
				}
				$temp=DIR_Temp;
        system("ffmpeg -f image2 -r $fre -i $temp/frame%d.jpg -vf \"scale=trunc(iw/2)*2:trunc(ih/2)*2\" -vcodec libx264 $destination>>/home/website/log/convert.log 2>&1");
				return true;
    }

    //清空
    private function clear_path($path)
    {
        if ( $handle=opendir($path) )
        {
            while(false!==($file=readdir($handle)))  //值不相等 或者 类型不同
            {
                if ( $file!='.' && $file!='..' )
                {
                    unlink($path . $file);
                }
            }
        }
        closedir($handle);
    }
}



function get_file_list($dir)
{
    $file_list=array();
    if(is_dir($dir))
    {
        $handle=opendir($dir);
        if(false!=$handle)
        {
            while($file=readdir($handle))
            {
                if( strpos($file,'.') && !is_dir($file))
                {
                    $file_list[]=$file;
                }
            }
        }
    }
    return $file_list;
}

function convert()
{
    $gif=new Gif();

    $file_list=get_file_list(Storage_Original);
    foreach($file_list as $file)
    {
        $filename=pathinfo($file,PATHINFO_FILENAME);
        $file_ext=pathinfo($file,PATHINFO_EXTENSION);
        if(strcasecmp($file_ext ,'gif')==0)
        {
            $thumb=Storage_Thumb . $filename . '.jpg';
            $simple=Storage_Simple . $filename . '.mp4';
            if(!(file_exists($thumb)&&file_exists($simple)))
            {
								echo "Process " . Storage_Original . $file ."\n";
                $gif->extract(Storage_Original . $file);
                $gif->to_mp4($simple);
                $gif->save_thumb($thumb);
            }
        }
		 }

}

convert();
