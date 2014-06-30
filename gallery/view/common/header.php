<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <base href="<?php echo $base; ?>">
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
                <a class="navbar-brand" href="<?php echo $main; ?>">GIF库</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if( $current=='main' ){echo 'class="active"' ;}?>><a href="<?php echo  $main; ?>">首页</a></li>
                    <li <?php if( $current=='board' ){echo 'class="active"' ;}?>><a href="<?php echo $board; ?>">排行榜</a></li>
                    <li <?php if( $current=='search' ){echo 'class="active"';}?>><a href="<?php echo $search; ?>">搜搜乐</a></li>
                    <li <?php if( $current=='home' ){echo 'class="active"' ;}?>><a href="<?php echo $home; ?>">我的空间</a></li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                <?php if( $logged ){ ?>
                    <li><a href="<?php echo $home ?>"><?php echo $username;?></a></li>
                    <li><a href="<?php echo $logout; ?>">退出</a></li>
                <?php }else{ ?>
                    <li><a data-toggle="modal" data-target="#register_modal"><i class="glyphicon glyphicon-registration-mark"></i> 注册</a></li>
                    <li><a data-toggle="modal" data-target="#login_modal"><i class="glyphicon glyphicon-log-in"></i> 登陆</a></li>
                <?php } ?>
                </ul>

                <form class="navbar-form navbar-right" role="search" action="<?php echo $search;?>" method="post" >
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="搜索" name="word">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div id="login_modal" class="modal fade" aria-hidden="true" aria-labelledby="login_label" role="dialog" tabindex="-1">
        <div class="modal-dialog" id="login_dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="login_label" class="modal-title">登陆</h4>
                </div>
                <div class="modal-body">
                    <div  id="form-login-alert" class="alert alert-danger" style="padding: 10px; margin-bottom: 10px; display: none;">登陆失败</div>
                    <form id="form-signin" role="form" method="post" action="<?php echo $login; ?>">
                        <input type="text" class="form-control" placeholder="邮箱"  name="email" style="margin-bottom:10px;" required autofocus>
                        <input type="password" class="form-control" placeholder="密码" name="password" style="margin-bottom:10px;" required>
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me"> 记住密码
                        </label>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="register_modal" class="modal fade" aria-hidden="true" aria-labelledby="register_label" role="dialog" tabindex="-1">
        <div class="modal-dialog" id="register_dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="register_label" class="modal-title">注册</h4>
                </div>
                <div class="modal-body">
                    <div  id="form-register-alert" class="alert alert-danger" style="padding: 10px; margin-bottom: 10px; display: none;">注册失败</div>
                    <form  id="form-register" role="form" method="post" action="<?php echo $register;?>">
                        <input type="text" class="form-control" placeholder="邮箱"  name="email" style="margin-bottom:10px;" required autofocus>
                        <input type="text" class="form-control" placeholder="用户名" name="username" style="margin-bottom: 10px;" required>
                        <input type="password" class="form-control" placeholder="密码" name="password" style="margin-bottom: 10px;" required>
                        <button  class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;" onclick="submit_register()">注册</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--/body>
</html-->
