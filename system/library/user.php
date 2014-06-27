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
    private $user_ip;
    private $email;

    public function  __construct($registry)
    {
        $this->db=$registry->get('db');
        $this->request=$registry->get('request');
        $this->session=$registry->get('session');

        if ($this->session->get("user_id"))
        {
            $user_query=$this->db->query("SELECT * FROM hd_users WHERE user_id='" . $this->session->get('user_id') ."' AND status='1'" );
            if ( count($user_query)==1 )
            {
                $user_info=$user_query[0];
                $this->user_id=$user_info["user_id"];
                $this->user_name=$user_info["username"];
                $this->email=$user_info["email"];
                $this->user_ip=$this->request->server['REMOTE_ADDR'];
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
            $command="SELECT *  FROM hd_users WHERE LOWER(email)='" . $this->db->escape($email) . "' AND status='1'" ;
            $user_query=$this->db->query($command);
        }
        else
        {
            $email_clean=$this->db->escape($email);
            $password_clean=$this->db->escape($password);
            //三次SHA1 加密
            $command="SELECT * FROM hd_users WHERE LOWER(email)='$email_clean' AND password=SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('$password_clean' )))))" ;
            //TODO:  AND status='1' status的理解

            $user_query=$this->db->query($command);
        }

        if ( count($user_query)==1 )
        {
            $user_info=$user_query[0];
            $this->session->set("user_id", $user_info["user_id"]);
            $this->user_id=$user_info["user_id"];
            $this->user_name=$user_info["username"];
            $this->email= $user_info["email"];
            $this->user_ip=$this->request->server['REMOTE_ADDR'];
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
        $this->user_ip='';
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

    public function  get_last_ip()
    {
        return $this->user_ip;
    }

}
