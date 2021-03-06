<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid"> 
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Change "Site Admin" to your site name -->
            <a class="navbar-brand" href="index.php?controller=pages&action=home">Quản lý hệ thống</a>
        </div> 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php?controller=users&action=users_detail">Thành viên</a>
                </li>
                <li>
                    <a href="index.php?controller=category&action=category">Chuyên mục</a>
                </li>               
            </ul>
            <ul class="nav navbar-nav navbar-right">              
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
                        &nbsp;&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- log out user -->
                        <li><a href="index.php?controller=users&action=personal_detail">Thông tin cá nhân</a></li>
                        <li><a href="../controllers/logout.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul> 
        </div><!--/.nav-collapse --> 
    </div>
</div>
<!-- /navbar