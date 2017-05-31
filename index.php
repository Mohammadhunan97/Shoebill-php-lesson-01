<?php 
include './db/db.php';
$query = 'SELECT * FROM TASKS;';
$data = pg_query($db, $query); 
if($data){
	echo "query successful";
}else{
	echo "query failure";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Todo list</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
	<div class="row">
		<h1>Todo List </h1>
		<button class="task" onClick="url('create.php')">Add Task</button>
	</div>
	<?php
	while($row = pg_fetch_array($data)){
		$id =  $row["id"];
		$edit = "<button class='edit' onClick='url(`update.php?id=$id`)'>Edit</button> ";
		$delete = "<button class='delete' onClick='url(`delete.php?id=$id`)'>Delete</button> ";
			echo "<hr/>";
			echo "<br/>";
			echo $row["id"] . ") \t\t";
			echo $row["name"];
			echo "\t\t" . $edit . "\t" . $delete; 
			echo "<br/>";
		} 
	?>

</div>

<script>
function url(href){
	window.location = href;
}
</script>
</body>
</html>