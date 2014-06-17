<?php echo $header?>


<div class="container">
    <div class="gallery">
        <div id="welcome">
            <h1>Welcome to my website.</h1>
        </div>
        <div  id="paint_list">
            <ul >
            <?php foreach( $paint_list as $paint ){ ?>
                <li>
                    <div class="paint">
                        <img src="<?php echo $paint; ?>" >
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>

    <div >

    </div>

</div>


<?php echo $footer?>
