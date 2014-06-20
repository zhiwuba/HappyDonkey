<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-20
 * Time: 上午10:48
 */

class ModelBrowseTop extends  Model
{
    public function  get_leader_board()
    {

    }


    public function get_hot_paint_by_comment()  //
    {

    }

    public function get_hot_paint_by_favorites()
    {

    }

    public function get_hot_paint_by_mark($count)
    {
        $result=$this->db->query("SELECT paint_id, header FROM hd_paints ORDER BY mark DESC LIMIT " . $count );
        return $result;
    }

    public  function  get_paints_header($paint_ids)
    {
        $result=array();
        foreach( $paint_ids as $paint_id )
        {
            $info=$this->db->query("SELECT paint_id,header FROM hd_paints WHERE paint_id=" . $paint_id );
            $result[]=$info;
        }
        return $result;
    }

}

