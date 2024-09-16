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

<?Php
//Display Slected Data Base On ID

	if(isset($_GET["id"]))
    {
        $id = $_GET['id'];

        $result = mysqli_query($db_con, "SELECT * FROM `city` WHERE city_id= $id");

        while ($Lawyers_data= mysqli_fetch_array($result))
        {

            $cityname = $Lawyers_data['city_name'];

            
        }
    }
	
//Fetech User Data based on id

	
	
	?>

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
<form method="POST" action="Update_city.php">
  <div class="form-row">
    <div class="form-group col-md-12">
    <input type="hidden" name="id" value="<?php echo $id;?>"> 
      <label for="">City Name</label>
      <input type="text" class="form-control" name="city_name" value="<?php echo $cityname;?>">
    </div>
  
  </div>

<br>
    <input type="submit" name="UPDATE_DATA"  class="btn btn-success active" value="Update City"/>
</form>


		
</div>
</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
if (isset($_POST['UPDATE_DATA'])) {
// receive all input values from the form
$CITYID =$_POST["id"];
$CITYNAME =$_POST["city_name"];

echo ($CITYID);

// Check connection
if ($db_con->connect_error) {
die("Connection failed: " .$db_con->connect_error);
}

$sql = "UPDATE city SET city_name='$CITYNAME' WHERE city_id =$CITYID";
if ($db_con->query($sql) === TRUE)
 { 
    echo "<script>alert('Update City successfully'); window.location.href = 'viewall_City.php'</script>";

	// header('location:viewall_City.php');
    


    
} else {
echo "Error: " . $sql . "<br>" . $db_con->error;
}
}
	?>	






    
</body>
</html>