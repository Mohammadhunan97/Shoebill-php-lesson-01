<?php
include './db/db.php';
$task = $_POST["task"];
if($task){
	echo $task;
	$create_query = "INSERT INTO tasks(name)VALUES('$task')";
	$data = pg_query($db, $create_query); 
	echo "<script> 
	setTimeout(function(){
		window.location = 'index.php'
	},1000);
	</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="style.css" />
	<title>My Todo list</title>
</head>
<body>

	<h1>Add a new task in your todo list</h1>
	<form method="POST" action='create.php'>
		<input name="task"/>
		<br/>
		<input type="submit"/>
	</form>


<script>
</script>
</body>
</html>