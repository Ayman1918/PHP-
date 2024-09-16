<?php
include_once('config.php');
include_once('admindashboard_tamplate.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!----- Template Start 3 Div ------>
<div class="main-panel">
          <div class="content-wrapper">
            
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Add City
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-success align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
			  

 <br>
<form method="POST" action="add_city.php">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="">City Name</label>
      <input type="text" class="form-control" name="city_name">
    </div>
  
  </div>

<br>
    <input type="submit" name="SUBMIT"  class="btn btn-success active" value="Add City"/>
</form>


		
</div>
</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
if (isset($_POST['SUBMIT'])) {
// receive all input values from the form
$CITYNAME =$_POST["city_name"];

// Check connection
if ($db_con->connect_error) {
die("Connection failed: " .$db_con->connect_error);
} 
$user="SELECT * FROM city WHERE city_name='$CITYNAME'";

$result=mysqli_query($db_con,$user);
	if(mysqli_num_rows($result)>0){
    echo"
    <script>alert('City Already Exist')</script>";
	}else{


$sql = "INSERT INTO city(city_name) 
VALUES ('$CITYNAME')";
if ($db_con->query($sql) === TRUE)
 { echo "<script> alert('New City added successfully')</script>";
} else {
echo "Error: " . $sql . "<br>" . $db_con->error;
}
}
}
	?>	






    
</body>
</html>