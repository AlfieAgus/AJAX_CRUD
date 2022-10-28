<?php  
	require("connect.php");

	$db = new db;
	$conn = $db->conn();

	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$course = $_POST['course'];

	$query = "INSERT INTO records VALUES ('$id', '$name', '$age', '$course')";
	mysqli_query($conn, $query);
?>