<?php
	require "connection.php";
	$id=$_GET['id'];

	$stmt=$db->prepare("SELECT name, author FROM Books WHERE idBooks = :id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
	?>
