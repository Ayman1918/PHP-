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
                </span> Add apointment
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
<form method="POST" action="Add_appointment.php">

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Patient Name </label>
      <?php
      $sql= "SELECT * FROM tbl_patient" ;
      $result = mysqli_query($db_con,$sql);
      ?>
      <select class="form-control" name="patient_id">
        <?php
        foreach($result as $result){
          echo "<option value='$result[patient_id]'>$result[patient_name]</option>";
        }
        ?>
      </select>


    </div>
  
    <div class="form-group col-md-6">
      <label for="">Patient email</label>
      <input type="email" class="form-control" name="patien_email">
    </div>
  </div>

<br>


<div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Patient Numebr</label>
      <input type="number" class="form-control" name="patient_phone">
    </div>

    <div class="form-group col-md-6">
      <label for="">Doctor Name</label>
      <?php
      $sql= "SELECT * FROM tbl_doctor" ;
      $result = mysqli_query($db_con,$sql);
      ?>
      <select class="form-control" name="dr_id">
        <?php
        foreach($result as $result){
          echo "<option value='$result[dr_id]'>$result[dr_name]</option>";
        }
        ?>
      </select>

    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Appointment Time</label>
      <input type="time" class="form-control" name="app_time">
    </div>

    <div class="form-group col-md-6">
    <label for="">Appointment Time</label>
      <input type="date" class="form-control" name="app_date">

      </select>

    </div>
    



    <br>
    <input type="submit" name="SUBMIT"  class="btn btn-success active" value="Add Appoinment"/>
</form>


		
</div>
</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
    if (isset($_POST['SUBMIT'])) {
        // receive all input values from the form
        $ID =$_POST["patient_id"];
        $EMAIL =$_POST["patien_email"];
        $PHONE =$_POST["patient_phone"] ;
        $DRID =$_POST["dr_id"];
        $TIME =$_POST["app_time"];
        $DATE =$_POST["app_date"];

// Check connection
if ($db_con->connect_error) {
die("Connection failed: " .$db_con->connect_error);
}
$user="SELECT * FROM tbl_appoinment WHERE patient_id ='$ID'";

$result=mysqli_query($db_con,$user);
	if(mysqli_num_rows($result)>0){
    echo"<script>alert('APPOINTMENT SUCCESSFULLY')</script>";
	}
  else
  {
  $sql = "INSERT INTO tbl_appoinment(patient_id,patien_email,patient_phone,dr_id,app_date,app_time) VALUES ('$ID','$EMAIL',$PHONE, '$DRID ','$DATE','$TIME')";
  if(mysqli_query($db_con,$sql)) 
  { 
    echo "<script>
      alert('New APPOINTMENT added successfully')
    </script>";
  } 
}
}
	?>	






    
</body>
</html>