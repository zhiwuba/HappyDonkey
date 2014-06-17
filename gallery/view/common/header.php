<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
<?php if ($description): ?>
    <meta name="description" content="<?php echo $description; ?>">
<?php endif; ?>
<?php if ($icon): ?>
    <link href="<?php echo $icon; ?>" rel="icon"/>
<?php endif; ?>
<?php foreach($links as $link){ ?>
    <link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach($styles as $style ){ ?>
    <link rel="<?php echo $style['rel']?>" type="text/css" href="<?php echo $style['href']; ?>" />
<?php } ?>
<?php foreach($scripts as $script ){ ?>
    <script type="text/javascript" src="<?php echo $script; ?>" ></script>
<?php } ?>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ProjectName</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                    <li><a href=""><i class="glyphicon glyphicon-registration-mark"></i> 注册</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-log-in"></i> 登陆</a></li>
                </ul>

                <form class="navbar-form navbar-right" role="search" action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="搜索" name="word">
                    </div>
                </form>
            </div>

        </div>
    </div>


<!--/body>
</html-->
