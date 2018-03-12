<?php 
	/* how do i database lol */
	// define('DB_SERVER', 'localhost');
	// define('DB_USERNAME', 'root');
	// define('DB_PASSWORD', '');
	// define('DB_NAME', 'phpcrud');

	// /* connect to attempt */
	// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// if($link === false) {
	// 	die("ERROR: Could not connecteroni, ", mysqli_connect_error());
	// }
	
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'phpcrud');

	// initialize vars
	$id = "";
	$firstname = "";
	$lastname = "";
	$gender = "";
	$developer = "";
	$update = false;

	if (isset($_POST['save'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$developer = $_POST['developer'];

		mysqli_query($db, "INSERT INTO employees (firstname, lastname, gender, developer) VALUES ('$firstname', '$lastname', '$gender', '$developer')");
		$_SESSION['message'] = "employee saved lol";
		header('location: index.php');
	}
?>