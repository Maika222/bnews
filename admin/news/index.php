<!-- header -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/bnews/templates/admin/inc/header.php'; ?>
<!-- /.header -->

<?php 

	$sql = "SELECT * FROM tintuc INNER JOIN danhmuctin ON tintuc.id_danhmuctin=danhmuctin.id_danhmuctin";
	$result = $mysqli->query($sql);
?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <!-- Nav-bar -->
				<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/bnews/templates/admin/inc/left-bar.php'; ?>
				<!-- /.nav-bar -->
             </div>
		  </div>
		  <div class="col-md-10">

  			<div class="content-box-large">
  				<div class="row">
	  				<div class="panel-heading">
	  					<div class="panel-title ">Quản lý truyện</div>
		  			</div>
				</div>
				<hr>	
				<div class="row">
					<div class="col-md-8">
						<a href="admin/news/add.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>

					</div>
                	<div class="col-md-4">
                 	 <div class="input-group form">
                       <input type="text" class="form-control" placeholder="Search...">
                       <span class="input-group-btn">
                         <button class="btn btn-primary" type="button">Search</button>
                       </span>
                  	 </div>
                  	</div>
				</div>

				<div class="row">
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>#ID</th>
								<th>Tên tin</th>		
								<th>Hình ảnh</th>
								<th>Ngày đăng</th>
								<th>Tên danh mục</th>
								<th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							while ($arCategory = mysqli_fetch_assoc($result)) {
								$id = $arCategory['id_tintuc'];
								$tentintuc = $arCategory['tentintuc'];				
								$hinhanh = $arCategory['hinhanh'];
								$ngaydang = $arCategory['ngaydang'];
								$iddanhmuctin = $arCategory['id_danhmuctin'];
								$tendanhmuctin = $arCategory['tendanhmuctin'];
								
						?>
							<tr class="odd gradeX">
								<td><?php echo $id; ?></td>
								<td><?php echo $tentintuc; ?></td>
								<td><?php echo $hinhanh; ?></td>					
								<td class="center text-center">
									<?php echo $ngaydang; ?>
								</td>
								<td><?php echo $tendanhmuctin; ?></td>
								<td class="text-center">
									<button class="btn btn-sm btn-primary">Sửa</button>
									<button class="btn btn-sm btn-danger">Xóa</button>
								</td>
							</tr>
						<?php 
							}
						?>
						</tbody>
					</table>

					<!-- Pagination -->
					<nav class="text-center" aria-label="...">
					   <ul class="pagination">
					      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					      <li><a href="#">2</a></li>
					      <li><a href="#">3</a></li>
					      <li><a href="#">4</a></li>
					      <li><a href="#">5</a></li>
					      <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					   </ul>
					</nav>
					<!-- /.pagination -->
					
  				</div>
  				</div><!-- /.row -->
  			</div><!-- /.content-box-large -->



		  </div>
		</div>
    </div>

 	<!-- Footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] .'/bnews/templates/admin/inc/footer.php'; ?>
    <!-- /.footer -->