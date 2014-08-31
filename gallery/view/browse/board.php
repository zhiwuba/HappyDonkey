<?php echo $header; ?>

<div id="board_container" class="div_center">
    <div id="board_main">
        <div id="board_list">

    <?php foreach($boards as $board){?>
        <div class="a-board shadow-box">
            <div class="column_header" style="background-color:<?php echo $board['color']; ?>">
                <div class="head_font"><?php echo $board['head'];?></div>
            </div>
            <div id="<?php echo $board["id"]; ?>_list">
                <?php $i=0; foreach($board['data'] as $item ){?>
                    <div class="a_<?php echo $board['id']; ?>" >
                        <a href="<?php echo HTTP_SERVER ."index.php?route=browse/paint&pid=".$item['paint_id'];?>" namecard="<?php echo $item['paint_id'];?>">
                            <div class="item_brief"><?php echo "$i. " . comment_brief($item['comment'],17); ?></div>
                        </a>
                    </div>
                <?php $i++; }?>
            </div>
        </div>
    <?php } ?>

        </div>
    </div>
</div>


<?php echo $footer; ?>