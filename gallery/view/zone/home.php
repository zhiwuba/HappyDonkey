<?php echo $header; ?>


<div class="container" id="home_wrapper">



    <div id="user_section" class="shadow-box">
        <div  class="thumbnail" style="width: 150px; height: 150px; float:left">
            <img src="<?php echo HTTP_SERVER . "static/image/big_avatar.jpg"?>" style="width: 150px;">
        </div>
        <div id="user_detail">
            <div class="shadow-text">韩柳</div>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="shadow-text">
                                    2014.6.24 (收藏/上传)
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="thumb_list">
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/1.jpg" >
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/2.jpg">
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/3.jpg">
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/4.jpg">
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/1.jpg" >
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/2.jpg">
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/3.jpg">
                                    </div>
                                    <div class="a-thumb">
                                        <img src="/HappyDonkey/static/image/4.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    2014.6.23
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    2014.6.22
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="home_addition">
            <div id="about_me" class="shadow-box">
                <div class="column_header">
                    <div class="head_font">我的排行</div>
                </div>
                <div id="popular_list" class="column_body">
                    <?php $i=0; foreach($popular as $item ){ ?>
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
                    <?php $i=0; foreach($popular as $item ){ ?>
                        <div class="a-popular">
                            <a href="<?php echo $item['url']; ?>"  namecard="<?php echo $item['paint_id']?>">
                                <div class="item_brief"><?php echo $i . ". " . $item['header'] ?></div>
                            </a>
                        </div>
                        <?php $i++;} ?>
                </div>
            </div>

            <div class="ad shadow-box" style="display:  node">
                <h1>广告区</h1>
            </div>
        </div>
    </div>

</div>



<?php echo $footer; ?>
