<?php echo $header; ?>


<div class="container" id="home_wrapper">
    <div id="user_section" class="shadow-box">
        <div id="user_avatar">
            <img src="<?php echo HTTP_SERVER . "static/image/big_avatar.jpg"?>" class="large_pic">
        </div>
        <div id="user_detail">
            <h1>用户名</h1>
        </div>
    </div>

    <div  id="user_tools">
        <div id="upload_pic">
        </div>
    </div>

    <div id="home_main">

        <div id="home_sidebar">
            <div id="my-nav-cont" class="shadow-box">
                <ul id="my-nav-list" class="nav nav-pills nav-stacked">
                    <li class="my-nav-item active">
                        <a href="#">我的发布</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#">我的收藏</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#">我的评论</a>
                    </li>
                </ul>
            </div>

            <div class="ad shadow-box">
                <h1> 广告</h1>
            </div>
        </div>

        <div id="home_news" class="div_center">
            <div id="news_list">
                <div class="a-news shadow-box">
                    <h1>上传了什么</h1>
                </div>
                <div class="a-news shadow-box">
                    <h1>更新了什么</h1>
                </div>
            </div>
        </div>

        <div id="home_addition">
            <div id="about_me" class="shadow-box">
                <h1>关于我</h1>
            </div>

            <div id="interesting" class="shadow-box">
                <h1>感兴趣的</h1>
            </div>

            <div class="ad shadow-box" >
                <h1>广告区</h1>
            </div>
        </div>
    </div>

</div>



<?php echo $footer; ?>
