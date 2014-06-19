<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午6:53
 */
class ModelBrowsePaint extends  Model
{
    //
    public function get_paint($paint_id)
    {
        $query_result=$this->db->query("SELECT * FROM hd_paints WHERE paint_id='" .$paint_id . "'");

        return $query_result;
    }

    //赞、匾
    public function appraise($paint_id, $good)
    {
        if ($good)
        {
            $this->db->query("UPDATE hd_paints  SET good=good+1  WHERE paint_id='" . $paint_id . "'");
        }
        else
        {
            $this->db->query("UPDATE hd_paints  SET bad=bad+1 WHERE paint_id='" . $paint_id . "'");
        }
    }

    //评论
    public function comment($paint_id, $user_id , $comment)
    {
        $result=$this->db->query("INSERT INTO hd_comments (paint_id,user_id,comment,date_added) VALUES ('" . $paint_id . "', '" . $user_id . "', '" . $comment . "', NOW())");
        return $result;
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
        $query_result=$this->db->query("SELECT * FROM hd_favorites WHERE user_id='" .$user_id. "' AND paint_id='" .$paint_id . "' ");
        if ( count($query_result)>0 )
        {
            return false;
        }
        else
        {
            $query_result=$this->db->query("INSERT INTO hd_favorites (user_id, paint_id, date_added) VALUES ('" . $user_id . "' ,'" . $paint_id . "' , NOW())");
            if ( $query_result )
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function  get_favicon($user_id)
    {
        $query_result=$this->db->query("SELECT * FROM hd_favorites WHERE user_id='" .$user_id. "'");
        return  $query_result;
    }

}