<?php echo $header; ?>

<div id="paint_main" >
    <div id="screen" >
        <div id="paint_content">
            <div id="paint_container" style="width: 335px;height: 182px;">
                <img src="http://localhost/happydonkey/static/image/my.gif" width="335" height="182" id="paint_img">
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

    <div id="discuss" >
        <div id="my_comment" class="shadow-box div_center">
            <form role="form">
                <textarea class="form-control" row="3"></textarea>
                <button class="btn btn-primary" type="submit">提交</button>
            </form>
        </div>

        <div id="other_comment" class="shadow-box div_center">
            <div id="comment_list">
                <div class="a-comment">
                    <h4>asdfadfa</h4>
                </div>
                <div class="a-comment">
                    <h4>iojiujoiiujji</h4>
                </div>
            </div>
        </div>

    </div>





</div>

<?php echo $footer; ?>
