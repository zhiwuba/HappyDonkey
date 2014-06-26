<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-16
 * Time: 下午4:39
 */

class Url
{
    private $url;
    private $ssl;

    public function __construct($url, $ssl)
    {
        $this->url=$url;
        $this->ssl=$ssl;
    }

    public function link($route, $args, $connection='NONSSL')
    {
        if ( $connection=='NONSSL' )
        {
            $url=$this->url;
        }
        else
        {
            $url=$this->ssl;
        }

        $url .='index.php?route=' .$route;

        if ( $args )
        {
            foreach( $args as $key=>$value )
            {
                $url .=( "&$key=" .ltrim($value) );
            }
        }
        return $url;
    }

}

?>