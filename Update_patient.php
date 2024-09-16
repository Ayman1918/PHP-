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

        $result = mysqli_query($db_con, "SELECT * FROM `tbl_patient` WHERE patient_id= $id");

        while ($_GET= mysqli_fetch_array($result))
        {
          

            $id = $_GET['patient_id'];
            $patientname = $_GET['patient_name'];
            $patientcontact = $_GET['patient_contact'];
            $patientgender = $_GET['patient_gender'];
            $patientemail = $_GET['patient_email'];
            $patientpassword = $_GET['patient_password'];
            
            
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
                </span> Update Patient
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




<form method="POST" action="Update_patient.php">
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="hidden" name="patient_id" value="<?php echo $id;?>"> 
      <label for="">Patient Name</label>
      <input type="text" class="form-control" name="patient_name" value="<?php echo $patientname;?>">
    </div>
  

    <div class="form-group col-md-6">
 
      <label for="">Patient Contact</label>
      <input type="number" class="form-control" name="patient_contact" value="<?php echo $patientcontact;?>">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
   
      <label for="">Patient Gender</label>
      <input type="text" class="form-control" name="patient_gender" value="<?php echo $patientgender;?>">
    </div>
  

    <div class="form-group col-md-6">
 
      <label for="">Patient Email</label>
      <input type="email" class="form-control" name="patient_email" value="<?php echo $patientemail;?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="hidden" name="id" value="<?php echo $id;?>"> 
      <label for="">Patient Password</label>
      <input type="password" class="form-control" name="patient_password" value="<?php echo $patientpassword;?>">
    </div>





		
</div>

<br>
    <input type="submit" name="UPDATE_DATA"  class="btn btn-success active" value="Update Patient"/>
    </form>
</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
if (isset($_POST['UPDATE_DATA'])) {
// receive all input values from the form
$id =$_POST["patient_id"];
$PATIENTNAME =$_POST["patient_name"];
$PATIENTCONTACT =$_POST["patient_contact"];
$PATIENTGENDER =$_POST["patient_gender"];
$PATIENTEMAIL =$_POST["patient_email"];
$PATIENTPASS =$_POST["patient_password"];

// echo ($id);

// // Check connection
// if ($db_con->connect_error) {
// die("Connection failed: " .$db_con->connect_error);
// }

$sql = "UPDATE tbl_patient SET patient_name='$PATIENTNAME' , patient_contact=$PATIENTCONTACT , patient_gender='$PATIENTGENDER' , patient_email='$PATIENTEMAIL' , patient_password='$PATIENTPASS' WHERE patient_id=$id";

$result=mysqli_query($db_con,$sql);


if ($result)
 { 
    echo "<script>alert('Update Patient successfully');
     window.location.href = 'view_patient.php'</script>";


    


    
}
//  else {
// echo "Error: " . $sql . "<br>" . $db_con->error;
// }
 }

	?>	






    
</body>
</html>