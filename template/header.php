<?php $lnk = ""; if (isset($_SESSION['username'])) { $lnk = "../"; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Kami</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo $lnk; ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $lnk; ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $lnk; ?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $lnk; ?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $lnk; ?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

</head>
