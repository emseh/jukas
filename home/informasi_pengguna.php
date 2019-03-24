<?php
	session_start(); 
	require_once("../proses/connection.php"); 
	if (!isset($_SESSION['username'])) { header('location:login'); } 
	require '../template/header.php';
	require '../template/menu.php';

	$id_us = $_GET['usr'];
	$query = mysql_query("SELECT * FROM cms_user WHERE id_user = ".$id_us);
	$hasil = mysql_fetch_array($query);
?>
<div class="content" style="padding-top: 80px;">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<div class="panel-title"><h6 style="font-size: 20px;">Informasi Pengguna</h6></div>
		</div>
		<div class="panel-body" style="font-size: 12px;">
			<form class="form-horizontal form-validate form-wysiwyg" method="post" action="../proses/pr_info_pengguna" enctype="multipart/form-data">
				<input type="hidden" name="idus" value="<?php echo $id_us; ?>">
				<div class="form-group">
					<label class="col-lg-1 control-label">Nama Lengkap</label>
					<div class="col-lg-4">
						<input type="text" name="nmlengkap" id="nmlengkap" class="form-control" placeholder="full name" value="<?php echo $hasil['full_name']; ?>">
					</div>

					<label class="col-lg-1 control-label">Username</label>
					<div class="col-lg-4">
						<input type="text" name="usernam" id="usernam" class="form-control" value="<?php echo $hasil['username']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-1 control-label">Email</label>
					<div class="col-lg-4">
						<input type="email" name="mailn" id="mailn" class="form-control" value="<?php echo $hasil['email']; ?>">
					</div>

					<label class="col-lg-1 control-label">Password</label>
					<div class="col-lg-4">
						<input type="password" name="ktsand" id="ktsand" class="form-control" placeholder="Re-enter Password">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-1 control-label">Telp/Hp</label>
					<div class="col-lg-4">
						<input type="number" name="telhp" id="telhp" class="form-control" value="<?php echo $hasil['tel']; ?>">
					</div>

					<label class="col-lg-1 control-label">Upload Foto</label>
					<div class="col-lg-4">
						<input type="file" name="flfoto" id="flfoto" class="form-control" onchange="previewFile()">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-1 control-label">Alamat</label>
					<div class="col-lg-4">
						<textarea class="form-control" name="alama" id="alama" style="height: 150px;">
							<?php echo $hasil['alamat']; ?>
						</textarea>
					</div>

					<label class="col-lg-1 control-label">&nbsp;</label>
					<div class="col-lg-5">
						<div style="border: 1px solid black; width: 40%; height: 150px;">
							<img src="<?php echo $hasil['file_image']; ?>" alt="Image preview..." id="image" class="img-responsive" alt="Chania">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="text-right col-lg-10">
					<button type="submit" value="Upload Image" name="subn" class="btn btn-success btn-labeled btn-xs">
						<b><i class="icon-files-empty2"></i></b> Unggah/Simpan</button>
					<button type="reset" class="btn btn-danger btn-labeled btn-xs" href="">
						<b><i class="icon-arrow-left13"></i></b> Batal/Kembali</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function previewFile() {
		var preview = document.getElementById('image');
		var file    = document.querySelector('input[type=file]').files[0];
		var reader  = new FileReader();

		reader.addEventListener("load", function () {
			preview.src = reader.result;
		}, false);

		if (file) {
			reader.readAsDataURL(file);
  		}
	}
</script>
<?php require '../template/footer.php'; ?>