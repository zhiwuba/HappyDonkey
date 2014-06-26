<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-26
 * Time: 下午12:59
 */

class ControllerBrowseBoard extends Controller
{
    public function  index()
    {
        $this->set_document();

        $this->template="browse/board.php";
        $this->children=array("common/header", "common/footer");
        $this->response->set_output($this->render());
    }


    private function  set_document()
    {
        $this->document->set_data('title', "GIF库-风云榜");
        $this->document->set_data('description', "GIF库-风云榜");
        $this->document->set_data('current', "board");
    }

}


?>
