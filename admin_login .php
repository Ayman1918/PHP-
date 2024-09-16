<?php
//Data Base Connection
include_once("Config.php");
session_start();
	
	
if(isset($_POST['btnsubmit']))
{
	$EMAIL = $_POST['admin_email'];
	$PASSWORD = $_POST['admin_password'];
	
	$sql ="SELECT * FROM tbl_admin WHERE admin_email='$EMAIL'and
	admin_password ='$PASSWORD'";
	
	$result = mysqli_query($db_con, $sql);
	
	$row = mysqli_fetch_array($result);
	
	$count= mysqli_num_rows($result);

if($count == 1)
{
	$_SESSION['ID'] = $row['admin_id'];
	$_SESSION['EMAIL'] = $row['admin_email'];
    $_SESSION['AD_NAME'] = $row['ad_name'];
      header('location:index.php');

}


else
{
	echo'Email or Password is invalid !';
}
}	

	?>
<!doctype >
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="Stylesheet.css">	
<link rel="stylesheet" href="style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<STYLE>

.IMAGE2{

	background: rgb(51,213,195);
background: linear-gradient(90deg, rgba(51,213,195,1) 12%, rgba(0,255,226,1) 41%, rgba(166,228,219,1) 57%);

}

</STYLE>
	
<body class="IMAGE2"  > 

<!-----------------------START HTML----------------------->

<br><br><br>



<div class="container">
   <div class="row">
       <div class="col-sm-4"></div>
	   <div class="col-sm-4">
	   <h3>Login Admin</h3>
	   <form action="" method="POST">

	   <div class="form-group">
	   <label for="">Email:</label>
	   <input type="text" name="admin_email" value="" class="form-control">
	  
	   </div>
	   <div class="form-group">
	   <label for="">Password:</label>
	   <input type="password" name="admin_password" value="" class="form-control">
	   
	   </div>
	   <div class="form-group">
	   <input type="submit" name="btnsubmit" value="Login" class="btn btn-success">
	   </div>
	  </form>

	  <p>Your are new Please register Now   <a href="Register_Lawyers.php">Register here</a></p>
     </div>
</div>
</div>
</div>
	<!-----------------------END HTML----------------------->

	
	
	
	
	
</body>
</html>