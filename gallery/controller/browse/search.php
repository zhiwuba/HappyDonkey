<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-26
 * Time: 上午11:30
 */

const kSearchShowCount=20;

class ControllerBrowseSearch extends Controller
{
    public  function  index()
    {
        $this->load->model('browse/search');

        $keywords=$this->request->get_args("keywords");
        if ($keywords)
        {
            $this->data['keywords']=$keywords;
            $this->search($keywords);

            $this->template="browse/search.php";
            $this->children=array("common/header","common/footer");
            $this->response->set_output($this->render());
        }

    }

    private function search($keywords)
    {
        $search_result=array();
        $query_result=$this->model_browse_search->search($keywords, kSearchShowCount);
        if ( $query_result )
        {
            foreach($query_result as $item)
            {
                $search_result[]=array(
                    "url"=>$this->url->link("browse/paint", array('pid'=>$item['paint_id'])),
                    "title"=>$item['header'],
                    "text"=>$item['comment'],
                    "thumb"=>$item['thumb_path'],
                );
            }
        }

        $this->data['results']=$search_result;
    }

}


?>