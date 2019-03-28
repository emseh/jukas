<?php
	require_once("connection.php");

	$jdlfto = $_POST['nm_foto'];
	$deskrp = $_POST['ds_foto'];
	$harga	= $_POST['harga'];
	$target_dir = "../assets/uploads/";
	$target_file = $target_dir . basename($_FILES["fl_foto"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fl_foto"]["tmp_name"]);
	    if($check !== false) {
	        // echo "<script>alert("."'File is an image - " . $check["mime"] . ".'"."); window.location = '../home/welcome';</script>";
	        $uploadOk = 1;
	    } else {
	        echo "<script>alert("."'File is not an image.'"."); window.location = '../home/galeri';</script>";
	        $uploadOk = 0;
	    }
	}

	if (file_exists($target_file)) {
	    echo "<script>alert("."'Sorry, file already exists.'"."); window.location = '../home/galeri';</script>";
	    $uploadOk = 0;
	}

	if ($_FILES["fl_foto"]["size"] > 500000) {
	    echo "<script>alert("."'Sorry, your file is too large.'"."); window.location = '../home/galeri';</script>";
	    $uploadOk = 0;
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    echo "<script>alert("."'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'"."); window.location = '../home/galeri';</script>";
	    $uploadOk = 0;
	}

	if ($uploadOk == 0) {
	    echo "<script>alert("."'Sorry, your file was not uploaded.'"."); window.location = '../home/welcome';</script>";
	} else {
		if (move_uploaded_file($_FILES["fl_foto"]["tmp_name"], $target_file)) {
			$sql = mysqli_query($konek,"INSERT INTO cms_upload (judul,desk,nama_file,harga) VALUES ('".$jdlfto."','".$deskrp."','".$target_file."','".$harga."')");
			if ($sql === TRUE) {
		    	echo "<script>alert("."'The file ". basename( $_FILES["fl_foto"]["name"]). " has been uploaded.'"."); window.location = '../home/welcome';</script>";
			} else {
				echo "Error: " . $sql . "<br>" . $konek->error;
			}
		} else {
		    echo "<script>alert("."'Sorry, there was an error uploading your file.'"."); window.location = '../home/galeri';</script>";
		}

	}
?>
