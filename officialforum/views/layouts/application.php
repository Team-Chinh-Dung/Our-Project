<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- set the page title, for seo purposes too -->
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Trang chủ"; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen" />
 
    <!-- admin custom CSS -->
    <link href="libs/css/post.css" rel="stylesheet" />
    <link href="libs/css/customer.css" rel="stylesheet" />
</head>
<body>
	<!-- include the navigation bar -->
    <?php include_once 'navigation.php'; ?>
    <!-- container -->
    <div class="container">
        <?php
        // if given page title is 'Login', do not display the title
        if($page_title!="Đăng nhập" && $page_title!="Trang chủ"){
        ?>
        <div class='col-md-12'>
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
            </div>
        </div>
        <?php
        }
        ?>


        <!--Content-->
		<?= @$content ?>

	</div>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>