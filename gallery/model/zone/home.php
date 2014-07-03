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

    //获取用户收藏夹
    public function  get_favorites($user_id)
    {
        $result=$this->db->query("SELECT * FROM hd_records WHERE user_id=$user_id AND operate>=". kFavorite . "  ORDER BY favorite_date DESC"  );
        return  $result;
    }

    public function delete_favorite($favorite_id)
    {
        $this->db->query("DELETE FROM hd_favorites WHERE favorite_id=$favorite_id");
        return true;
    }

}



?>
