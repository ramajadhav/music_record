<?php
    session_start();
    if(!isset($_SESSION['email_address']))
		header('location:index.php');
		
		include('includes/connection.php');

		$username = $_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username = '$username' ";
		$result = mysqli_query($conn,$sql);
	
		$row = mysqli_fetch_array($result);
		$user_id = $row['user_id'];
	
		$sql = "SELECT * FROM hindi_albums ORDER BY song_id ASC";
		$result = mysqli_query($conn,$sql);
	
		while($rows = mysqli_fetch_array($result)){
			$song_id = $rows['song_id'];
			if(isset($_POST[$song_id])){

				$sql = "SELECT * FROM favorite_songs WHERE song_id = '$song_id' AND cat_id = '2' AND user_id = '$user_id' ";
				$results = mysqli_query($conn,$sql);

				if(mysqli_num_rows($results)>0){
					echo '<script type="text/javascript">';
					echo 'setTimeout(function () { sweetAlert("Warning","<b> You have already added this song to your favorite list!!...</b>","error");';
					echo '}, 500);</script>';
				}else{
	
				$sql = "SELECT * FROM hindi_albums WHERE song_id = '$song_id' ";
				$results = mysqli_query($conn,$sql);
	
				$row = mysqli_fetch_array($results);
				$song_id = $row['song_id'];
				$song_name = $row['song_name'];
				$singer_name = $row['singer_name'];
				$song_image = $row['song_image'];
				$audio_file = $row['audio_file'];
	
				$sql = "INSERT INTO favorite_songs(`cat_id`,`song_id`,`user_id`,`song_name`,`singer_name`,`song_image`,`audio_file`) VALUES('2','$song_id','$user_id','$song_name','$singer_name','$song_image','$audio_file') ";
				$results = mysqli_query($conn,$sql);
	
				if($results){
					echo '<script type="text/javascript">';
					echo 'setTimeout(function () { sweetAlert("Added"," <b>Song '.$song_name.' is successfully added to your favorite songs</b>","success");';
					echo '}, 500);</script>';
				}else{
					echo '<script type="text/javascript">';
					echo 'setTimeout(function () { sweetAlert("Oops...","<b> Error while adding.Please check your internet coonection!</b>","error");';
					echo '}, 500);</script>';
				}
			}
		}
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Music Records | Hindi Songs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');


section{
    padding: 100px 0;
}
.details-card {
	background: #ecf0f1;
}

.card-content {
	background: #ffffff;
	border: 4px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
	position: relative;
	overflow: hidden;
	border-radius: 0;
	z-index: 1;
}

.card-img img {
	width: 100%;
	height: auto;
	display: block;
}

.card-img span {
	position: absolute;
    top: 15%;
    left: 12%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
	padding: 1.25rem;
}

.card-desc h3 {
	color: #000000;
    font-weight: 600;
    font-size: 1.0em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
	color: #747373;
    font-size: 14px;
	font-weight: 400;
	font-size: 1em;
	line-height: 1.5;
	margin: 0px;
	margin-bottom: 20px;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.btn-card{
	background-color: #1ABC9C;
	color: #fff;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}

.col-md-3{
	padding-bottom:30px;
	padding-left:30px;
}
/* End card section */
    </style>
</head>
<?php
include('includes/connection.php');
if(isset($_POST['search'])){

$result = "SELECT * FROM hindi_albums
   WHERE song_name LIKE '%{$song_name}%' ";
    if (count($result) >0)
    {
        foreach ($result as $r)
        {
            echo "<div>".$r['song_name']. "</div>"; 
        }
    }else
    {
        echo "No result found";
    }
}
?>

<body>
	<!-- header -->
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.html">
					Music Records
                </a>
                <pre>                 </pre>
                <li class="nav-item">
					<!-- <b style="font-size:20px;"><p style="color:red;"><?php echo "Logged in as ".$_SESSION['username'];?></p></b> -->
                    <h5 style="color: red; margin: 10px;">| All SONGS|</h5>
                </li>
                <div class="searchbar">  
					<form class="form-inline my-lg-0" action="" method="POST">
      <input  type="text" name="song_name" id="name">
	  <input  type="submit" name="search" value="search">
    </form></div>   
	<ul class="list-group" id="result"></ul>
              
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
                    <div class="dropdown">
						<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">Track</button>
								<div class="dropdown-menu dropdown-primary">
									<a class="dropdown-item" href="kannada_songs.php"><b>Kannada Songs</b></a>
									<a class="dropdown-item" href="hindi_songs.php"><b>Hindi Songs</b></a>
									<a class="dropdown-item" href="english_songs.php"><b>English Songs</b></a>
									<a class="dropdown-item" href="uploaded_songs.php"><b>Uploaded Songs</b></a>
								</div>	
						</div>
						<li class="nav-item">
							<a class="nav-link scroll" href="favorite_list.php"><i class='fa fa-heart' style='font-size:40px;color:red'></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="logout.php">logout</a>
						</li>
					</ul>
				</div>
			</nav>
	
	<!-- //header -->

	<?php
			include('includes/connection.php');
			$sql = "SELECT * FROM hindi_albums";
			$result = mysqli_query($conn,$sql);

			echo "<section class='details-card'>
					<div class='container'>
						<div class='row'>
						";
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
					$song_id = $row['song_id'];
					$song_name = $row['song_name'];
					$movie_name = $row['movie_name'];
					$singer_name = $row['singer_name'];
					$song_image = $row['song_image'];
					$audio_file = $row['audio_file'];
					echo "
							<div class='col-md-3'>
								<form method='post' action='hindi_songs.php'>
									<div class='card-deck'>
										<div class='card-img'>
											<img src='songs/hindi_songs/img/$song_image' style='width:350px;height:250px' alt=''>
										</div>
										<div class='card-desc'>
											<h3>$song_name | $singer_name</h3>
											<h3>movie - $movie_name</h3>
											<audio class='embed-responsive-item' controls='' preload='none'> <source src='songs/hindi_songs/$audio_file' type='audio/mp3'></audio><br>
											<div class='row'><button type='submit' style='color:red;' class='btn-card' name='$song_id'><i class='fa fa-heart'></i></button><br></div><br>  
										</div>
									</div>
								</form>
							</div>
							";
					echo "<br><br>";
				}
			}
			echo "</div>
				</div>
		</section>
	";

    $sql = "SELECT * FROM english_albums";
			$result = mysqli_query($conn,$sql);

			echo "<section class='details-card'>
					<div class='container'>
						<div class='row'>
						";
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
					$song_id = $row['song_id'];
					$song_name = $row['song_name'];
					$movie_name = $row['movie_name'];
					$singer_name = $row['singer_name'];
					$song_image = $row['song_image'];
					$audio_file = $row['audio_file'];
					echo "
							<div class='col-md-3'>
								<form method='post' action='hindi_songs.php'>
									<div class='card-deck'>
										<div class='card-img'>
											<img src='songs/hindi_songs/img/$song_image' style='width:350px;height:250px' alt=''>
										</div>
										<div class='card-desc'>
											<h3>$song_name | $singer_name</h3>
											<h3>movie - $movie_name</h3>
											<audio class='embed-responsive-item' controls='' preload='none'> <source src='songs/hindi_songs/$audio_file' type='audio/mp3'></audio><br>
											<div class='row'><button type='submit' style='color:red;' class='btn-card' name='$song_id'><i class='fa fa-heart'></i></button><br></div><br>  
										</div>
									</div>
								</form>
							</div>
							";
					echo "<br><br>";
				}
			}
			echo "</div>
				</div>
		</section>
	";
	

    $sql = "SELECT * FROM kannada_albums";
			$result = mysqli_query($conn,$sql);

			echo "<section class='details-card'>
					<div class='container'>
						<div class='row'>
						";
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
					$song_id = $row['song_id'];
					$song_name = $row['song_name'];
					$movie_name = $row['movie_name'];
					$singer_name = $row['singer_name'];
					$song_image = $row['song_image'];
					$audio_file = $row['audio_file'];
					echo "
							<div class='col-md-3'>
								<form method='post' action='hindi_songs.php'>
									<div class='card-deck'>
										<div class='card-img'>
											<img src='songs/hindi_songs/img/$song_image' style='width:350px;height:250px' alt=''>
										</div>
										<div class='card-desc'>
											<h3>$song_name | $singer_name</h3>
											<h3>movie - $movie_name</h3>
											<audio class='embed-responsive-item' controls='' preload='none'> <source src='songs/hindi_songs/$audio_file' type='audio/mp3'></audio><br>
											<div class='row'><button type='submit' style='color:red;' class='btn-card' name='$song_id'><i class='fa fa-heart'></i></button><br></div><br>  
										</div>
									</div>
								</form>
							</div>
							";
					echo "<br><br>";
				}
			}
			echo "</div>
				</div>
		</section>
	";
		?>
	<!-- contact top -->
	<!-- //contact -->
	<!-- copyright -->
	<div class="cpy-right text-center">
		<p>© Musical Record 2021</p>
	</div>
    <!-- //copyright -->
    <!-- js-->
    <script>
        $(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
            });

            function search_table(value)
            {
                $('#result').each(function(){
                    var found = 'false';
                    $(this).each(function(){
                        if($(this).text().toLowercase().indexOf(value.toLowercase()) >=0)
                        {
                            found = 'true';
                        }
                    });
                    if( found == 'true')
                    {
                        $(this).show();
                    }
                    else{
                        $(this).hide();
                    }
                })
            }
        })
        </script>
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js "></script>
    <script src="js/easing.js "></script>
    <script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.js"></script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>