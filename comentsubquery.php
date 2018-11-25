<?php
	include('conn.php');
	$idc=$_POST['id_coment']; 
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$balas=$_POST['balas'];
	mysqli_query($conn, "insert into comentsubquery(id,coment,nama) values ($id,'$balas','$nama')");
	header("Location:pagediskusi.php?kategori=subquery");
 ?>