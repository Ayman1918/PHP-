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

        $result = mysqli_query($db_con, "SELECT * FROM `tbl_doctor` WHERE dr_id= $id");

        while ($_GET= mysqli_fetch_array($result))
        {
          

            $id = $_GET['dr_id'];
            $drname = $_GET['dr_name'];
            $drcontact = $_GET['dr_phone'];
            $drcity = $_GET['dr_city'];
            $dremail = $_GET['dr_email'];
            $drpassword = $_GET['dr_password'];
            $drspe = $_GET['dr_Specialist'];
            
            
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
                </span> Update Doctors
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




<form method="POST" action="Update_doctor.php">
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="hidden" name="dr_id" value="<?php echo $id;?>"> 
      <label for="">Doctor Name</label>
      <input type="text" class="form-control" name="dr_name" value="<?php echo $drname;?>">
    </div>
  

    <div class="form-group col-md-6">
 
      <label for="">Doctor Contact</label>
      <input type="number" class="form-control" name="dr_phone" value="<?php echo $drcontact;?>">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
   
      <label for="">Doctor city</label>
      <?php
      $sql= "SELECT * FROM city" ;
      $result = mysqli_query($db_con,$sql);
      ?>
      <select class="form-control" name="dr_city">
        <?php
        foreach($result as $result){
          echo "<option value='$result[city_id]'>$result[city_name]></option>";
        }
        ?>
      </select>
      <!-- <input type="text" class="form-control" name="dr_city" value="<?php echo $drcity;?>"> -->
    </div>
  

    <div class="form-group col-md-6">
 
      <label for="">Doctor Email</label>
      <input type="email" class="form-control" name="dr_email" value="<?php echo $dremail;?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
   
      <label for="">Doctor Password</label>
      <input type="password" class="form-control" name="dr_password" value="<?php echo $drpassword;?>">
    </div>

    <div class="form-group col-md-6">

      <label for="">Doctor Specialist</label>
      <input type="text" class="form-control" name="dr_Specialist" value="<?php echo $drspe;?>">
    </div>

<br>
    <input type="submit" name="UPDATE_DATA"  class="btn btn-success active" value="Update Doctor"/>
</form>



		
</div>
</div>
</div>
<!----- Template 3 End Div ------>
 

<?php
	
if (isset($_POST['UPDATE_DATA'])) {
// receive all input values from the form
$id =$_POST["dr_id"];
$DRNAME =$_POST["dr_name"];
$DRCONTACT =$_POST["dr_phone"];
$DRCITY =$_POST["dr_city"];
$DREMAIL =$_POST["dr_email"];
$DRPASS =$_POST["dr_password"];
$DRSPE =$_POST["dr_Specialist"];

// echo ($id);

// // Check connection
// if ($db_con->connect_error) {
// die("Connection failed: " .$db_con->connect_error);
// }

$sql = "UPDATE tbl_doctor SET dr_name='$DRNAME' , dr_phone=$DRCONTACT , dr_city='$DRCITY' , dr_email='$DREMAIL' , dr_password='$DRPASS',dr_Specialist='$DRSPE'  WHERE dr_id=$id";

$result=mysqli_query($db_con,$sql);


if ($result)
 { 
    echo "<script>alert('Update Doctor successfully');
     window.location.href = 'view_doctor.php'</script>";


    


    
}
//  else {
// echo "Error: " . $sql . "<br>" . $db_con->error;
// }
 }

	?>	






    
</body>
</html>