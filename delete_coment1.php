<?php 
	include('conn.php');
	#$idc=$_POST['id_coment']; 
	$id=$_POST['id'];
	mysqli_query($conn, "delete from comentaggregate where id_coment='$id'");
	header('Location:pagediskusi1.php?kategori=aggregate');
 ?>