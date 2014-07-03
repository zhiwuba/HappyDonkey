<?php

class Session
{
    public $data=array();

    public function __construct()
    {
        if ( !session_id() )
        {
            ini_set('session.use_cookies', 'On');
            ini_set('session.use_trans_sid', 'Off');

            session_cache_limiter('private');
            session_set_cookie_params(0 , '/');
            session_start();
        }

        $this->data=& $_SESSION;
    }

    public function set( $key, $value)
    {
        $this->data[$key]=$value;
    }

    public function  get( $key )
    {
        if ( isset($this->data[$key]) )
        {
            return $this->data[$key];
        }
        else
        {
            return false;
        }
    }

    function get_id()
    {
        return session_id();
    }
}





?>