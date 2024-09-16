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
                </span> View All Patient
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-success align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>



            <table class="table bg-success table-bordered table-striped">
<thead>	
<th>Patient ID</th>	
<th>Patient Name</th>
<th>Patient Contact</th>	
<th>Patient Gender</th>
<th>Patient Email</th>	
<th>Patient Password</th>	

<th colspan="2">Action Link</th>


</thead>


<!----------------END HTML TABLE HEAD--------------->

	
<!----------------STAR PHP FECTCH DATA BE DECENDING ORDER--------------->

<?php

$result = mysqli_query($db_con,"SELECT * FROM tbl_patient ORDER BY `patient_id` ASC");
	foreach ($result as $value)
	{ 
		
	   	echo '<tr>';
              	echo '<td >'.$value['patient_id'].'</td>';
              	echo '<td>'.$value['patient_name'].'</td>';
                echo '<td >'.$value['patient_contact'].'</td>';
              	echo '<td>'.$value['patient_gender'].'</td>';
                echo '<td >'.$value['patient_email'].'</td>';
              	echo '<td>'.$value['patient_password'].'</td>';
		

                echo "<td><a href='Update_patient.php?id=$value[patient_id]&name=$value[patient_name]&no=$value[patient_contact]&gender=$value[patient_gender]&email=$value[patient_email]&pass=$value[patient_password]'>Edit</a></td>";

				// echo '<td>'."<a href='Update_patient.php?id=".$value['patient_id']."'>Edit</a>".'</td>';
				echo '<td>'."<a href='Delete_patient.php?id=".$value['patient_id']."'>Delete</a>".'</td>';
				echo '<td>'."<a href='View_patientDetail.php?id=".$value['patient_id']."'>View</a>".'</td>';
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