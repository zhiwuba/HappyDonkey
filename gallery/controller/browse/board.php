<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-26
 * Time: 下午12:59
 */

const KBoardItemShowCount=10;

class ControllerBrowseBoard extends Controller
{
    public function  index()
    {
        $this->set_document();
        $this->load->model("browse/board");

        $this->load_every_board();

        $this->template="browse/board.php";
        $this->children=array("common/header", "common/footer");
        $this->response->set_output($this->render());
    }

    private function  set_document()
    {
        $this->document->set_data('title', "GIF库-风云榜");
        $this->document->set_data('description', "GIF库-风云榜");
        $this->document->set_data('current', "board");
    }

    private function load_every_board()
    {
        $boards=array(
            array("head"=>"今日最热", "color"=>"#E7B402" ,"id"=>"today_hot" ,"data"=>$this->model_browse_board->get_today_hot(KBoardItemShowCount) ),
            array("head"=>"热门搜索", "color"=>"#E97E06" ,"id"=>"search_hot" ,"data"=>$this->model_browse_board->get_search_hot(KBoardItemShowCount) ),
            array("head"=>"最新更新", "color"=>"#1AAF5E" ,"id"=>"new_update", "data"=>$this->model_browse_board->get_new_update(KBoardItemShowCount) ),
            array("head"=>"本月最热", "color"=>"#3D96DC" ,"id"=>"month_hot",  "data"=>$this->model_browse_board->get_month_hot(KBoardItemShowCount) ),
            array("head"=>"热门作者", "color"=>"#3BC019" ,"id"=>"popular_author", "data"=>$this->model_browse_board->get_popular_author(KBoardItemShowCount)),
            array("head"=>"总点击排行","color"=>"#2A74FB" , "id"=>"click_rank", "data"=>$this->model_browse_board->get_click_rank(KBoardItemShowCount )),
        );
        $this->data['boards']=$boards;
    }
}


?>
