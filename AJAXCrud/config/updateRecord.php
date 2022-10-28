<?php  
	require("connect.php");

	$db = new db();
	$conn = $db->conn();

	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$course = $_POST['course'];

	$query = "UPDATE records Set name = '$name' , age = '$age', course = '$course' WHERE id = '$id'";
	mysqli_query($conn, $query);

?>