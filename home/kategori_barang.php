<?php
	session_start();
	require_once("../proses/connection.php");
	if (!isset($_SESSION['username'])) { header('location:welcome'); }
	require '../template/header.php';
	require '../template/menu.php';
?>
<div class="content" style="padding-top: 80px;">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<div class="panel-title"><h5>Manajemen Kategori</h5><hr></div>
				</div>
				<div class="panel-body">
					<form class="form-horizontal form-validate form-wysiwyg" action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-lg-3 control-label">Nama Kategori</label>
							<div class="col-lg-8">
								<input type="text" name="nm_kategori" id="nm_kategori" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Deskripsi</label>
							<div class="col-lg-8">
								<textarea class="form-control" name="ds_k" id="ds_k"></textarea>
							</div>
						</div>
						<div class="text-right col-lg-11">
							<button type="submit" value="Upload Image" name="submit" class="btn btn-success btn-labeled btn-xs">
							<b><i class="icon-files-empty2"></i></b> Simpan</button>
							<button type="reset" class="btn btn-danger btn-labeled btn-xs" href="">
							<b><i class="icon-arrow-left13"></i></b> Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<div class="panel-title"><h5>Data Kategori Kategori</h5><hr></div>
				</div>
				<div class="panel-body">
					<table id="myTable" class="table table-hover" style="margin-top: -35px;">
						<thead>
							<tr>
								<th>No</th>
								<th>Jenis Barang</th>
								<th>Deskripsi Kategori</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sqll = mysqli_query($konek,"SELECT * FROM kategori_barang");
								$xo = 1; while ($hasil = mysqli_fetch_array($sqll)) {
							?>
							<tr>
								<td><?php echo $xo; ?></td>
								<td><?php echo $hasil['jenis_barang']; ?></td>
								<td><?php echo $hasil['deskripsi']; ?></td>
								<td>
									<a class="btn btn-success btn-xs" onclick="">
									<b><i class="icon-comment"></i></b>
									</a>
									<a class="btn btn-info btn-xs" href="" data-tog="tooltip" title="Update">
										<b><i class="icon-pencil"></i></b>
									</a>
									<a class="btn btn-danger btn-xs" href="" data-tog="tooltip" title="Delete">
										<b><i class="icon-trash"></i></b>
									</a>
								</td>
							</tr>
							<?php $xo++;} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require '../template/footer.php'; ?>