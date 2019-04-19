<?php session_start(); require_once("../proses/connection.php"); if (!isset($_SESSION['username'])) { header('location:login'); } ?>
<?php require '../template/header.php'; ?>
<?php require '../template/menu.php'; ?>
<div class="content" style="padding-top: 90px; padding-bottom: 20px;">
	<div class="col-md-6">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="panel-title"><h6>Form Unggah Foto/Gambar</h6></div>
			</div>
			<div class="panel-body">
				<form class="form-horizontal form-validate form-wysiwyg" action="../proses/upload?status=insert" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-lg-3 control-label">Judul Foto</label>
						<div class="col-lg-8">
							<input type="text" name="nm_foto" id="nm_foto" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Harga</label>
						<div class="col-lg-8">
							<input type="text" name="harga" id="harga" class="form-control">
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
								?>
								<option value="<?php echo $sult['id']; ?>"><?php echo $sult['jenis_barang']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Stock Barang</label>
						<div class="col-lg-8">
							<input type="number" name="stock_b" id="stock_b" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Deskripsi</label>
						<div class="col-lg-8">
							<textarea class="form-control" name="ds_foto" id="ds_foto"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Upload Foto</label>
						<div class="col-lg-8">
							<input type="file" name="fl_foto" id="fl_foto" class="form-control" onchange="previewFile()">
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
				<div style="border: 1px solid black; width: 100%; height: 335px;">
					<img src="" alt="Image preview..." id="image" class="img-responsive" alt="Chania" style="width: inherit; height: inherit;">
				</div>
			</div>
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
