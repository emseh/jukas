
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #66899a; border-color: #66899a;">
	<!-- jika session username ada -->
	<?php if (isset($_SESSION['username'])) { ?>
	<div class="navbar-header">
		<img src="../assets/images/cart.png" alt="" width="50" class="img-responsive" alt="Chania" style="margin-left: 20px;">
	</div>
	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="../home/welcome" style="padding: 13px 20px;" class='dropdown-toggle'>Beranda</a>
			</li>
			<!-- <li class="dropdown"> -->
				<!-- <a href="../home/galeri" style="padding: 13px 20px;" class='dropdown-toggle'>Galeri</a> -->
			<!-- </li> -->
			<li class="dropdown">
				<a href="../home/kontak_kami" style="padding: 13px 20px;" class='dropdown-toggle'>Kontak Kami</a>
			</li>
			<?php if ($_SESSION['aksesm'] == '1') { ?>
				<li class="dropdown">
					<a href="../home/pengguna" style="padding: 13px 20px;" class='dropdown-toggle'>Pengguna</a>
				</li>
			<?php } ?>
			<?php if ($_SESSION['aksesm'] == '2') { ?>
				<li class="dropdown">
					<a href="" style="padding: 13px 20px;" class='dropdown-toggle' data-toggle="dropdown">penjual</a>
					<ul class="dropdown-menu">
						<li>
							<a href="../home/item_list" style="padding: 13px 20px;" class='dropdown-toggle'>Data Barang</a>
						</li>
						<li class="dropdown-submenu">
							<a href="#" style="padding: 13px 20px;" class='dropdown-toggle' data-toggle="dropdown">Pengaturan</a>
							<ul class="dropdown-menu">
								<li>
									<a href="../home/kategori_barang" style="padding: 13px 20px;">Nama Kategori Barang</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			<?php } ?>
			<li class="dropdown dropdown-user">
				<a href="#" style="padding: 13px 20px;" class='dropdown-toggle' data-toggle="dropdown" aria-expanded="false">
					<img src="../assets/images/default.png" alt="">
					Selamat datang, <strong><?php echo $_SESSION['username'] ?></strong><i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li>
						<form method="post">
							<button name="isi" value="setout" style="margin: 5px; border: none; background: none;"><i class="icon-switch2"></i> Logout</button>
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- jika tidak ada session username -->
	<?php } else { ?>
		<div class="navbar-header">
			<img src="assets/images/cart.png" alt="" width="50" class="img-responsive" alt="Chania" style="margin-left: 20px;">
		</div>
		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="Login" style="padding: 13px 20px;" class='dropdown-toggle'>Login</a>
				</li>
			</ul>
		</div>
	<?php } ?>
</div>
<div class="navbar navbar-default" id="navbar-second">
	<ul class="nav navbar-nav no-border visible-xs-block">
		<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
	</ul>
</div>
<?php if (isset($_POST['isi'])) { session_destroy(); echo "<script>window.location = '../../".$base_url."';</script>"; } ?>
