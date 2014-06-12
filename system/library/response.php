<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-11
 * Time: 下午6:29
 */

class Response
{
    private  $headers=array();
    private  $level=0;
    private  $output;

    public function add_header($header)
    {
        $this->headers[]=$header; //add to end
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;  //???
    }

    public function set_compression($level)
    {
        $this->level=$level;
    }

    public function  set_output($output)
    {
        $this->output=$output;
    }

    private  function compress($data, $level=0)
    {
        $server_coding=$_SERVER['HTTP_ACCEPT_ENCODING'];
        if ( isset($server_coding) && (strpos($server_coding, 'gzip')!=false) )
        {
            $encoding='gzip';
        }

        if( isset($server_coding) && (strpos($server_coding,'x-gzip')!=false) )
        {
            $encoding='x-gzip';
        }

        if (!isset($encoding) )
        {
            return $data;
        }

        if( !extension_loaded('zlib') || ini_get('zlib.output_compression') )
        {
            return $data;
        }

        if (headers_sent())
        {
            return $data;
        }

        if (connection_status())  //0: normal 1:aborted 2:timeout
        {
            return $data;
        }

        $this->add_header('Content-Encoding: ' . $encoding);

        return  gzencode($data, (int)$level);
    }

    public function output()
    {
        if ( $this->output )
        {
            if ( $this->level )
            {
                $output=$this->compress($this->output, $this->level);
            }
            else
            {
                $output=$this->output;
            }

            if ( !headers_sent() )  //sent: send的过去分词
            {
                foreach( $this->headers as $header  )
                {
                    header($header, true);
                }
            }

            echo $output;
        }
    }
}


?>
