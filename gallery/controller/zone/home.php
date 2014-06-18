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
        if ( $this->user->is_logged() )
        {
            $this->template="zone/home.php";

            $this->load->model("zone/home");

            $this->response->set_output($this->render());
        }
        else
        {

        }
    }

}




