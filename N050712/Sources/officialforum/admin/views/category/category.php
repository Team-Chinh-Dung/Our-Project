<?php 
	$page_title = 'Chuyên mục';
?>
<div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div id="categories"></div>
		<div class="panel panel-default">
		  	<div class="panel-heading">
		  		<div class="form-group">		
					<form method="post">			
						<input type="text" id="category" name="category" placeholder="Thêm chuyên mục" class="form-control"/>
						<input type="submit" name="insert_category" id="insert_category" value="Thêm" class="btn btn-primary"/>	
					</form>
				</div>
		  	</div>
		  	<div class="panel-body">
		  		<table class="table table-bordered">
					<tr>
						<th>Tên chuyên mục</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
					<?php
						foreach ($category as $cate) {
							$category_id = $cate[0];
							$category_name = $cate[1];
					?>
					<tr id="<?php echo $category_id; ?>">
						<td data-target="category_name"><?php echo $category_name ?></td>
						<td><a href="#" data-role="update_category" data-id="<?php echo $category_id; ?>">Sửa</a></td>
						<td><a href="#" data-role="delete_category" data-id="<?php echo $category_id; ?>">Xóa</a></td>
					</tr>
					<?php 
						}
		 			?>
				</table>
		  	</div>
		</div>	
	</div>
	<div class="col-sm-3"></div>
</div>
<div id="update_category" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Chỉnh sửa</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="category_id" class="form-control">
				<div class="form-group">
  					<label for="title">Tên chuyên mục</label>
  					<input type="text" id="category_name" name="category_name" class="form-control">
				</div>	
			</div>
			<div class="modal-footer">
				<a href="#" id="category_save" class="btn btn-primary pull-left">Lưu</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal" style="width: auto;">Hủy bỏ</button>
			</div>
		</div>
	</div>
</div>
<div id="delete_category" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Xóa chuyên mục</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="categoryid" class="form-control">
				<h4>Bạn có thật sự muốn xóa?</h4>				
			</div>
			<div class="modal-footer">
				<a href="#" id="deletecategory" class="btn btn-primary pull-left">Xác nhận</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal" style="width: auto;">Hủy bỏ</button>
			</div>
		</div>
	</div>
</div>		