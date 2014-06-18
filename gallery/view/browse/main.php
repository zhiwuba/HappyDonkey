<?php echo $header?>


<div class="container" id="hd_main" >
    <div id="gallery" class="div_center">
        <!--div id="welcome">
            <h1>Welcome to my website.</h1>
        </div-->
        <div  id="paint_suggest" >
            <div class="shadow-box" id="today_popular">
                <h1>Today's popular</h1>
                <div id="popular_list">
                    <div class="a-popular"><span>1. 小浣熊偷吃的</span></div>
                    <div class="a-popular"><span>2. 睡醒醒的小猫</span></div>
                </div>
            </div>
            <div class="shadow-box" id="recommend_to_you">
                <h1>Recommend</h1>
                <div id="recommend_list">
                    <div class="a_recommend"></div>
                </div>
            </div>
            <div class="shadow-box" id="browse_history">
                <h1>Browse history </h1>
                <div id="history_list">
                    <div class="a_history"></div>
                </div>
            </div>
        </div>
        <div  id="paint_list" >
            <?php foreach( $paint_list as $paint ){ ?>
                <div  id="<?php echo $paint['id']?>" class="a-paint shadow-box div_center">
                    <div class="paint_header">
                        <h2>Paint头部</h2>
                    </div>
                    <div class="paint-content">
                        <img src="<?php echo $paint['href']; ?>" >
                    </div>
                    <div class="paint-info">
                        <span>Paint信息</span>
                    </div>
                    <div class="paint-comment-list">
                        <div class="a-comment">
                            <a class="avatar" namecard="" href="">
                                <img class="image" src="<?php echo HTTP_SERVER . "static/image/avatar.jpg"?>">
                            </a>
                            <div class="content">
                                <p class="info">
                                    <a class="user-name" namecard="" href="">无名氏</a>
                                    <span class="time">2014-06-18 09:39</span>
                                </p>
                                <span class="text">这图真漂亮</span>
                            </div>
                        </div>

                        <div class="a-comment">
                            <a class="avatar" namecard="" href=""></a>
                            <div class="content">
                                <p class="info">
                                    <a class="user-name" namecard="" href="">刘炳夏</a>
                                    <span class="time">2014-06-18 09:39</span>
                                </p>
                                <span class="text">这图真漂亮</span>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

            <div class="paging">
                <ul class="pagination">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>



    </div>
</div>

<?php echo $footer?>
