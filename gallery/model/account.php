<?php

class ModelAccount extends  Model
{
    public function  register($name, $email, $password)
    {
        $info=array();

        if ( strlen($password)<6 )
        {
            $info['status']='fail';
            $info['info']='密码请用大于6位的数字或字母';
            return  $info;
        }

        $query_result=$this->db->query("SELECT * FROM hd_users WHERE username='" . $name . "' ");
        if ( count($query_result) )
        {
            $info['status']='fail';
            $info['info']='用户名已经被注册';
            return $info;
        }

        $query_result=$this->db->query("SELECT * FROM hd_users WHERE email='" . $email . "'");
        if ( count($query_result) )
        {
            $info['status']='fail';
            $info['info']='邮箱已经被注册';
            return $info;
        }

        $salt=$this->db->escape(substr(md5(uniqid(rand(),true)),0, 9));  //产生一个9位数的随机ID
        $saved_password=$this->db->escape(sha1($salt . sha1($salt . sha1($password))));
        $user_value=sprintf("('%s','%s','%s','%s',%d,'NOW()','%s')", $this->db->escape($name),$this->db->escape($email),
            $salt, $saved_password, 1,$this->request->server['REMOTE_ADDR'] );
        $this->db->query("INSERT INTO hd_users (username, email, salt, password, status, date_added, ip) VALUES " .  $user_value);

        $info['user_id']=$this->db->get_last_id();
        $info['status']='success';

        return $info;
    }

    public function reset_password($email, $new_password)
    {
        if ( $this->user->is_logged() )
        {
            $query_result=$this->db->query("UPDATE hd_users SET password='" .$new_password . " ' WHERE email='" . $this->db->escape($email) . "'");
            if ( $query_result )
            {
                return true;
            }
        }
        return false;
    }

    public function  get_user_info($user_id)
    {
        $result=$this->db->query("SELECT username,avatar_thumb_path, avatar_large_path, email  FROM hd_users WHERE user_id=". $user_id );
        if ( count($result)==1 )
        {
            return $result[0];
        }
        else
        {
            return false;
        }
    }


}