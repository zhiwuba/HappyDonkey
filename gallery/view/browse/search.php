<?php echo $header; ?>

<div id="search-container" class="div_center">

    <div id="search-box" style= "margin-top:30px">
        <div id="search_input" class="input-group">
            <input type="text" class="form-control" onkeypress="if(event.keyCode==13){search_gifs();}" value="<?php if(!$home)echo $keywords;?>">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" onclick="search_gifs()">搜索</button>
            </span>
        </div>
    </div>

    <div id="hot-search" style="margin-top: 10px">

    </div>
    <?php if ( $home ){?>

    <?php }else{ ?>
        <div id="search_result">
            <div id="result_list">
                <?php $i=0; foreach($results as $result){ ?>
                    <div class="a_search_result ">
                        <div class="search_item_info">
                            <div class="title">
                                <div class="title_id"><?php echo $i;?>. </div>
                                <div class="title_text"><a href="<?php echo $result['url'];?>"><?php echo $result['title']?></a></div>
                            </div>
                            <div class="body"><?php echo $result['text'];?></div>
                        </div>
                        <div class="search_item_img">
                            <a href="<?php echo $result['url'];?>">
                                <img src="<?php echo $result['thumb']?>" width="153px" height="100px">
                            </a>
                        </div>
                    </div>
                    <?php $i++; } ?>
            </div>
        </div>
    <?php } ?>

</div>

<?php echo $footer; ?>