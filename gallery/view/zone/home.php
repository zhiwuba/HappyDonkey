<?php echo $header; ?>


<div class="container" id="home_wrapper">



    <div id="user_section" class="shadow-box">
        <div  class="thumbnail" style="width: 150px; height: 150px; float:left">
            <img src="<?php echo HTTP_SERVER . $avatar_large_path; ?>" style="width: 150px;">
        </div>
        <div id="user_detail">
            <div class="shadow-text"><?php echo $username;?></div>
        </div>
    </div>

    <div  id="user_tools">
        <div id="upload_pic">
        </div>
    </div>

    <div id="home_main">

        <div id="home_news" class="div_center">
            <div id="news_header" class="shadow-box shadow-text">
                <div style="padding-left: 10px">最新动态</div>
            </div>

            <div id="news_list">
                <div class="panel-group" id="accordion">
                <?php $i=1;?>
                <?php foreach($collection as $part) {?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" class="shadow-text">
                                    <?php echo $part['date']; ?>
                                    (<?php if( $part['type']=='favorite')
                                            echo "收藏";
                                        else
                                            echo "上传";
                                    ?>)
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse<?php if($i==1) echo 'in'; ?>">
                            <div class="panel-body">
                                <div class="thumb_list">
                                <?php foreach( $part['items']  as  $paint) {?>
                                    <div class="a-thumb" namecard="<?php echo $paint['paint_id']; ?>">
                                        <img src="<?php echo HTTP_SERVER . $paint['thumb_href']; ?>" >
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php ++$i; } ?>
                </div>
            </div>
        </div>


        <div id="home_addition">
            <div id="about_me" class="shadow-box">
                <div class="column_header">
                    <div class="head_font">我的排行</div>
                </div>
                <div id="popular_list" class="column_body">
                    <?php $i=0; foreach($recommend as $item ){ ?>
                        <div class="a-popular">
                            <a href="<?php echo $item['url']; ?>"  namecard="<?php echo $item['paint_id']?>">
                                <div class="item_brief"><?php echo $i . ". " . $item['header'] ?></div>
                            </a>
                        </div>
                    <?php $i++;} ?>
                </div>
            </div>

            <div id="interesting" class="shadow-box">
                <div class="column_header">
                    <div class="head_font">猜你感兴趣</div>
                </div>
                <div id="popular_list" class="column_body">
                    <?php $i=0; foreach($recommend as $item ){ ?>
                        <div class="a-popular">
                            <a href="<?php echo $item['url']; ?>"  namecard="<?php echo $item['paint_id']?>">
                                <div class="item_brief"><?php echo $i . ". " . $item['header'] ?></div>
                            </a>
                        </div>
                    <?php $i++;} ?>
                </div>
            </div>

            <div class="ad shadow-box" style="display:  node">
                <div>
                    <img src="/HappyDonkey/static/image/ad.jpg" width="188" height="266">
                </div>
            </div>
        </div>
    </div>

</div>



<?php echo $footer; ?>
