<?php
	require_once("connection.php");
	$he = $_POST['set_id'];
	$qry2 = "SELECT a.id as ddi, a.*,b.*,c.* FROM cms_upload a LEFT JOIN in_stock_barang b ON a.id_kategori = b.id LEFT JOIN kategori_barang c ON a.id_kategori = c.id WHERE a.id = ".$he;
	$qyr = mysqli_query($konek, $qry2);
	$output = mysqli_fetch_array($qyr);
	echo json_encode($output);
?>