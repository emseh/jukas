<?php
	$base_url = 'jukas';
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "tugas_cms";

	$konek = mysqli_connect($host, $user, $pass) or die ('Koneksi Gagal!');
	mysqli_select_db($konek,$db);
?>