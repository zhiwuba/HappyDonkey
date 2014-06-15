<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-13
 * Time: 下午1:26
 */

class ControllerAccountLogin extends  Controller
{
    public function  index()
    {
        $this->template="account/login.php";

        $this->response->set_output( $this->render() );
    }


}



?>
