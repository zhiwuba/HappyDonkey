<?php echo $header; ?>

<div id="paint_main" >
    <div id="screen" >
        <div id="paint_content">
            <div id="paint_container" style="width: 335px;height: 182px;">
                <img src="http://localhost/happydonkey/static/image/my2.gif" width="335" height="182" id="paint_img">
            </div>
        </div>
        <div id="viewer_prev"></div>
        <div id="viewer_next"></div>
    </div>

    <div id="preview">
        <div id="preview_list">
            <div class="a_preview">
                <div class="a_preview_inner">
                    <img src="http://localhost/happydonkey/static/image/my.png" class="preview_thumb">
                </div>
            </div>
            <div class="a_preview">
                <div class="a_preview_inner">
                    <img src="http://localhost/happydonkey/static/image/my2.png" class="preview_thumb">
                </div>
            </div>
        </div>
    </div>

    <div id="paint_addition">
        <div id="discuss" >
            <div id="my_comment" > <!--class="shadow-box"-->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="我的快评">
                <span class="input-group-btn" >
                    <button class="btn btn-default" type="button"  style="background-color: #0A0A0A; color: #CCC">发送</button>
                </span>
                </div>
            </div>

            <div id="other_comment" class="shadow-box div_center">
                <div id="comment-header">
                    <div style="padding-left: 10px">大家的评论</div>
                </div>
                <div id="comment_list">
                    <div class="a-comment">
                        <a class="avatar" namecard="" href="">
                            <img class="image" src="http://localhost/happydonkey/static/image/avatar.jpg">
                        </a>
                        <div class="content">
                            <p class="info">
                                <a class="user-name" namecard="" href="">菜鸟同学</a>
                                <span class="time">2014:04:04</span>
                            </p>
                            <span class="text">类信息网,为你提供房产、招聘、黄页、团购、交友、二手、宠物</span>
                        </div>
                    </div>

                    <div class="a-comment">
                        <a class="avatar" namecard="" href="">
                            <img class="image" src="http://localhost/happydonkey/static/image/avatar.jpg">
                        </a>
                        <div class="content">
                            <p class="info">
                                <a class="user-name" namecard="" href="">菜鸟同学</a>
                                <span class="time">2014:04:04</span>
                            </p>
                            <span class="text">类信息网,为你提供房产、招聘、黄页、团购、交友、二手、宠物</span>
                        </div>
                    </div>

                    <div class="a-comment">
                        <a class="avatar" namecard="" href="">
                            <img class="image" src="http://localhost/happydonkey/static/image/avatar.jpg">
                        </a>
                        <div class="content">
                            <p class="info">
                                <a class="user-name" namecard="" href="">菜鸟同学</a>
                                <span class="time">2014:04:04</span>
                            </p>
                            <span class="text">类信息网,为你提供房产、招聘、黄页、团购、交友、二手、宠物</span>
                        </div>
                    </div>

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
