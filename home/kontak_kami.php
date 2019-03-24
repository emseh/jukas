<?php session_start(); require_once("../proses/connection.php"); if (!isset($_SESSION['username'])) { header('location:login'); } ?>
<?php require '../template/header.php'; ?>
<?php require '../template/menu.php'; ?>
<div class="content" style="padding-top: 90px; padding-bottom: 15px;">
	<div class="col-md-7">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="panel-title"><h6 style="font-size: 20px;"><u>UNIVERSITAS LANGLANGBUANA</u></h6></div>
			</div>
			<div class="panel-body" style="font-size: 16px;">
				<p>Alamat : Jalan Karapitan No. 116, Cikawao, Lengkong, Kota Bandung, Jawa Barat 40261. </p>
				Telp : 022-4218086<p>
				Fax : 022-4237144<p>
				Email : mail@unla.ac.id & info@unla.ac.id<p>
				<div style="border: 0px solid black; width: 100%; height: 205px;" id="googleMap"></div>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="panel-title"><h6>Formulir Kontak Kami</h6></div>
			</div>
			<div class="panel-body" style="font-size: 15px;">
				<form class="form-horizontal form-validate form-wysiwyg" method="post" action="../proses/pr_contact">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nama</label>
						<div class="col-lg-9">
							<input type="text" name="nm_nya" id="nm_nya" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-9">
							<input type="email" name="em_nya" id="em_nya" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Telpon</label>
						<div class="col-lg-9">
							<input type="number" name="tl_nya" id="tl_nya" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Subjek</label>
						<div class="col-lg-9">
							<input type="text" name="su_nya" id="su_nya" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Pesan</label>
						<div class="col-lg-9">
							<textarea class="form-control" name="ps_nya" id="ps_nya"></textarea>
						</div>
					</div>
					<div class="text-right col-lg-11">
					<button type="reset" class="btn btn-danger btn-labeled btn-xs">
						<b><i class="icon-files-empty2"></i></b> Reset</button>
					<button class="btn btn-success btn-labeled btn-xs" >
						<b><i class="icon-arrow-left13"></i></b> Kirim Pesan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function myMap() {
	var ltlg = {lat: -6.931184, lng: 107.615302};
	var map = new google.maps.Map(document.getElementById("googleMap"),{
        zoom: 15,
        center: ltlg
    });

    var marker = new google.maps.Marker({
        position: ltlg,
        map: map,
        title: 'Here'
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO9QUZj2N2IaLLTOZ99_xZ_J17My3dfII&callback=myMap"></script>
<?php require '../template/footer.php'; ?>