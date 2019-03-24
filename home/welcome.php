<?php
	session_start();
	require_once("../proses/connection.php");
	if (!isset($_SESSION['username'])) { header('location:login'); }
	require '../template/header.php';
	require '../template/menu.php';

	$query = mysqli_query($konek,"SELECT * FROM cms_upload");
?>
<div class="content" style="padding-top: 100px;">
	<div class="panel-body" style="float: right; margin-top: -100px;">
		<a style="color:#fff; background-color: #66899a; border-color: #66899a;"class="btn btn-success btn-labeled btn-xs" href="image_upload"><b><i class="icon-plus3"></i></b> Upload Gambar</a>
	</div>
	<div class="row">
		<?php while ($hasil = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
			<div class="panel panel-flat">
				<div class="panel-body">
					<div class="thumbnail">
						<div class="thumb">
							<a href="<?php echo $hasil['nama_file']; ?>" data-popup="lightbox">
								<img src="<?php echo $hasil['nama_file']; ?>" alt="">
									<span class="zoom-image"><i class="icon-plus2"></i></span>
							</a>
						</div>
					</div>
				<p><h6><?php echo $hasil['judul']; ?></h6></p>
				<b><?php echo "Rp. ".number_format($hasil['harga'],2,",","."); ?></b>
				<p><?php echo $hasil['desk']; ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php require '../template/footer.php'; ?>
