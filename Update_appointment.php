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

        $result = mysqli_query($db_con, "SELECT * FROM `tbl_appoinment` WHERE patient_id= $id");

        while ($_GET= mysqli_fetch_array($result))
        {
          

            $id = $_GET['patient_id'];
            $Aname = $_GET['patien_email'];
            $Acontact = $_GET['patient_phone'];
            $Adr = $_GET['dr_id'];
            $Atime= $_GET['app_time'];
            $Adate = $_GET['app_date'];
          
            
            
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
                </span> Update appointment
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




<form method="POST" action="Update_appointment.php">
  <div class="form-row">

  <div class="form-group col-md-6">
    <input type="hidden" name="dr_id" value="<?php echo $id;?>"> 
      <label for="">Patient Name</label>

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

      <!-- <input type="text" class="form-control" name="patient_id" value="<?php echo $id;?>"> -->
    </div>


    <div class="form-group col-md-6">
    <input type="hidden" name="dr_id" value="<?php echo $id;?>"> 
      <label for="">Patient email</label>
      <input type="email" class="form-control" name="patien_email" value="<?php echo $Aname;?>">
    </div>
  
    </div>

    <div class="form-row">
  
  


 
    <div class="form-group col-md-6">
   
      <label for="">patient phone</label>
      <input type="number" class="form-control" name="patient_phone" value="<?php echo $Acontact;?>">
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
      <!-- <input type="text" class="form-control" name="dr_id" value="<?php echo $Adr;?>"> -->
    </div>
    </div>



    <div class="form-row">
 
    <div class="form-group col-md-6">
   
      <label for="">App time</label>
      <input type="time" class="form-control" name="app_time" value="<?php echo $Atime;?>">
    </div>
 

    <div class="form-row">

    <div class="form-group col-md-6">

      <label for="">App date</label>
      <input type="date" class="form-control" name="app_date" value="<?php echo $Adate;?>">
    </div>
    <br>


</form>


<input type="submit" name="UPDATE_DATA"  class="btn btn-success active" value="Update appointment"/>
		
</div>

</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
if (isset($_POST['UPDATE_DATA'])) {
// receive all input values from the form
$Aid =$_POST["patient_id"];
$AEMAIL =$_POST["patien_email"];
$ACONTACT =$_POST["patient_phone"];
$A_ID =$_POST["dr_id"];
$ATIME =$_POST["app_time"];
$ADATE =$_POST["app_date"];


// echo ($id);

// // Check connection
// if ($db_con->connect_error) {
// die("Connection failed: " .$db_con->connect_error);
// }

$sql = "UPDATE tbl_appoinment SET patien_email='$AEMAIL' , patient_phone=$ACONTACT , dr_id=$A_ID , app_time='$ATIME',app_date='$ADATE'  WHERE patient_id=$Aid";

$result=mysqli_query($db_con,$sql);


if ($result)
 { 
    echo "<script>alert('Update APPOINTMENT successfully');
     window.location.href = 'view_appointment.php'</script>";


    


    
}
//  else {
// echo "Error: " . $sql . "<br>" . $db_con->error;
// }
 }

	?>	






    
</body>
</html>