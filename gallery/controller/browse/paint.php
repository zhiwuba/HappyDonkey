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


        $this->response->set_output($this->render());
    }

}



?>