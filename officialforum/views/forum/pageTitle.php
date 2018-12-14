<?php 
	$page_title = $category->category_name;
 ?>
 <?php 
 	echo '<ul>';
	foreach ($post as $p) 
	{
	  echo '<li>
	    		<a href="index.php?controller=forum&action=postContent&id='.$p->post_id.'"><strong>' . $p->post_title . '</strong></a> <br>'.$p->post_created.'<br>' ;
            foreach ($username as $u) {
              if ($p->post_id == $u[1]) {
                echo $u[0];
              }
            }
	  		echo '</li>';
	}
	echo '</ul>';
  ?>
<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" style="width:auto;">Đăng bài</button>
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
        
      	<button type="submit" class="btn btn-primary">Xác nhận</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
</form>