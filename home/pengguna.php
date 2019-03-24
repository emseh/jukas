<?php
	session_start();
	require_once("../proses/connection.php");
	if (!isset($_SESSION['username'])) { header('location:login'); }
	require '../template/header.php';
	require '../template/menu.php';

	$query = mysqli_query($konek, "SELECT * FROM cms_user WHERE stat = 1");
?>
<div class="content" style="margin-top: 90px; padding-bottom: 15px;">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<div class="panel-title"><h5>Data Pengguna</h5></div>
		</div>
		<div class="panel-body">
			<table id="myTable" class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Telepon</th>
						<th class="text-center">Ubah</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($hasil = mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $hasil['id_user']; ?></td>
						<td><?php echo $hasil['username']; ?></td>
						<td><?php echo $hasil['email']; ?></td>
						<td><?php echo $hasil['tel']; ?></td>
						<td align="center">
							<a class="btn btn-info btn-xs" href="informasi_pengguna?usr=<?php echo $hasil['id_user']; ?>" data-tog="tooltip" title="Update">
								<b><i class="icon-pencil"></i></b>
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php require '../template/footer.php'; ?>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#myTable').DataTable();
	});
</script>
