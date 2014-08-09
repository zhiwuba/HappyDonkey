<?php echo $header; ?>

<div id="paint_main" >
    <div id="screen" style="height: <?php echo $height+100;?>">
        <div id="paint_content">
            <div id="paint_container" style="width: <?php echo $width; ?>px;height: <?php echo $height; ?>px;">
                <img pid="<?php echo $paint_id; ?>" src="<?php echo DIR_Storage . $href; ?>" width="<?php echo $width; ?>px" height="<?php echo $height; ?>" >
            </div>
        </div>
        <div id="viewer_prev"></div>
        <div id="viewer_next"></div>
        <div id="paint-good"  style="width: 41px;" val="<?php echo $is_good;?>" type="0" textval0="顶" textval1="已顶">
            <div class="sprite-img" style="background-position: 0px -224px;"></div>
            <div class="sprite-text" style="display: none;"><?php if ($is_good)echo "已顶"; else echo "顶" ; ?></div>
        </div>
        <div id="paint-bad" style="width: 41px;" val="<?php echo $is_bad;?>" type="1" textval0="踩" textval1="已踩">
            <div class="sprite-img" style="background-position: -96px -224px;"></div>
            <div class="sprite-text" style="display: none;"><?php if($is_bad)echo "已踩"; else echo "踩";?></div>
        </div>
        <div id="paint-collect" style="width: 41px;" val="<?php echo $is_favorite; ?>" type="2" textval0="收藏" textval1="已藏">
            <div class="sprite-img" style="background-position: -64px -224px;"></div>
            <div class="sprite-text" style="display: none;"><?php if($is_favorite)echo "已藏"; else echo "收藏"; ?></div>
        </div>
    </div>

    <div id="preview">
        <div id="thumb_prev"></div>
        <div id="preview_list" current_id="a_preview_0">

        <?php $i=0; foreach($neighbors as $neighbor) {?>
            <div id="a_preview_<?php echo $i?>" class="a_preview">
                <div class="a_preview_inner">
                    <img pid="<?php echo $neighbor['paint_id']; ?>" src="<?php echo DIR_Storage . $neighbor['thumb_path'];?>" class="preview_thumb">
                </div>
            </div>
        <?php $i++; } ?>

        </div>
        <div id="thumb_next"></div>
    </div>

    <div id="paint_addition">
        <div id="discuss" >
            <div id="my_comment" > <!--class="shadow-box"-->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="我的快评">
                    <span class="input-group-btn" >
                        <button id="send_comment" class="btn btn-default" type="button"  style="background-color: #0A0A0A; color: #CCC">发送</button>
                    </span>
                </div>
            </div>

            <div id="other_comment" class="shadow-box div_center">
                <div id="comment-header">
                    <div style="padding-left: 10px">大家的评论</div>

                </div>
                <div id="comment_list">

                <?php foreach($comments as $comment){ ?>
                    <div class="a-comment">
                        <a class="avatar" namecard="<?php echo $comment['user_id']?>" href="<?php echo $comment['user_url'];?>">
                            <img class="image" src="http://localhost/happydonkey/static/image/avatar.jpg" >   <!-- "<--?php echo HTTP_SERVER . $comment['user_avatar']?>"-->
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
        </div>

        <div id="paint_info" class="shadow-box">
            <div id="paint_info_header">
                <div style="padding-left: 10px">详情</div>
            </div>
            <div id="paint_info_list">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

</div>

<?php echo $footer; ?>
