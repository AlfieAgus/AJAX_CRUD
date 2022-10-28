<?php
	require ("connect.php");

	$db = new db;
	$conn = $db->conn();

	$id = $_GET['id'];
	$query = "SELECT * FROM records WHERE id = $id";
	$results = mysqli_query($conn,$query);
	$data = mysqli_fetch_array($results);
	echo json_encode($data);
?>