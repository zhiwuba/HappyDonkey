<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-26
 * Time: 上午11:30
 */

class ControllerBrowseSearch extends Controller
{
    public  function  index()
    {
        $this->template="browse/search.php";
        $this->children=array("common/header","common/footer");
        $this->response->set_output($this->render());
    }
}


?>