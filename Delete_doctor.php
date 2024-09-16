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




$result = mysqli_query($db_con,"DELETE FROM tbl_doctor WHERE dr_id =$id");

header("Location: view_doctor.php");



?>
</body>
</html>