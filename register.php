<!DOCTYPE HTML>
<html>

<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="icon" href="images/i1.png" />
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<!--//webfonts-->
</head>

<body>
    <?php
// include('includes/header.php');
?>
<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand">
					Music Records
				</a>
				<button class="navbar-toggler ml-lg-auto " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
					</ul>
				</div>
			</nav>
		</div>
	</header>

  
  <!--Body-->
  <form action="validate.php" method="post">
   <div class="modal-body">
    <div class="md-form form-sm mb-5">
        <i class="fa fa-user prefix"></i>
        <label data-error="" data-success="" for=""></label>
        <input type="text" id="modalLRInput11" placeholder="Enter your name" class="form-control form-control-sm validate" name="username" required>
    </div>

    <div class="md-form form-sm mb-5">
        <i class="fa fa-mobile prefix"></i>
        <label   data-error="" data-success="" for=""></label>
        <input type="text" id="modalLRInput15" placeholder="Enter your Mobile No."  class="form-control form-control-sm validate" name="mobile_number" required>
    </div>

    <div class="md-form form-sm mb-5">
      <i class="fa fa-envelope prefix"></i>
      <label data-error="" data-success="" for=""></label>
      <input type="email" id="modalLRInput12" placeholder="Enter your Email"  class="form-control form-control-sm validate" name="email_address" required>
    </div>

    <div class="md-form form-sm mb-5">
      <i class="fa fa-lock prefix"></i>
      <label data-error="" data-success="" for=""></label>
      <input type="password" id="modalLRInput13" placeholder="Enter your Password" class="form-control form-control-sm validate" name="password" required>
    </div>

    <div class="md-form form-sm mb-4">
      <i class="fa fa-lock prefix"></i>
      <label data-error="" data-success="" for=""></label>
      <input type="password" id="modalLRInput14" placeholder="Confirm Password" class="form-control form-control-sm validate" name="confirm_password" required>
    </div>

    <div class="text-center form-sm mt-2">
      <button class="btn btn-danger" type="submit" name="register">Register<i class="fa fa-sign-in ml-1"></i></button>
    </div>
  </div>
</form>
  <!--Footer-->
  <div class="modal-footer">
    <button type="button" class="btn btn-outline- waves-effect ml-auto" data-dismiss="modal">Close</button>
  </div>
</div>
<!--Modal: Login / Register Form-->
</body>
</html>