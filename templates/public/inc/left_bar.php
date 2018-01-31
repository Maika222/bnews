<?php 
	$sql = 'SELECT tendanhmuctin from danhmuctin';
	$result = $mysqli->query($sql);
 ?>
<h2>Danh mục tin</h2>
<ul>
	<?php 
		while ($arCategory = mysqli_fetch_assoc($result)) {
			$danhmuctin = $arCategory['tendanhmuctin']
	 ?>
	<li><a href="danhmuc.php"><?php echo $danhmuctin; ?></a></li>
	<?php
		} 
	?>
</ul>
