<?php
    $category_id = $category[0];// lay id 
    $category_name = $category[1];
	   $page_title = $category_name;
 ?>
 <div class="shad">
 <div class="panel panel-default">
    <div class="panel-heading"> 
<?php 
if (isset($_SESSION['user_id'])) {   
 ?>
       <div class="row">          
            <div class="col-sm-2">
                <button onclick="document.getElementById('Customer').style.display='block'" class="btn btn-primary" style="width:auto;">Đăng bài</button>
            </div>
        </div>
<?php 
    
  }else{
      echo "<a href='index.php?controller=access&action=login'>Đăng nhập để đăng bài</a>";
  }
 ?>
  </div>
    <div class="panel-body">
      <?php 
      foreach ($post as $p) 
          {
            $post_id = $p[0];
            $post_title = $p[3];
            $post_created = $p[5];
      ?>
            <div class="row">
                <div class="col-sm-10">
                    <a href="index.php?controller=forum&action=postContent&id=<?php echo $post_id ?>"><strong><span class="glyphicon glyphicon-envelope"></span> <?php echo $post_title ?></strong></a> <br>
                  <?php 
                      foreach ($username as $u) {
                          if ($post_id == $u[1]) {
                              echo 'Thảo luận cùng : '.$u[0];
                          }
                      }
                   ?>
                </div>
                <div class="col-sm-2">
                    <?php echo $post_created; ?>
                </div>
            </div>
            <hr>
      <?php    
        }
       ?>
  </div>
</div>
</div>
<!-- <div id="Customer" class="modal">
  
<form class="modal-content animate" method="post">

    <div class="container">
      	<div>
            <input type="hidden" name="category_id" value="<?php #echo  $category_id ?>"> 
        </div>
      	<div class="form-group">
      			<label for="title">Tiêu đề</label>
      			<textarea class="form-control" rows="2" id="title" name="post_title" required></textarea>
		    </div>
    		<div class="form-group">
      			<label for="content">Nội dung</label>
      			<textarea class="form-control" rows="6" id="content" name="post_content" required></textarea>
    		</div>
        <div class="form-group">
          <input type="file" name="uploadfile" value=""/>
        </div>        
      	<button type="submit" class="btn btn-primary" style="width: auto;">Xác nhận</button>
        <button type="button" onclick="document.getElementById('Customer').style.display='none'" class="btn btn-warning" style="float: right;width: auto;">Cancel</button>
    </div>
</form>
</div> -->

<div id="Customer" class="modal">
  
<form class="modal-content animate" method="post" enctype="multipart/form-data">

    <div class="container">
        <div>
          <input type="hidden" name="category_id" value="<?php echo  $category_id ?>"> 
        </div>
        <div class="form-group">
          <label for="title">Tiêu đề</label>
          <textarea class="form-control" rows="2" id="titleVIP" name="post_title" required></textarea>
        </div>
        <div class="form-group">
          <label for="content">Nội dung</label>
          <textarea class="form-control" rows="6" id="contentVIP" name="post_content" required></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="uploadfile" value=""/>
        </div>        
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary" style="width: auto;">Xác nhận</button>
          <button type="button" onclick="document.getElementById('Customer').style.display='none'" class="btn btn-warning" style="float: right;width: auto;">Cancel</button>
        </div>
    </div>
</form>
</div>