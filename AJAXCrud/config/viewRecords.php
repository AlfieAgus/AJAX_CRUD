<?php
	require("connect.php");


	$db = new db;
	$conn = $db -> conn();

	$query = "SELECT * FROM records";
	$results = mysqli_query($conn,$query);

	while($row = mysqli_fetch_array($results)){
		echo "<tr>"
			."<td>".$row['id']."</td>"
			."<td>".$row['name']."</td>"
			."<td>".$row['age']."</td>"
			."<td>".$row['course']."</td>"
			."<td>"
			."<button id='edit' class='btn btn-outline-warning m-1' data-toggle='modal' data-target='#update' value='".$row['id']."'>EDIT</button>"
			."<button id='delete' class='delete btn btn-outline-danger m-1' value='".$row['id']."'>DELETE</button>"
			."</td>"
			."</tr>";

	}

	
?>