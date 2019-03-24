<?php
	require_once("connection.php");

	$idd 	= $_POST['idus'];
	$flname = $_POST['nmlengkap'];
	$usname = $_POST['usernam'];
	$passwd = $_POST['ktsand'];
	$sureln = $_POST['mailn'];
	$telepn = $_POST['telhp'];
	$alamat = $_POST['alama'];
	$status = 1;

	$target_dir = "../assets/uploads/";
	$target_file = $target_dir . basename($_FILES["flfoto"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// if(isset($_POST["subn"])) {
	//     $check = getimagesize($_FILES["flfoto"]["tmp_name"]);
	//     if($check !== false) {
	//         echo "<script>alert("."'File is an image - " . $check["mime"] . ".'"."); window.location = '../home/pengguna';</script>";
	//         $uploadOk = 1;
	//     } else {
	//         echo "<script>alert("."'File is not an image.'"."); window.location = '../home/pengguna';</script>";
	//         $uploadOk = 0;
	//     }
	// }

	if (file_exists($target_file)) {
	    echo "<script>alert("."'Sorry, file already exists.'"."); window.location = '../home/pengguna';</script>";
	    $uploadOk = 0;
	}
	
	if ($_FILES["flfoto"]["size"] > 500000) {
	    echo "<script>alert("."'Sorry, your file is too large.'"."); window.location = '../home/pengguna';</script>";
	    $uploadOk = 0;
	}
	
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG") {
	    echo "<script>alert("."'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'"."); window.location = '../home/pengguna';</script>";
	    $uploadOk = 0;
	}

	if ($uploadOk == 0) {
		echo "<script>alert("."'Sorry, your file was not uploaded.'"."); window.location = '../home/pengguna';</script>";
	} else {
		if (move_uploaded_file($_FILES["flfoto"]["tmp_name"], $target_file)) {
			$sql = mysql_query("UPDATE cms_user SET full_name = '".$flname."',username = '".$usname."',sandi = MD5('".$passwd."'),email = '".$sureln."',tel = '".$telepn."',alamat = '".$alamat."',file_image = '".$target_file."',stat = '".$status."' WHERE id_user = ".$idd);
			if ($sql === TRUE) {
		    	echo "<script>alert("."'The file ". basename( $_FILES["fl_foto"]["name"]). " has been uploaded.'"."); window.location = '../home/pengguna';</script>";
			} else {
				echo "Error: " . $sql . "<br>" . $konek->error;
			}
		} else {
		    echo "<script>alert("."'Sorry, there was an error uploading your file.'"."); window.location = '../home/pengguna';</script>";
		}
	}
?>