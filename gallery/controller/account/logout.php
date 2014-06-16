<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-13
 * Time: 下午1:27
 */

class ControllerAccountLogout extends  Controller
{
    public function  index()
    {
        $this->user->logout();
    }

}
