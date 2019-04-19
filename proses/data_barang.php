<?php
	session_start();
	require_once("connection.php");
	if (!isset($_SESSION['username'])) { header('location:welcome'); }
	require '../template/header.php';
	require '../template/menu.php';

	$id_brg = $_GET['id'];
	$id_flag = $_GET['flag'];
	if ($id_flag == 2) {
		$query = "DELETE FROM cms_upload WHERE id = ".$id_brg;
	} else if ($id_flag == 1) {
		$query = "SELECT a.id as ddi, c.id as adi, a.*,b.*,c.* FROM cms_upload a LEFT JOIN in_stock_barang b ON a.id_kategori = b.id LEFT JOIN kategori_barang c ON a.id_kategori = c.id WHERE a.id = ".$id_brg;
	} else {
		$query = "";
	}
	$qu = mysqli_query($konek, $query);
	if ($id_flag == 2) {
		echo "<script>history.go(-1);</script>"; 
	} else {
		$rest = mysqli_fetch_array($qu);
?>
<div class="content" style="padding-top: 40px; padding-bottom: 19px;">
	<div class="col-md-6">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="panel-title"><h6>Form Unggah Barang</h6></div>
			</div>
			<div class="panel-body">
				<form class="form-horizontal form-validate form-wysiwyg" action="upload?status=update&?idb=<?php echo $rest['ddi']; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-lg-3 control-label">Nama Barang</label>
						<div class="col-lg-8">
							<input type="text" name="nm_foto" id="nm_foto" class="form-control" value="<?php echo $rest['judul']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Harga</label>
						<div class="col-lg-8">
							<input type="text" name="harga" id="harga" class="form-control" value="<?php echo $rest['harga']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Kategori</label>
						<div class="col-lg-8">
							<select class="form-control" name="kategori_brg" id="kategori_brg">
								<option>-- Pilih Salah satu --</option>
								<?php
									$qsl = mysqli_query($konek, "SELECT * FROM kategori_barang WHERE id_user = ".$_SESSION['iduser']);
									while ($sult = mysqli_fetch_array($qsl)) {
										if ($rest['adi'] == $sult['id']) {
											$kc = "selected";
										} else {
											$kc = "";
										}
								?>
								<option value="<?php echo $sult['id']; ?>" <?php echo $kc; ?>>
									<?php echo $sult['jenis_barang']; ?>
								</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Stock Barang</label>
						<div class="col-lg-8">
							<input type="number" name="stock_b" id="stock_b" class="form-control" value="<?php echo $rest['stock_barang']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Deskripsi</label>
						<div class="col-lg-8">
							<textarea class="form-control" name="ds_foto" id="ds_foto"><?php echo $rest['desk']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Unggah Gambar</label>
						<div class="col-lg-8">
							<input type="file" name="fl_foto" id="fl_foto" class="form-control" value="<?php echo $rest['nama_file']; ?>" onchange="previewFile()">
						</div>
					</div>
					<div class="text-right col-lg-11">
					<button type="submit" value="Upload Image" name="submit" class="btn btn-success btn-labeled btn-xs">
						<b><i class="icon-files-empty2"></i></b> Unggah/Simpan</button>
					<button type="reset" class="btn btn-danger btn-labeled btn-xs" href="">
						<b><i class="icon-arrow-left13"></i></b> Batal/Kembali</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="panel-title"><h6>Gambar Berhasil di Unggah</h6></div>
			</div>
			<div class="panel-body">
				<div style="border: 1px solid black; width: 100%; height: 387px;">
					<img src="<?php echo $rest['nama_file']; ?>" alt="Image preview..." id="image" class="img-responsive" alt="Chania" style="width: inherit; height: inherit;">
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
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