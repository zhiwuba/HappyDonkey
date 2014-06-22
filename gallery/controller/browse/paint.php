<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午6:50
 */

class ControllerBrowsePaint  extends Controller
{
    public function  index()
    {
        $this->template="browse/paint.php";

        $this->children=array("common/header","common/footer" );

        $this->response->set_output($this->render());
    }

    private function  get_preview()
    {

    }

    private function  get_comment()
    {

    }

    public function   receive_comment()
    {

    }

    public function  receive_()
    {

    }


}



?>