<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-17
 * Time: 上午11:49
 */

class ModelBrowseMain  extends  Model
{
    public function  get_paint_sort_by_date( $begin, $count )
    {
        $paints=$this->db->query("SELECT * FROM hd_paints ORDER BY date_added DESC  LIMIT $begin,$count");
        return $paints;
    }

    public function  get_paint_sort_by_heat($begin, $count)
    {
        $paints=$this->db->query("SELECT * FROM hd_paints ORDER BY mark DESC  LIMIT $begin, $count");
        return $paints;
    }

    public function get_paint_count()
    {
        $result=$this->db->query("SELECT COUNT(*) as count FROM hd_paints");
        return $result[0]['count'];
    }

    public function  get_hot_comment($paint_id ,$count)
    {
        $result=$this->db->query("SELECT * FROM hd_comments WHERE paint_id=".$paint_id . "  ORDER BY good DESC LIMIT 0," . $count );
        return $result;
    }

    //TODO:  评分策略
    private function calculate_mark($comment_id)
    {

    }



}

