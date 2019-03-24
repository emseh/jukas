<?php include 'template/header.php';?>
<body class="login-container">
	<div class="page-container">
		<div class="page-content">
			<div class="content-wrapper">
				<div class="content">
					<div class="panel panel-body login-form">
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#basic-tab1" data-toggle="tab">Login</a>
							</li>
							<li>
								<a href="#basic-tab2" data-toggle="tab">Register</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="basic-tab1">
								<form action="proses/pr_login" method="post">
									<div class="text-center">
										<div class="icon-object border-slate-300 text-slate-300"><i class="icon-user"></i></div>
										<h5 class="content-group">Login to your account</h5>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<input type="text" class="form-control" placeholder="Username" name="usn">
										<div class="form-control-feedback">
											<i class="icon-user text-muted"></i>
										</div>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<input type="password" class="form-control" placeholder="Password" name="psw">
										<div class="form-control-feedback">
											<i class="icon-lock2 text-muted"></i>
										</div>
									</div>

									<div class="form-group login-options">
										<div class="row">
											<div class="col-sm-6"></div>
											<div class="col-sm-6 text-right">
												<a href="login_password_recover.html">Forgot password?</a>
											</div>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="basic-tab2">
								<div class="text-center">
								<div class="icon-object border-success text-success"><i class="icon-pencil5"></i></div>
								<h5 class="content-group">Create account</h5>
							</div>

							<div class="content-divider text-muted form-group"><span>Your credentials</span></div>
							<form id="form_nya">
								<div class="form-group has-feedback has-feedback-left">
									<input type="text" class="form-control" placeholder="username" id="uname" name="usern">
									<div class="form-control-feedback">
										<i class="icon-user-check text-muted"></i>
									</div>
								</div>
								<div class="form-group has-feedback has-feedback-left">
									<input type="password" class="form-control" placeholder="Create password" id="pawad" name="paswn">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
								<div class="content-divider text-muted form-group"><span>Your privacy</span></div>
								<div class="form-group has-feedback has-feedback-left">
									<input type="text" class="form-control" placeholder="Your email" id="ini" name="mailn">
									<div class="form-control-feedback">
										<i class="icon-mention text-muted"></i>
									</div>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="text" class="form-control" placeholder="Repeat email" id="ine" name="remail">
									<div class="form-control-feedback">
										<i class="icon-mention text-muted"></i>
									</div>
									<div id="yaga"></div>
								</div>
							</form>

							<button class="btn bg-teal btn-block btn-lg" onclick="kriimdata()">Register <i class="icon-circle-right2 position-right"></i></button>
							</div>
						</div>
					</div>
					
						</div>

				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function kriimdata() {
		var w = document.getElementById('ine').value;
		var x = document.getElementById('ini').value;
		if (w != x) {
			document.getElementById('yaga').innerHTML = "email tidak sesusai";
		} else {
			var formkw = $('#form_nya').serialize();
			$.ajax({
				type:'POST',
				url:'proses/pr_register',
				data:formkw,
				success: function(data){
					alert(data);
					location.reload();
				}
			});
		}
	}
</script>
<?php include 'template/footer.php';?>