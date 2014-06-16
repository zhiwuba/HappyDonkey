<?php


final class HD_MySql
{
    private $link;

    public function __construct($hostname,$username,$password,$database)
    {
        $this->link=new mysqli($hostname,$username,$password,$database);
        if (mysqli_connect_errno() )
        {
            trigger_error('Error: could not make a database link('.  mysqli_connect_errno().')'.  mysqli_connect_error() );
        }
        
        $this->link->set_charset("utf8");
        $this->link->query("SET SQL_MODE = ''");
    }
    
    public function __destruct() 
    {
        $this->link->close();
    }
    
    public function query($sql)
    {
        $result = $this->link->query($sql);
        if  ($result )
        {   //query
            if ( isset($result->num_rows) )
            {
                $data=array();
                while ( $row=$result->fetch_assoc() )
                {
                    $data[]=$row;
                }
                $result->free();
                return $data;
            }
            else
            {   //update insert  delete.
                return true;
            }
        }
        else
        {
            trigger_error('Error: ' . mysql_error($this->link));
            exit();
        }
    }

    public function escape($value)
    {
        return $this->link->real_escape_string($value);
    }

    public function  count_affected()
    {
        return $this->link->affected_rows;
    }

    public function get_last_id()
    {
        return $this->link->insert_id;
    }


}








?>