<?php 
	include('conn.php');
	#$idc=$_POST['id_coment']; 
	$id=$_POST['id'];
	mysqli_query($conn, "delete from comentsubquery where id_coment='$id'");
	header('Location:pagediskusi.php?kategori=subquery');
 ?>