<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-26
 * Time: 下午12:59
 */

class ModelBrowseBoard extends Model
{
    public  function  get_today_hot($count)
    {
        return $this->db->query("SELECT paint_id,comment FROM hd_paints ORDER BY good DESC LIMIT $count");
    }

    public  function get_search_hot($count)
    {
        return $this->db->query("SELECT paint_id,comment FROM hd_paints ORDER BY bad DESC LIMIT $count");
    }

    public  function get_new_update($count)
    {
        return $this->db->query("SELECT paint_id,comment FROM hd_paints ORDER BY date_added DESC LIMIT $count");
    }

    public  function get_month_hot($count)
    {
        return $this->db->query("SELECT paint_id,comment FROM hd_paints ORDER BY date_added DESC LIMIT $count");
    }

    public  function get_popular_author($count)
    {
        return $this->db->query("SELECT paint_id,comment FROM hd_paints ORDER BY good LIMIT $count");
    }

    public  function get_click_rank($count)
    {
        return $this->db->query("SELECT paint_id,comment  FROM hd_paints ORDER BY good LIMIT $count");
    }
}

