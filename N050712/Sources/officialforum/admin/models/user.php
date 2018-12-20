<?php 
	require_once '../config/database.php';
	require_once '../config/core.php';

	require_once '../models/user.php';
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	 
	// set number of records per page
	$records_per_page = 5;
	 
	// calculate for the query LIMIT clause
	$from_record_num = ($records_per_page * $page) - $records_per_page;
	$database = new Database();
	$db = $database->getConnection();
	$user = new User($db);
	$stmt = $user->readAll($from_record_num, $records_per_page);
	$num = $stmt->rowCount();
	$page_url="index.php?controller=users&action=users_detail?";
	$total_rows = $user->countAll();
	 echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>Tên</th>";
        echo "<th>Họ và đệm</th>";
        echo "<th>Email</th>";
        echo "<th>Số điện thoại</th>";
        echo "<th>Quyền truy cập</th>";
        echo "<th>Sửa</th>";
        echo "<th>Xóa</th>";
    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$lastname}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$contact_number}</td>";
            echo "<td>{$access_level}</td>";
            echo '<td><a href="">Sửa</a></td>';
            echo '<td><a href="">Xóa</a></td>';
        echo "</tr>";
        }
 
    echo "</table>";
 	$page_url="index.php?controller=users&action=users_detail?";
 	$total_rows = $user->countAll();
	include_once 'paging.php';
 ?>