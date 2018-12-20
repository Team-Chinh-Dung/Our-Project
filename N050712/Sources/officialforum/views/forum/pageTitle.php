<?php 
	   $page_title = $category->category_name;
 ?>

<?php 
  if (isset($_SESSION['user_id'])) {
 ?>
      <div class="row">
          
          <div class="col-sm-2">
              <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" style="width:auto;">Đăng bài</button>
          </div>
      </div>
<hr>
<?php 
    }else{
        echo "<a href='index.php?controller=access&action=login'>Đăng nhập để đăng bài</a><hr>";
    }
 ?>


<?php 
foreach ($post as $p) 
    {
?>
      <div class="row">
          <div class="col-sm-10">
              <a href="index.php?controller=forum&action=postContent&id=<?php echo $p->post_id ?>"><strong><?php echo $p->post_title ?></strong></a> <br>
            <?php 
                foreach ($username as $u) {
                    if ($p->post_id == $u[1]) {
                        echo $u[0];
                    }
                }
             ?>
          </div>
          <div class="col-sm-2">
              <?php echo $p->post_created; ?>
          </div>
      </div>
      <hr>
<?php    
  }
 ?>

<div id="id01" class="modal">
  
<form class="modal-content animate" method="post">

    <div class="container">
      	<div>
          <input type="text" name="category_id" value="<?php echo  $category->category_id ?>" style="width: 40px;height: 5px;float:right;text-align:right;border-style: none;"> 
        </div>
      	<div class="form-group">
  			<label for="title">Tiêu đề</label>
  			<textarea class="form-control" rows="2" id="title" name="post_title" required></textarea>
		</div>
		<div class="form-group">
  			<label for="content">Nội dung</label>
  			<textarea class="form-control" rows="6" id="content" name="post_content" required></textarea>
		</div>        
      	<button type="submit" class="btn btn-primary" style="width: auto;">Xác nhận</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-warning" style="float: right;width: auto;">Cancel</button>
    </div>
</form>