<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午8:22
 */

class ModelZoneHome extends Model
{
    public function  get_info()
    {

    }

    public function  get_favorites($user_id)
    {
        $result=$this->db->query("SELECT * FROM hd_favorites WHERE user_id=$user_id  ORDER BY date_added DESC");
        return $result;
    }

    public function  add_favorite($user_id , $paint_id)
    {
        $result=$this->db->query("SELECT * FROM hd_favorites WHERE user_id=$user_id AND paint_id=$paint_id");
        if ( count($result[0]) )
        {   //已经有了
            return false;
        }
        else
        {
            $this->db->query("INSERT INTO hd_favorites (user_id,paint_id,date_added) VALUES($user_id, $paint_id, NOW())");
            return true;
        }
    }

    public function delete_favorite($favorite_id)
    {
        $this->db->query("DELETE FROM hd_favorites WHERE favorite_id=$favorite_id");
        return true;
    }

}



?>
