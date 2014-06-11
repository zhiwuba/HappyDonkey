<?php


final class HD_MySql
{
    private $mysqli;

    public function __construct($hostname,$username,$password,$database)
    {
        $this->mysqli=new mysqli($hostname,$username,$password,$database);
        if (mysqli_connect_errno() )
        {
            trigger_error('Error: could not make a database link('.  mysqli_connect_errno().')'.  mysqli_connect_error() );
        }
        
        $this->mysqli->query("SET NAMES 'utf8'");
        $this->mysqli->query("SET CHARACTER utf8");
        $this->mysqli->query("SET SET CHARACTER_SET_CONNECTION=utf8");
        $this->mysqli->query("SET SQL_MODE = ''");
        
    }
    
    public function __destruct() 
    {
        $this->mysqli->close();
    }
    
    public function query($sql)
    {
        return $this->mysqli->query($sql);
    }

    public function get_last_id()
    {
        return $this->mysqli->insert_id;
    }


}








?>