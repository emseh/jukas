<?php
	session_start();
	require_once("../proses/connection.php");
	if (!isset($_SESSION['username'])) { header('location:welcome'); }
	require '../template/header.php';
	require '../template/menu.php';

	//base query in this page
	if ($_SESSION['aksesm'] == 2) {
		$qry = "SELECT a.id as ddi, a.*,b.*,c.* FROM cms_upload a LEFT JOIN in_stock_barang b ON a.id_kategori = b.id LEFT JOIN kategori_barang c ON a.id_kategori = c.id WHERE a.id_user = ".$_SESSION['iduser'];
	} else if ($_SESSION['aksesm'] == 1) {
		$qry = "SELECT a.id as ddi, a.*,b.*,c.* FROM cms_upload a LEFT JOIN in_stock_barang b ON a.id_kategori = b.id LEFT JOIN kategori_barang c ON a.id_kategori = c.id";
	}
	$query = mysqli_query($konek, $qry);
?>
<div class="content" style="padding-top: 80px;">
	<div class="row">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<div class="panel-title"><h5>Data Barang</h5><hr></div>
			</div>
			<div class="panel-body">
				<table id="myTable" class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Barang</th>
							<th>Deskripsi</th>
							<th>Jenis/Kategori</th>
							<th>Harga Barang</th>
							<th>Stock</th>
							<th>Total Harga Barang x Stock</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $x = 1; while ($hasil = mysqli_fetch_array($query)) { ?>
						<tr>
							<td><?php echo $x; ?></td>
							<td><?php echo $hasil['judul']; ?></td>
							<td><?php echo $hasil['desk']; ?></td>
							<td><?php echo $hasil['jenis_barang']; ?></td>
							<td><?php echo number_format($hasil['harga']); ?></td>
							<td><?php echo $hasil['stock_barang']; ?></td>
							<td><?php echo number_format($hasil['harga']*$hasil['stock_barang']); ?></td>
							<td>
								<a class="btn btn-success btn-xs" onclick="v_data(<?php echo $hasil['ddi']; ?>)" data-toggle="modal" data-target="#modal_default">
									<b><i class="icon-comment"></i></b>
								</a>
								<a class="btn btn-info btn-xs" href="../proses/data_barang?id=<?php echo $hasil['ddi']; ?>&flag=1" data-tog="tooltip" title="Update">
									<b><i class="icon-pencil"></i></b>
								</a>
								<a class="btn btn-danger btn-xs" href="../proses/data_barang?id=<?php echo $hasil['ddi']; ?>&flag=2" data-tog="tooltip" title="Delete">
									<b><i class="icon-trash"></i></b>
								</a>
							</td>
						</tr>
						<?php $x++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="modal_default" class="modal fade in">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h5 class="modal-title">Detail Data</h5>
			</div>
			<div class="modal-body">
				<div class="thumbnail">
					<div class="thumb">
						<div style="position: absolute; border: 0px solid black; width: 250px; height: 40px; font-size: 25px; background-color: #8ab9d0; margin-top: inherit; float: left;">
							<b id="place_price"></b>
						</div>
						<a id="link_img" data-popup="lightbox">
							<img id="img_plc" alt="">
							<span class="zoom-image"><i class="icon-plus2"></i></span>
						</a>
					</div>
				</div>
				<p><h3 id="name_product">_</h3></p>
				<p id="desk_product">_</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php require '../template/footer.php'; ?>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#myTable').DataTable();
	});

	function v_data(arg) {
		$.ajax({
			type:'post',
    		url:'../proses/api_view_data',
    		data:{ 'set_id':arg },
    		success:function(result) {
    			var v = JSON.parse(result);
    			document.getElementById('place_price').innerHTML = formatCurrency(v['harga']);
    			document.getElementById('link_img').setAttribute('href',v['nama_file']);
    			document.getElementById('img_plc').setAttribute('src',v['nama_file']);
    			document.getElementById('name_product').innerHTML = v['judul'];
    			document.getElementById('desk_product').innerHTML = v['desk'];
    		}
		});
	}
</script>