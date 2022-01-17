<!DOCTYPE HTML>
<html>

<head>
	<title>Music Records</title>
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
include('includes/connection.php');

?>
<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">
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
    <!-- <div class="heading">
        <h1>Log in to Music Records</h1>
    </div> -->
<div class="tab-content">
			<!--Panel 7-->
			<div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
			  <!--Body-->
			  <form action="validate.php" method="post">
			  <div class="modal-body ">
				<div class="md-form form-sm mb-5">
				  <i class="fa fa-envelope prefix"></i>
                  <label  ></label>
				  <input type="email" placeholder="Enter your email" id="email" class="" name="email_address" required>
				  
				</div>
  
				<div class="md-form form-sm mb-4">
                    <i class="fa fa-lock prefix"></i>
                    <label ></label>
				  <input type="password" placeholder="Enter your password" id="password" class="" name="password" required>
				</div>
				<div class="text-center mt-2">
				  <button class="btn btn-danger" type="submit" name="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
                 
    </div>
				</div>
			  </div>
			</form>
            
			  <!--Footer-->
			  <div class="footer">
              <div class="options text-center">
              <p>Not register to Music records? <a class="red-text" id="forgot" data-target="#ForgotPasswordModal" data-toggle="modal"></a></p>
            <a href="./register.php"><button class="btn btn-danger">Register <i class="fa fa-sign-in ml-"></i></button> </a> 
            </div>
				<div class="options text-center">
				  <p>Forgot <a class="red-text" id="forgot" data-target="" data-toggle="modal">Password?</a></p>
				<!-- </div>
				<button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div> -->
  
			</div>
</body>
</html>