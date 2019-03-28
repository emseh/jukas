<?php
	session_start();
	require_once("connection.php");

	$username = $_POST['usn'];
	$pass = $_POST['psw'];

	$cekuser = mysqli_query($konek,"SELECT * FROM cms_user WHERE username = '".$username."' AND sandi = MD5('".$pass."')");
	$jumlah = mysqli_num_rows($cekuser);
	$hasil = mysqli_fetch_array($cekuser);
	// var_dump($hasil);
	if ($jumlah == 0) {
		echo "<script>alert('Username anda belum terdaftar!'); window.location = '../';</script>";
	} else {
		if(md5($pass) != $hasil['sandi']) {
			echo "<script>alert('Username / Password Anda salah'); window.location = '../';</script>";
		} else {
			$_SESSION['username'] = $hasil['username'];
			$_SESSION['iduser'] = $hasil['id_user'];
			$_SESSION['aksesm'] = $hasil['stat'];
			header('location:../../'.$base_url.'/home/welcome');
		}
	}
?>
