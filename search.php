






















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














<!-- <?php
	include('includes/connection.php');
	/*
		localhost - it's location of the mysql server, usually localhost
		root - your username
		third is your password
		
		if connection fails it will stop loading the page and display an error
	*/
	
	
	/* tutorial_search is the name of database we've created */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
	$query = $_GET['song_name']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysql_query("SELECT * FROM hindi_albums
			WHERE (`song_name` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%')") or die(mysql_error());
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysql_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				echo "<p><h3>".$results['song_name']."</h3>".$results['category']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html> -->