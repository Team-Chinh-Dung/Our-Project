<!DOCTYPE html>
<html>
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Store Admin"; ?></title>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script  src="libs/js/category.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen" />
 
    <!-- admin custom CSS -->
    <link href="<?php echo $home_url . "libs/css/admin.css" ?>" rel="stylesheet" />
 
</head>
<body>
 
    <?php
    // include top navigation bar
    include_once "navigation.php";
    ?>
 
    <!-- container -->
    <div class="container">
 
        <!-- display page title -->
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
            </div>
        </div>

        <!--Content-->
        <?= @$content ?>

        </div>
    <!-- /container -->
 
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
<!-- end the HTML page -->
</body>
</html>