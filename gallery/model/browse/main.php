<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-17
 * Time: 上午11:49
 */

class ModelBrowseArea  extends  Model
{
    public function  get_paint_sort_by_date( $begin, $count )
    {
        $paints=$this->db->query("SELECT * FROM hd_paints ORDER BY date_added DESC");
        return array_slice($paints, $begin, $count);
    }

    public function  get_paint_sort_by_heat($begin, $count)
    {
        $paints=$this->db->query("SELECT * FROM hd_paints ORDER BY mark DESC");
        return array_slice($paints, $begin, $count);
    }

}

