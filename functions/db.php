<?php
	$mysqli = new mysqli('localhost','root','','tintuc');
	$mysqli->set_charset('utf8');
	if (mysqli_connect_errno()) {
		echo 'Lỗi kết nối với CSDL:'.mysqli_connect_error();
	}