<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午6:53
 */
const kFavorite=4;
const kBad=2;
const kGood=1;

class ModelBrowsePaint extends  Model
{
    // 获取Paint的信息
    public function get_paint($paint_id, $type='', $offset=0)
    {
        $paint=array();
        if ( $offset==0 )
        { //cur
            $result=$this->db->query("SELECT * FROM hd_paints WHERE paint_id=$paint_id");
            $paint=$result[0];
        }
        else if ( $offset<0 )
        { //prev
            $result=$this->db->query("SELECT * FROM hd_paints WHERE paint_id<$paint_id ORDER BY paint_id DESC LIMIT 1");
            $paint=$result[0];
        }
        else if ($offset >0)
        {  //next
            $result=$this->db->query("SELECT * FROM hd_paints WHERE paint_id>$paint_id LIMIT 1");
            $paint=$result[0];
        }
        return $paint;
    }

    public function get_neighbors($paint_id,$type ,$is_forward ,$count )
    {
        if ( $is_forward )
        {
            $neighbor=$this->db->query("SELECT paint_id,thumb_path FROM hd_paints WHERE paint_id>$paint_id LIMIT $count");
        }
        else
        {
            $neighbor=$this->db->query("SELECT paint_id,thumb_path FROM hd_paints WHERE paint_id<$paint_id ORDER BY paint_id DESC LIMIT $count");
        }
        return $neighbor;
    }

    //赞、匾
    public function appraise($user_id, $paint_id, $good,$abolish=false)
    {
        if ($good)
        {
            $this->update_record($user_id, $paint_id, $abolish, kGood);
            $cc=$abolish ? -1 : 1;
            $this->db->query("UPDATE hd_paints  SET good=good+$cc  WHERE paint_id= $paint_id");
        }
        else
        {
            $this->update_record($user_id, $paint_id, $abolish, kBad);
            $cc=$abolish ? -1 : 1;
            $this->db->query("UPDATE hd_paints  SET bad=bad+$cc  WHERE paint_id= $paint_id");
        }
    }

    //收藏夹
    public function  favicon($user_id, $paint_id, $abolish)
    {
        return $this->update_record($user_id, $paint_id, $abolish, kFavorite);
    }

    //获取user_id--paint_id记录
    public function get_record($user_id, $paint_id)
    {
        $query_result=$this->db->query("SELECT operate FROM hd_records WHERE user_id=$user_id AND paint_id=$paint_id");
        if ( count($query_result)>0 )
        {
            return $query_result[0];
        }
        return false;
    }

    //评论
    public function comment($paint_id, $user_id , $comment)
    {
        $result=$this->db->query("INSERT INTO hd_comments (paint_id,user_id,content,date_added) VALUES ('" . $paint_id . "', '" . $user_id . "', '" . $comment . "', NOW())");
        return $result;
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


    private function update_record( $user_id, $paint_id, $abolish, $value )
    {
        if ( $abolish )
        {
            $vv=$value-1;
            $query_result=$this->db->query("UPDATE hd_records SET operate=operate&$vv)  WHERE user_id=$user_id AND paint_id=$paint_id");
            return $query_result? true: false;
        }
        else
        {
            $query_result=$this->db->query("SELECT  record_id FROM hd_records WHERE user_id=$user_id AND paint_id=$paint_id");
            if ( count($query_result)>0 )
            {   //如果已存在  直接返回true
                $record_id=$query_result[0]['record_id'];
                $query_result=$this->db->query("UPDATE hd_records SET operate=operate|$value , favorite_date=NOW()  WHERE record_id=$record_id");
                return $query_result? true: false;
            }
            else
            {   //如果不存在
                $query_result=$this->db->query("INSERT INTO hd_records (user_id, paint_id,operate, favorite_date) VALUES ($user_id ,$paint_id, $value ,NOW())");
                return $query_result? true: false;
            }
        }
    }






}