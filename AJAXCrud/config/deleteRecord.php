<?php
	require("connect.php");

	$db = new db;
	$conn = $db -> conn();

	$id = $_GET['id'];
	$query = "DELETE FROM records WHERE id = $id";
	mysqli_query($conn,$query);
?>