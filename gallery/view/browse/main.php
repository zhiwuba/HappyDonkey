<?php echo $header?>


<div class="container" id="hd_main" >
    <div id="gallery" class="div_center">
        <!--div id="welcome">
            <h1>Welcome to my website.</h1>
        </div-->
        <div  id="paint_suggest" >

            <div class="shadow-box" id="today_popular">
                <div class="column_header">
                    <div class="head_font">大家都在看</div>
                </div>
                <div id="popular_list" class="column_body">
                <?php $i=0; foreach($popular as $item ){ ?>
                    <div class="a-popular">
                        <a href="<?php echo $item['url']; ?>"  namecard="<?php echo $item['paint_id']?>">
                            <div class="item_brief"><?php echo $i . ". " . comment_brief($item['comment']); ?></div>
                        </a>
                    </div>
                <?php $i++;} ?>
                </div>
            </div>

            <div class="shadow-box" id="recommend_to_you">
                <div class="column_header">
                    <div class="head_font">猜您喜欢</div>
                </div>
                <div id="recommend_list">
                <?php $i=0; foreach($recommend as $item){ ?>
                    <div class="a_recommend">
                        <a href="<?php echo $item['url']; ?>" namecard="<?php echo $item['paint_id']; ?>">
                            <div class="item_brief"><?php echo $i . ". " . comment_brief($item['comment']); ?></div>
                        </a>
                    </div>
                <?php $i++; };?>
                </div>
            </div>

            <div class="shadow-box" id="browse_history">
                <div class="column_header">
                    <div class="head_font">我的足迹</div>
                </div>
                <div id="history_list">
                <?php $i=0 ;foreach($history as $item) {?>
                    <div class="a_history">
                        <a href="<?php echo $item['url'];?>" namecard="<?php echo $item['paint_id']?>">
                            <div class="item_brief"><?php echo $i. " ." . comment_brief($item['comment']); ?></div>
                        </a>
                    </div>
                <?php $i++;};?>
                </div>
            </div>
        </div>

        <div  id="paint_list" >
            <?php $i=1; ?>
            <?php foreach( $paint_list as $paint ){ ?>
                <div  id="<?php echo $paint['id']?>" class="a-paint shadow-box div_center">
                    <div class="paint-header">
                        <div class="paint-number">
                            <span><?php echo $i;?></span>
                        </div>
                        <div class="paint-date">
                            <span><?php echo $paint['date'];?></span>
                        </div>
                    </div>
                    <div class="paint-brief-info">
                        <span><?php echo $paint['comment'];?></span>
                    </div>
                    <div class="paint-content">
                        <div class="paint-wrap">
                            <a href="javascript: play_gif(<?php echo $paint['id'];?>, '<?php echo $paint['movie_url'];?>')">
                                <img src="<?php echo $paint['thumb']; ?>" >
                            </a>
                        </div>
                    </div>
                    <div class="paint-operate beauty_alphabet">
                        <div class="btn-toolbar" role="toolbar">
                            <button class="btn btn-default btn-sm btn-good" data-toggle="tooltip" data-placement="bottom" title="赞">
                                <span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $paint['good'];?>
                            </button>
                            <button class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="踩"·>
                                <span class="glyphicon glyphicon-thumbs-down"></span> <?php echo $paint['bad']?>
                            </button>
                            <button class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="收藏">
                                <span class="glyphicon glyphicon-star-empty"></span> <?php echo $paint['mark'];?>
                            </button>
                        </div>
                    </div>
                    <div class="paint-comment-list">

                    <?php foreach($paint['other_comments'] as $comment){ ?>
                        <div class="a-comment">
                            <a class="avatar" namecard="<?php echo $comment['user_id']?>" href="<?php echo $comment['user_url'];?>">
                                <img class="image" src="<?php echo HTTP_SERVER . $comment['user_avatar']?>">
                            </a>
                            <div class="content">
                                <p class="info">
                                    <a class="user-name" namecard="<?php echo $comment['user_id']?>" href="<?php echo $comment['user_url'];?>"><?php echo $comment['user_name'];?></a>
                                    <span class="time"><?php echo $comment['date']?></span>
                                </p>
                                <span class="text"><?php echo $comment['content']; ?></span>
                            </div>
                        </div>
                    <?php } ?>

                    </div>
                </div>
            <?php $i++;} ?>

            <div class="paging">
                <ul class="pagination">
                    <li class="<?php echo $previous['status']?>"><a href="<?php echo $previous['url'];?>" >上一页</a></li>

                <?php foreach($pages as $page){ ?>
                    <li class="<?php echo $page['status'];?>"><a href="<?php echo $page['url'];?>" ><?php echo $page['num'];?></a></li>
                <?php } ?>

                    <li class="<?php echo $next['status']?>"><a href="<?php echo $next['url']; ?>" >下一页</a></li>
                </ul>
            </div>
        </div>



    </div>
</div>

<?php echo $footer?>
