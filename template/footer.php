<?php $lnk = ""; if (isset($_SESSION['username'])) { $lnk = "../"; } ?>
	<div class="navbar navbar-default">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second">
			<div class="navbar-text">
				© 2019. Website by <b>Kami</b>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="../home/welcome">Beranda</a></li>
					<li><a href="../home/galeri">Galeri</a></li>
					<li><a href="#">Kontak Kami</a></li>
				</ul>
			</div>
		</div>
	</div>
</html>
<!-- Core JS files -->
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/core/app.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/pages/login.js"></script>
<!-- /theme JS files -->

<!-- data table -->
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/data_table/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/data_table/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $lnk; ?>assets/js/data_table/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	function formatCurrency(num) {
		num = num.toString().replace(/\Rp|/g,'');
		if(isNaN(num))
		    num = "0";
		sign = (num == (num = Math.abs(num)));
		num = Math.floor(num*100+0.50000000001);
		cents = num%100;
		num = Math.floor(num/100).toString();
		if(cents<10)
		    cents = "0" + cents;
		for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
		    num = num.substring(0,num.length-(4*i+3))+','+
		    num.substring(num.length-(4*i+3));
		return num;
	}
</script>