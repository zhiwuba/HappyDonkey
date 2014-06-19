<?php
/**
 * Created by PhpStorm.
 * User: bingxia
 * Date: 14-6-19
 * Time: 下午7:38
 */

class ControllerErrorTest extends  Controller
{
    public function  index()
    {
        $this->add_test_data();
        exit;
    }

    private function  add_test_data()
    {
        $paint_headers=array(
            "美丽的西双版纳", "迷人的吉普岛", "清澈的西藏", "干涸的内蒙古沙漠", "有意思的图片", "神秘的钓鱼台"
        );

        $authors=array(
            "山水之恋", "手撕包菜", "投中集团", "搞笑大图分享", "小平","健翔" ,"新媒体", "青年旅社", "哈弗"
        );

        $sourceurls=array(
            "http://weibo.com/8omusic/home?wvr=5",
            "http://weibo.com/8omusic/home?wvr=6",
            "http://weibo.com/8omusic/home?wvr=7",
            "http://weibo.com/8omusic/home?wvr=8",
            "http://weibo.com/8omusic/home?wvr=9",
            "http://weibo.com/8omusic/home?wvr=0",
            "http://weibo.com/8omusic/home?wvr=1",
            "http://weibo.com/8omusic/home?wvr=2",
            "http://weibo.com/8omusic/home?wvr=3",
            "http://weibo.com/8omusic/home?wvr=4",
            "http://weibo.com/8omusic/home?wvr=5",
            "http://weibo.com/8omusic/home?wvr=11",
        );


        $comment_library=array(
            "本来就想去，看着就更想去拉",
            "郁郁葱葱的山",
            "正因为地处偏僻，所以美得令人动容。",
            "请问您有没有进原始森林？想了解一下走原始森林大概要多久",
            "漂亮啊！",
            "美啊",
            "人间仙境啊，好想去",
            "不错 不错",
            "不错哦",
            "一定要错开十一呀，哈哈",
            "要不怎么有淡季，大家都不去",
            "人少 风景不好啊",
            "九寨沟就像每次画画后被水冲过的颜料盘，五颜六色，看起来就像一盘没有大厨精心搭配过的大餐",
            "6月份去应该直接可以短袖了吧",
            "美得难以用任何语言和画笔描画！",
            "这照片是自己拍的？以为春天这里会一片绿景，没想到有季节差异",
            "真的很棒",
            "太美了，这么没有得说了",
            "美得向画",
            "有如仙境",
        );
        /*
        $i=1;
        while($i<100)
        {
            $pic_path="static/image/". rand(1,9) . ".jpg";
            $user_id=rand(1,5);
            $head=$paint_headers[rand(0, 5)];
            $author=$authors[rand(0, 8)];
            $url=$sourceurls[rand(0,10)];
            $good=rand(1,500);
            $bad=rand(1,500);

            $this->db->query("INSERT INTO hd_paints (paint_id,file_path, thumb_path, date_added,user_id,comment,good,bad, author, source_url) VALUES(" . $i . ", '" . $pic_path .
                "', '" . $pic_path . "', NOW(), " . $user_id . ", '". $head . "', " . $good . ", " . $bad . ",'" . $author . "', '" . $url . "' )");
            $i++;
        }

        $i=1;
        while( $i<100 )
        {
            $count=rand(0,100);
            $j=0;
            while($j<$count)
            {
                $good=rand(1,500);
                $bad=rand(1,500);
                $user_id=rand(1,5);
                $content=$comment_library[rand(0,19)];
                $this->db->query("INSERT INTO hd_comments (paint_id,user_id,content,good, bad,date_added) VALUES(" . $i . ", ". $user_id .", '" .$content ."' , ". $good .", " . $bad .", NOW())");
                $j++;
            }
            $i++;
        }*/

        /*
        $i=1;
        while(  $i< 6 )
        {
            $count=rand(1,80);
            $j=0;
            while( $j<$count )
            {
                $paint_id=rand(1, 99);
                $this->db->query("INSERT INTO hd_favorites (user_id , paint_id , date_added ) VALUES(" . $i . " , "  . $paint_id . "  , NOW())");
                $j++;
            }
            $i++;
        }*/

    }

}





