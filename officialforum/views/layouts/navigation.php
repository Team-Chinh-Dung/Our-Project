<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
 
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Change "Your Site" to your site name -->
            <a class="navbar-brand" href="index.php?controller=pages&action=home">Trang chủ</a>
            <a class="navbar-brand" href="index.php?controller=forum&action=forum">Diễn đàn</a>
                      
        </div>
 
        <div class="navbar-collapse collapse">
            <!--Login & Register-->
            <?php
                // check if users / customer was logged in
                // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
                            &nbsp;&nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.php?controller=detail&action=personalDetail">Thông tin cá nhân</a></li>
                            <li><a href="controllers/logout.php">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
                }
                 
                // if user was not logged in, show the "login" and "register" options
                else{
                ?>

                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo $page_title=="Đăng nhập" ? "class='active'" : ""; ?>>
                        <a href="index.php?controller=access&action=login">
                            <span class="glyphicon glyphicon-log-in"></span> Đăng nhập
                        </a>
                    </li>
                 
                    <li <?php echo $page_title=="Đăng ký" ? "class='active'" : ""; ?>>
                        <a href="index.php?controller=access&action=register">
                            <span class="glyphicon glyphicon-check"></span> Đăng ký
                        </a>
                    </li>
                </ul>
                <?php
                }
            ?>
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar <-->