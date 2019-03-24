<?php
	session_start();
	require_once("../proses/connection.php");
	if (!isset($_SESSION['username'])) { header('location:login'); }
	require '../template/header.php';

	$query = mysqli_query($konek,"SELECT * FROM cms_upload");
?>
<style type="text/css">
	#imageslide {
		position: absolute;
		margin-top: -300px;
		width: 100%;
		height: 700px;
	}
</style>
<?php require '../template/menu.php'; ?>
<div class="w3-content w3-section">
	<?php while ($hasil = mysqli_fetch_array($query)) { ?>
		<img class="mySlides" src="<?php echo $hasil['nama_file']; ?>" id="imageslide" class="img-responsive" alt="Chania">
	<?php } ?>
</div>

<div class="content" style="margin-top: 380px;">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<div class="panel-title"><b>WELCOME</b></div>
		</div>
		<div class="panel-body">
			<h6 class="text-semibold">Artinya Selamat Datang</h6>
			<p class="content-group">
				disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan. disini diisi dengan tulisan.
			</p>
		</div>
	</div>
</div>
<?php require '../template/footer.php'; ?>
<script type="text/javascript">
var myIndex = 0;
carousel();

function carousel() {
	var i;
	var x = document.getElementsByClassName("mySlides");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	myIndex++;
	if (myIndex > x.length) {myIndex = 1}
	x[myIndex-1].style.display = "block";
	setTimeout(carousel, 2000); // Change image every 2 seconds
	}
</script>
