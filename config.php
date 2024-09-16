<?php
define('DB_SERVERNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','dbl_hms');
	
	
$db_con= mysqli_connect(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);


// if($db_con===false)
// 	{
// 		die('Database Could not Connect'.mysqli_connect_errno());
// 	}

// 	else
// 	{
// 	 echo 'Database Connected';
// 	}
	
?>