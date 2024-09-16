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
                </span> View All Doctors
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>



            <table class="table bg-success table-bordered table-striped">
<thead>	
<th>Dr ID</th>	
<th>Dr Name</th>
<th>Dr Phone</th>	
<th>Dr City</th>
<th>Dr Email</th>	
<th>Dr Password</th>
<th>Dr Specialist</th>	

<th colspan="2">Action Link</th>


</thead>


<!----------------END HTML TABLE HEAD--------------->

	
<!----------------STAR PHP FECTCH DATA BE DECENDING ORDER--------------->

<?php

// $result = mysqli_query($db_con,"SELECT * FROM tbl_doctor ORDER BY `dr_id` ASC");
$result = mysqli_query($db_con,"SELECT tbl_doctor.*, city.* from tbl_doctor inner join city on tbl_doctor.dr_city=city.city_id");
	foreach ($result as $value)
	{ 
		
	   	echo '<tr>';
              	echo '<td >'.$value['dr_id'].'</td>';
              	echo '<td>'.$value['dr_name'].'</td>';
                echo '<td >'.$value['dr_phone'].'</td>';
              	echo '<td>'.$value['city_name'].'</td>';
                echo '<td >'.$value['dr_email'].'</td>';
              	echo '<td>'.$value['dr_password'].'</td>';
                echo '<td>'.$value['dr_Specialist'].'</td>';
		

                echo "<td><a href='Update_doctor.php?id=$value[dr_id]&name=$value[dr_name]&no=$value[dr_phone]&gender=$value[dr_city]&email=$value[dr_email]&pass=$value[dr_password]&spec=$value[dr_Specialist]'>Edit</a></td>";

				
				echo '<td>'."<a href='Delete_doctor.php?id=".$value['dr_id']."'>Delete</a>".'</td>';
				echo '<td>'."<a href='View_doctordetail.php?id=".$value['dr_id']."'>View</a>".'</td>';
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