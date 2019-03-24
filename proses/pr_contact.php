<?php
	require_once("connection.php");

	$nma = $_POST['nm_nya'];
	$eml = $_POST['em_nya'];
	$tlp = $_POST['tl_nya'];
	$sbk = $_POST['su_nya'];
	$psn = $_POST['ps_nya'];

	$sql = mysqli_query($konek,"INSERT INTO cms_cp (nama,email,telpon,subjek,pesan) VALUES ('".$nma."','".$eml."','".$tlp."','".$sbk."','".$psn."')");
	if ($sql === TRUE) {
	    echo "<script>alert('Pesan pesan anda telah terkirim...'); window.location = '../home/kontak_kami';</script>";
	} else {
	    echo "<script>alert('Error: " . $sql . "<br>" . $konek->error."'); window.location = '../home/kontak_kami';</script>";
	}
?>
