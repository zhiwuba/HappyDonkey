<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-27
 * Time: 上午12:43
 */

class ControllerBrowseAlbum extends Controller
{
    public function __construct($registry)
    {
        parent::__construct($registry);
    }

    public function  index()
    {
        $range=$this->get_paint_range();

        $this->template="browse/paint.php";
        $this->children=array("common/header", "common/footer");

        $this->response->set_output($this->render());
    }

    private function  get_paint_range($type)
    {
        if ( $type=='favorite' )
        {

        }
        else if( $type=='board')
        {

        }
        else if( $type=='search' )
        {

        }
        else if($type=='album')
        {

        }
    }





}


?>