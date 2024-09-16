<!DOCTYPE html>
<?php include_once("config.php");
include_once('admindashboard_tamplate.php');?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?PHP
//Display Slected Data Base On ID

	$id = $_GET['id'];
	
//Fetech User Data based on id

	$result = mysqli_query($db_con, "SELECT * FROM `tbl_doctor` WHERE dr_id= $id");
	while ($_GET= mysqli_fetch_array($result))
	{
		$id =  $_GET['dr_id'];
		$DRNAME = $_GET['dr_name'];
        $DRCONTACT =  $_GET['dr_phone'];
		$DRCITY = $_GET['dr_city'];
        $DREMAIL =  $_GET['dr_email'];
		$DRPASS = $_GET['dr_password'];
        $DRSPE = $_GET['dr_Specialist'];


		
	}
	
	?>
	
	<!----------------END PHP FOR FETCH DATA--------------->


  <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-success text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> View Details
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-success align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>


<h3>Doctor Details </h3>
<br>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor ID</label>
      <input type="text" class="form-control" name="id" value="<?php echo $id;?>"  id=""  disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="">Doctor Name</label>
      <input type="text" value="<?php echo $DRNAME;?>" class="form-control"  id=""disabled>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor Contact</label>
      <input type="text" class="form-control" name="id" value="<?php echo $DRCONTACT;?>"  id=""  disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="">Doctor City</label>
      <input type="text" value="<?php echo $DRCITY;?>" class="form-control"  id=""disabled>
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor Email</label>
      <input type="text" class="form-control" name="id" value="<?php echo $DREMAIL;?>"  id=""  disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="">Doctor Password</label>
      <input type="text" value="<?php echo $DRPASS;?>" class="form-control"  id=""disabled>
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Doctor Specialist</label>
      <input type="text" class="form-control" name="id" value="<?php echo $DRSPE;?>"  id=""  disabled>
    </div>
  </div>

 
 <a href="view_doctor.php"><button type="button" class="btn btn-success">Back to Page</button></a> 
</form>



</div>
</div>
</div>

</body>
</html>