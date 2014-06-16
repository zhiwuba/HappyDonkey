<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午6:53
 */
class ModelBrowsePaint
{
    public function get_paint($paint_id)
    {
        $query_result=$this->db->query("SELECT * FROM hd_paints WHERE paint_id='" .$paint_id . "'");

        return $query_result;
    }

    //赞、匾
    public function appraise($paint_id, $good)
    {

    }

    //评论
    public function comment($paint_id, $user_id , $comment)
    {

    }

    //获取
    public function get_appraise($paint_id)
    {
        $query_result=$this->db->query("SELECT * FROM hd_marks WHERE paint_id='" .  $paint_id . "'");

        return $query_result;
    }

    //获取
    public function  get_comment($paint_id, $begin, $count)
    {
        $query_result=$this->db->query("SELECT * FROM hd_comments WHERE paint_id='" . $paint_id . "'");
        if ( count($query_result)>$begin )
        {
            return array_slice($query_result, $begin, $count);
        }
        else
        {
            return false;
        }
    }

    //收藏夹
    public function  favicon($user_id, $paint_id)
    {

    }

    public function  get_favicon($user_id)
    {

    }

}