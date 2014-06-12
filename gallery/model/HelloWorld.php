<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-12
 * Time: 下午3:20
 */

class ModelHelloWorld extends Model
{
    public function get_user_name()
    {
        $result=$this->db->query("SELECT user_name FROM hd_users");

        return $result;
    }

}
