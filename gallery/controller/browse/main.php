<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:01
 */

class ControllerBrowseMain extends Controller
{
    public function index()
    {
        $this->template="browse/main.php";


        $this->children=array("common/header",
                                            "common/footer");

        $this->response->set_output( $this->render() );
    }

}

