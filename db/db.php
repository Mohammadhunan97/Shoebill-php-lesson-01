<?php

$db = pg_connect("host=localhost dbname=crud2 user=minimoe password=''");

if(!$db){
	echo "db failed to connect";
}

?>