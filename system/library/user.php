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

    public function login($email, $password, $override=false)
    {
        if ( $override )
        {
            $command="SELECT *  FROM hd_users WHERE LOWER(email)='" . $this->db->escape(utf8_strtolower($email)) . "' AND status='1'" ;
            $user_query=$this->db->query($command);
        }
        else
        {
            //三次SHA1 加密
            $command="SELECT * FROM hd_users WHERE LOWER(email)='" . $this->db->escape(utf8_strtolower($email)) .
                "' AND (password=SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $this->db->escape(utf8_strtolower($password)) .
                "' ))))) OR password='" .$this->db->escape(md5($password)) . "' AND status='1'" ;

            $user_query=$this->db->query($command);
        }

        if ( count($user_query) )
        {
            $this->session->data["user_id"]=$user_query["user_id"];
            $this->user_id=$user_query["user_id"];
            $this->user_name=$user_query["user_name"];
            $this->email= $user_query["email"];
            return true;
        }
        else
        {
            return false;
        }
    }

    public function logout()
    {
        unset($this->session->data['user_id']);
        $this->user_id='';
        $this->user_name='';
        $this->email='';
    }

    public function has_permission($key, $value)
    {

    }

    public function is_logged()
    {
        return $this->user_id;
    }

    public function get_id()
    {
        return $this->user_id;
    }

    public function get_username()
    {
        return $this->user_name;
    }

    public function  get_email()
    {
        return $this->email;
    }

}
