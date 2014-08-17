<?php

include_once 'gifs.php';

define("Storage_Original","/home/website/HappyDonkey/storage/original/");
define("Storage_Thumb","/home/website/HappyDonkey/storage/thumb/");
define("Storage_Simple","/home/website/HappyDonkey/storage/simple/");

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
	$hd_gifs=new Gifs();

  $file_list=get_file_list(Storage_Original);
	foreach($file_list as $file)
	{
		$filename=pathinfo($file,PATHINFO_FILENAME);
		$fileext=pathinfo($file,PATHINFO_EXTENSION);
		if(strcasecmp($fileext ,'gif')==0)
		{
			$thumb=Storage_Thumb . $filename . '.jpg';
			$simple=Storage_Simple . $filename . '.mp4';
			if(!(file_exists($thumb)&&file_exists($simple)))
			{
				$hd_gifs->extract(Storage_Original . $file);
				$hd_gifs->to_mp4($simple);
				$hd_gifs->save_thumb($thumb);				
			}
		}
	}

}	

convert();


?>
