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

	$result = mysqli_query($db_con, "SELECT * FROM `city` WHERE city_id= $id");
	while ($Lawyers_data= mysqli_fetch_array($result))
	{
		$CITYID =  $Lawyers_data['city_id'];
		$CITYNAME = $Lawyers_data['city_name'];

		
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


<h3>City Details </h3>
<br>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">City ID</label>
      <input type="text" class="form-control" name="id" value="<?php echo $CITYID;?>"  id=""  disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="">City Name</label>
      <input type="text" value="<?php echo $CITYNAME;?>" class="form-control"  id=""disabled>
    </div>
  </div>

 
 <a href="Viewall_City.php"><button type="button" class="btn btn-success">Back to Page</button></a> 
</form>



</div>
</div>
</div>

</body>
</html>