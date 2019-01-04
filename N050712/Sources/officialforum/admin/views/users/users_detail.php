<?php 	
	$page_title = 'Thông tin thành viên';
?>
<div class="container">
<div class="row">
	<div class="col-sm-2">
		<input class="form-control" name="filters" id="filters" type="text" placeholder="Tìm tên...">
	</div>
</div>
<div class="usersList">
<!-- Danh sách thành viên -->
	<?php
		echo "<table class='table table-hover table-responsive table-bordered'>";
	    echo "<tr>";
	        echo "<th>Tên</th>";
	        echo "<th>Họ và đệm</th>";
	        echo "<th>Email</th>";
	        echo "<th>Số điện thoại</th>";
	        echo "<th>Địa chỉ</th>";
	        echo "<th>Quyền truy cập</th>";        
	        echo "<th>Ngày tạo</th>";
	        echo "<th>Sửa</th>";
	        echo "<th>Xóa</th>";
	    echo "</tr>";
	    
		foreach ($detail as $detail) {		
	?>	
		<tr id="<?php echo $detail[0]; ?>" >
			<td data-target="firstname"><?php echo $detail[1]; ?></td>
			<td data-target="lastname"><?php echo $detail[2]; ?></td>
			<td data-target="email"><?php echo $detail[3]; ?></td>
			<td data-target="contact_number"><?php echo $detail[4]; ?></td>
			<td data-target="address"><?php echo $detail[5]; ?></td>
			<td data-target="access_level"><?php echo $detail[6]; ?></td>
			<td><?php echo $detail[7]; ?></td>
			<?php if ($detail[6] == 'Admin') {
				echo "";
			}else{?>
				<td><a href="#" data-role="update" data-id="<?php echo $detail[0] ?>">Sửa</a></td>
				<td><a href="#" data-role="delete" data-id="<?php echo $detail[0] ?>">Xóa</a></td>
			<?php } ?>			
		</tr>
	<?php				
		}
		echo "</table>";
	 ?>
</div>
 <!-- popup modal chỉnh sửa người dùng -->
<div id="update_users" class="modal fade" role="dialog">
  	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Chỉnh sửa</h4>
			</div>
			<div class="modal-body">				
				<input type="hidden" id="userId" class="form-control">
				<div class="form-group">
  					<label for="title">Tên</label>
  					<input type="text" id="firstname" name="firstname" class="form-control">
				</div>				
				<div class="form-group">
	  				<label for="title">Họ và đệm</label>
	  				<input type="text" id="lastname" class="form-control">
				</div>
				<div class="form-group">
  					<label for="title">Email</label>
  					<input type="text" id="email" class="form-control">
				</div>
				<div class="form-group">
  					<label for="title">Số điện thoại</label>
  					<input type="text" id="contact_number" class="form-control">
				</div>
				<div class="form-group">
  					<label for="title">Địa chỉ</label>
  					<input type="text" id="address" class="form-control">
				</div>
				<div class="form-group">
  					<label for="sel">Quyền truy cập</label>
  					<select class="form-control" id="access_level">
  						<option>Customer VIP</option>
  						<option>Customer</option>
  						<option>Admin</option>
  					</select>
  					<!-- <input type="text" id="access_level" class="form-control"> -->
				</div> 
			</div>
			<div class="modal-footer">
				<a href="#" id="save" class="btn btn-primary pull-left">Lưu</a>
          		<button type="button" class="btn btn-danger" data-dismiss="modal" style="width: auto;">Hủy bỏ</button>
        	</div>	
		</div>
	</div>
</div>
<div id="delete_users" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Xóa thành viên</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="userid" class="form-control">
				<h4>Bạn có thật sự muốn xóa?</h4>
			</div>
			<div class="modal-footer">
				<a href="#" id="delete" class="btn btn-primary pull-left">Xóa</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal" style="width: auto;">Hủy bỏ</button>
			</div>
		</div>
	</div>
</div>
</div>




