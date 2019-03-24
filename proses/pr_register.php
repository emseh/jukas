<?php
	require_once("connection.php");

	$usna = $_POST['usern'];
	$psna = $_POST['pawad'];
	$emna = $_POST['mailn'];
	$sql = mysql_query("INSERT INTO cms_user (username,sandi,email) VALUES ('".$usna."',MD5('".$psna."'),'".$emna."')");
	if ($sql === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $konek->error;
	}
?>