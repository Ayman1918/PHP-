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
                </span> Add Patient
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
<form method="POST" action="add_patient.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Paitent  Name</label>
      <input type="text" class="form-control" name="patient_name" >
    </div>
  
    <div class="form-group col-md-6">
      <label for="">Paitent  Contact</label>
      <input type="number" class="form-control" name="patient_contact" required>
    </div>
  </div>
<br>
<div class="form-row">
  
  
    <div class="form-group col-md-6">
      <label for="">email</label>
      <input type="email" class="form-control" name="patient_email" required>
    </div>

    <div class="form-group col-md-6">
      <label for="">Password</label>
      <input type="password" class="form-control" name="patient_password">
    </div>
  </div>

<br>


<div class="form-row">

<div class="form-group col-md-6">
      <!-- <label for="">Paitent Gender</label> -->
      <!-- <input type="text" class="form-control" name="patient_gender" required> -->
      <select name="patient_gender" class="form-select" required>
        <option hidden >Select Gender</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
		
 
    </div>
    <br>
    <input type="submit" name="SUBMIT"  class="btn btn-success active" value="Add Patient"/>
</form>



</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
    if (isset($_POST['SUBMIT'])) {
        // receive all input values from the form
        $NAME =$_POST["patient_name"];
        $NUMBER =$_POST["patient_contact"];
        $GENDER =$_POST["patient_gender"];
        $EMAIL =$_POST["patient_email"];
        $PASSWORD =$_POST["patient_password"];

// Check connection
if ($db_con->connect_error) {
die("Connection failed: " .$db_con->connect_error);
}
$user="SELECT * FROM tbl_patient WHERE patient_email='$EMAIL'";

$result=mysqli_query($db_con,$user);
	if(mysqli_num_rows($result)>0){
    echo"<script>alert('patient already ADDED')</script>";
	}else{


$sql = "INSERT INTO tbl_patient (patient_name,patient_contact,patient_gender,patient_email,patient_password) VALUES ('$NAME',$NUMBER,'$GENDER','$EMAIL','$PASSWORD')";
if 
($db_con->query($sql) === TRUE) 
{  echo" <script> alert('New Patient added successfully')</script>";
} else {
echo "Error: " . $sql . "<br>" . $db_con->error;
}
}
}
	?>	





<!-- paitent name  -->
<!-- required pattern="[A-Za-z]{3,20} -->
    
</body>
</html>

