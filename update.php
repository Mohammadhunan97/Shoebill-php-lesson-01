<?php
include './db/db.php';
$task = $_POST['task'];
$id = $_GET['id'];


if($task){
	echo $task;
	$id = $_GET['id'];
	$updatepost = "UPDATE TASKS SET name = '$task' WHERE ID = $id;" ;
	$data = pg_query($db, $updatepost); 
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

	<h1>Edit your task</h1>

	<?php 	
	echo "<form method='POST' action='update.php?id=$id'>";
	?>
		<input placeholder=$mytask name='task'/>
			<input type="submit"/>
	</form>
<script>
</script>
</body>
</html>