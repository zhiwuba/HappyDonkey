<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午6:53
 */

class ModelBrowsePaint extends  Model
{
    // 获取Paint的信息
    public function get_paint($paint_id)
    {
        $query_result=$this->db->query("SELECT * FROM hd_paints WHERE paint_id=$paint_id");
        return $query_result[0];
    }

    public function get_neighbors($paint_id, $is_forward ,$count )
    {
        if ( $is_forward )
        {
            $neighbor=$this->db->query("SELECT paint_id,thumb_path FROM hd_paints WHERE paint_id>$paint_id LIMIT $count");
        }
        else
        {
            $neighbor=$this->db->query("SELECT paint_id,thumb_path FROM hd_paints WHERE paint_id<$paint_id ORDER BY date_added DESC LIMIT $count");
        }
        return $neighbor;
    }

    //赞、匾
    public function appraise($paint_id, $good)
    {
        if ($good)
        {
            $this->db->query("UPDATE hd_paints  SET good=good+1  WHERE paint_id= $paint_id");
        }
        else
        {
            $this->db->query("UPDATE hd_paints  SET bad=bad+1 WHERE paint_id=$paint_id");
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
        $query_result=$this->db->query("SELECT * FROM hd_marks WHERE paint_id=$paint_id");

        return $query_result;
    }

    //获取
    public function  get_comment($paint_id, $begin, $count)
    {
        $result=$this->db->query("SELECT * FROM hd_comments WHERE paint_id=$paint_id ORDER BY date_added LIMIT  $begin , $count");
        return $result;
    }

    public function  get_comment_count($paint_id)
    {
        $result=$this->db->query("SELECT COUNT(*) as count FROM hd_comments WHERE paint_id=$paint_id");
        return $result[0]['count'];
    }


    //收藏夹
    public function  favicon($user_id, $paint_id)
    {
        $query_result=$this->db->query("SELECT * FROM hd_favorites WHERE user_id=$user_id AND paint_id=$paint_id");
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
        $query_result=$this->db->query("SELECT * FROM hd_favorites WHERE user_id=$user_id");
        return  $query_result;
    }

}