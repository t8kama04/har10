<?php
	require "connection.php";
	$id=$_GET['id'];

	$stmt=$db->prepare("DELETE FROM Books WHERE idBooks = :id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	http_response_code(201);
	?>
