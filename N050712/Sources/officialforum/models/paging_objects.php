<?php 
	class Paging
    {
        public function Userspaging(){
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $records_per_page = 5;
            $from_record_num = ($records_per_page * $page) - $records_per_page;
            $database = new Database();
            $db = $database->getConnection();
            $user = new User($db);
            $stmt = $user->readAll($from_record_num, $records_per_page);
            $num = $stmt->rowCount();
            $total_rows = $user->countAll();
            $page_url="index.php?controller=users&action=users_detail&";
            include_once 'paging.php';
        }
        // public function Postspaging($id){
        //     $page = isset($_GET['page']) ? $_GET['page'] : 1;
        //     $records_per_page = 2;
        //     $from_record_num = ($records_per_page * $page) - $records_per_page;
        //     $database = new Database();
        //     $db = $database->getConnection();
        //     $post = new Post($db);
        //     $stmt = $post->readAll($from_record_num, $records_per_page);
        //     $num = $stmt->rowCount();
        //     $total_rows = $post->countAll();
        //     $page_url="index.php?controller=forum&action=pageTitle&";
        //     include_once 'paging.php';
        // }
    }
 ?>