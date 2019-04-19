<?php
	session_start();
	require_once("../proses/connection.php");
	// if (!isset($_SESSION['username'])) { header('location:welcome'); }
	require '../template/header.php';
	require '../template/menu.php';

	$query = mysqli_query($konek,"SELECT * FROM cms_upload");
?>
<div class="content" style="padding-top: 100px;">
	<?php if (isset($_SESSION['aksesm']) && $_SESSION['aksesm'] == 2) { ?>
	<div class="panel-body" style="float: right; margin-top: -100px;">
		<a style="color:#fff; background-color: #66899a; border-color: #66899a;"class="btn btn-success btn-labeled btn-xs" href="image_upload"><b><i class="icon-plus3"></i></b> Upload Gambar</a>
	</div>
	<?php } ?>
	
	<div class="row">
		<?php while ($hasil = mysqli_fetch_array($query)) { ?>
		<div class="col-md-4">
			<div class="panel panel-flat">
				<div class="panel-body">
					<div class="thumbnail">
						<div class="thumb">
							<div style="position: absolute; border: 0px solid black; width: 250px; height: 40px; font-size: 25px; background-color: #8ab9d0; margin-top: inherit; float: left;">
								<b><?php echo "Rp. ".number_format($hasil['harga'],2,",","."); ?></b>
							</div>
							<a href="<?php echo $hasil['nama_file']; ?>" data-popup="lightbox">
								<?php
									//kondisi home jika belum login
									$url_image = "";
									if (isset($_SESSION['username'])) {
										$url_image = $hasil['nama_file'];
									} else {
										$url_image = substr($hasil['nama_file'], 3,strlen($hasil['nama_file']));
									}
								?>
								<img src="<?php echo $url_image; ?>" alt="">
									<span class="zoom-image"><i class="icon-plus2"></i></span>
							</a>
						</div>
					</div>
				<p><h3><?php echo $hasil['judul']; ?></h3></p>
				<p><?php echo $hasil['desk']; ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php require '../template/footer.php'; ?>
