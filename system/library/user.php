<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-13
 * Time: 下午2:03
 * Description: 用户登录
 */

class User
{
    private $user_id;
    private $user_name;
    private $email;

    public function  __construct($registry)
    {
        $this->db=$registry->get('db');
        $this->request=$registry->get('request');
        $this->session=$registry->get('session');

        if (isset($this->session->data["user_id"]))
        {
            $user_query=$this->db->query("SELECT * FROM user WHERE user_id='" . $this->session->data['user_id'] ."' AND status='1'" );
            if ( count($user_query) )
            {
                $this->user_id=$user_query["user_id"];
                $this->user_name=$user_query["user_name"];
                $this->email=$user_query["email"];
            }
            else
            {
                $this->logout();
            }
        }
    }

    public function login($username, $password, $override=false)
    {
        if ( $override )
        {
            $user_query=$this->db->query("select ");
        }
        else
        {
            $user_query=$this->db->query();
        }

        if ( count($user_query) )
        {
            $this->session->data[""]=$user_query[];
            return true;
        }
        else
        {
            return false;
        }
    }

    public function logout()
    {

    }

    public function has_permission($key, $value)
    {

    }

    public function is_logged()
    {

    }

    public function get_id()
    {

    }

    public function get_username()
    {

    }
}
