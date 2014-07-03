<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-7-3
 * Time: 上午11:13
 */

class ModelBrowseSearch  extends Model
{
    public function search($keywords, $count)
    {
        $result=$this->db->query("SELECT *  FROM hd_paints LIMIT $count");
        return $result;
    }
}



?>