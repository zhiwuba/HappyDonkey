<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-8-31
 * Time: 下午2:02
 */




function comment_brief($comment, $max_len=20)
{
    if( strlen($comment)>$max_len)
    {
        return mb_substr($comment,0,$max_len-3, 'utf-8') . '...';
    }
    else
    {
        return $comment;
    }
}


