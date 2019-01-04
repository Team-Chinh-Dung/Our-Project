<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Store Admin"; ?></title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="libs/js/category.js"></script>
    <script src="libs/js/users.js"></script>
    <script src="libs/js/filters_users.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen" />
 
    <!-- admin custom CSS -->
    <link href="../libs/css/admin.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../libs/favicon.ico">
    <link href="../libs/css/post.css" rel="stylesheet" />
</head>
<body>
 
    <?php
    // include top navigation bar
    include_once "navigation.php";
    ?>
    <div class="container-fluid">
        <div class="row">
        <!-- display page title -->
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;"><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!--Content-->
                <?= @$content ?>
            </div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- end the HTML page -->
</body>
</html>