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
                </span> Add Doctor
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
<form method="POST" action="add_doctor.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor Name</label>
      <input type="text" class="form-control" name="dr_name">
    </div>
  
    <div class="form-group col-md-6">
      <label for="">Doctor Contact</label>
      <input type="number" class="form-control" name="dr_phone">
    </div>
  </div>
<br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor City</label>
      <!-- <input type="text" class="form-control" name="dr_city"> -->

      <?php
      $sql= "SELECT * FROM city" ;
      $result = mysqli_query($db_con,$sql);
      ?>
      <select class="form-control" name="dr_city">
        <?php
        foreach($result as $result){
          echo "<option value='$result[city_id]'>$result[city_name]</option>";
        }
        ?>
      </select>


    </div>
  
    <div class="form-group col-md-6">
      <label for="">Doctor email</label>
      <input type="email" class="form-control" name="dr_email">
    </div>
  </div>

<br>


<div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor Password</label>
      <input type="password" class="form-control" name="dr_password">
    </div>

    <div class="form-group col-md-6">
      <label for="">Doctor Specialist</label>
      <input type="text" class="form-control" name="dr_Specialist">
    </div>
    


    <br>
    <input type="submit" name="SUBMIT"  class="btn btn-success active" value="Add Doctor"/>
</form>


		
</div>
</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
    if (isset($_POST['SUBMIT'])) {
        // receive all input values from the form
        $NAME =$_POST["dr_name"];
        $NUMBER =$_POST["dr_phone"];
        $CITY =$_POST["dr_city"] ;
        $EMAIL =$_POST["dr_email"];
        $PASSWORD =$_POST["dr_password"];
        $SPE =$_POST["dr_Specialist"];

// Check connection
if ($db_con->connect_error) {
die("Connection failed: " .$db_con->connect_error);
}
$user="SELECT * FROM tbl_doctor WHERE dr_email='$EMAIL'";

$result=mysqli_query($db_con,$user);
	if(mysqli_num_rows($result)>0){
    echo"<script>alert('Doctor Already Exist')</script>";
	}
  else
  {
  $sql = "INSERT INTO tbl_doctor (dr_name,dr_phone,dr_city,dr_email,dr_password,dr_Specialist) VALUES ('$NAME',$NUMBER, '$CITY ','$EMAIL','$PASSWORD', '$SPE')";
  if(mysqli_query($db_con,$sql)) 
  { 
    echo "<script>
      alert('New DOCTOR added successfully')
    </script>";
  } 
}
}
	?>	






    
</body>
</html>