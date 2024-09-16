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
                </span> View All City
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                </ul>
              </nav>
            </div>



            <table class="table bg-success table-bordered table-striped">
<thead>	
<th>City ID</th>	
<th>City Name</th>
<th colspan="2">Action Link</th>


</thead>


<!----------------END HTML TABLE HEAD--------------->

	
<!----------------STAR PHP FECTCH DATA BE DECENDING ORDER--------------->

<?php

$result = mysqli_query($db_con,"SELECT * FROM city ORDER BY `city_id` ASC");
	foreach ($result as $value)
	{ 
		
	   	echo '<tr>';
              	echo '<td >'.$value['city_id'].'</td>';
              	echo '<td>'.$value['city_name'].'</td>';
		
				echo '<td>'."<a href='Update_city.php?id=".$value['city_id']."'>Edit</a>".'</td>';
				echo '<td>'."<a href='Delete_city.php?id=".$value['city_id']."'>Delete</a>".'</td>';
				echo '<td>'."<a href='View_cityDetail.php?id=".$value['city_id']."'>View</a>".'</td>';
              	echo '</tr>';
	
	
	
}
	?>
		<!----------------STAR PHP FECTCH DATA BE DECENDING ORDER--------------->

</table>
	</div>
	</div>
	   </div>








</div>
</div>
</div>
<!----- Template 3 End Div ------>
 
    
</body>
</html>