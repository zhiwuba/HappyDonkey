<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 14-6-15
 * Time: 下午6:50
 */

class ControllerBrowsePaint  extends Controller
{
    public function  index()
    {
        $this->template="browse/paint.php";

        $this->children=array("common/header.php","common/footer.php" );
/*   插入测试数据
        $i=1;
        while($i<100)
        {
            $pic_path="static/image/". rand(1,9) . ".jpg";
            $this->db->query("INSERT INTO hd_paints (file_path, thumb_path) VALUES( '" . $pic_path . "', '" . $pic_path . "')");
            $i++;
        }
*/
        $this->response->set_output($this->render());
    }

}



?>