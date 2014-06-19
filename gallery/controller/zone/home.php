<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:22
 */

class ControllerZoneHome extends  Controller
{
    public function index()
    {
        //TODO: please login first.
        $this->template="zone/home.php";

        $this->load->model("zone/home");

        $this->children=array("common/header","common/footer");

        $this->response->set_output($this->render());
    }

}




