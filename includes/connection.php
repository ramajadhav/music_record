<?php

	$conn = mysqli_connect('localhost','root','','musical_world');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);


		// $pdo = new PDO(
		// 	"mysqli:host=".DB_HOST."; charset=".DB_CHAARSET.";dbname:".DB_NAME, DB_USER, DB_PASSWORD, 
		// 	[
		// 		PDO::ATTR_ERRMODE => PDO::ERRORMODE_EXCEPTION, 
		// 		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
		// 	);


		// 	$stmt = $pdp->prepare("select * from `hindi_songs` where `song_name` LIKE ?");
		// 	$stmt->execute([
		// 		"%".$_POST['search']."%", "%" .$_POST['search']."%"
		// 	]);
		// 	$result = $stmt->fetchALL();
 ?>