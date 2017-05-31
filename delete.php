<?php
include './db/db.php';
$id = $_GET['id'];
$deletequery = "DELETE FROM TASKS WHERE id=$id;";
pg_query($db, $deletequery); 
echo "<script> 
	setTimeout(function(){
		window.location = '../index.php'
	},300);
	</script>";
?>