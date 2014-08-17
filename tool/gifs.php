<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-30
 * Time: 下午9:18
 */

require_once("GifFrameExtractor.php");
use GifFrameExtractor\GifFrameExtractor;

class Gifs
{
    private  $extractor;
		public static $temp_path="/tmp/gifs/";
    public function __construct()
    {
				$this->extractor=new GifFrameExtractor();
				if(!is_dir(self::$temp_path))
				{
					mkdir(self::$temp_path);
				}
    }

    public function extract($source)
    {
				$this->clear_path(self::$temp_path);
				$this->extract_gif($source);
				return true;
    }

		public function to_mp4($dest)
		{
				$this->compound($dest);
				return true;
		}

		public function save_thumb($dest)
		{
			$src_file=self::$temp_path . 'frame0.jpg';
			if(file_exists($src_file))
			{
				copy($src_file,$dest);
				return true;
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
            $frames=$this->extractor->getFrames();

            $i=0;
            foreach($images as $image)
            {
                imagejpeg($image, self::$temp_path . "frame$i.jpg", 100);
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
        $duration=$this->extractor->getTotalDuration();
        $count=$this->extractor->getFrameNumber();
				if($duration<=0 || $count <=0)
				{
					echo "$count  $duration $destination \n";
					return false;
				}
        $fre=intval(($count/$duration)*100);
				$temp=self::$temp_path;
        system("ffmpeg -f image2 -i $temp/frame%d.jpg -vcodec libx264 -r $fre $destination >> /home/website/log/convert.log 2>&1");
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
