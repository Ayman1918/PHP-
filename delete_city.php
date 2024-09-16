<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
//Data Base Connection
include_once("config.php");

$id= $_GET['id'];


$result = mysqli_query($db_con,"DELETE FROM city WHERE city_id =$id");

header("Location: Viewall_City.php");



?>
</body>
</html>