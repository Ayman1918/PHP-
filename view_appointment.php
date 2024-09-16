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
                </span> View All Appointmnet
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
<!-- <th>Patient ID</th>	 -->
<th>Patient Name</th>
<th>Patient email</th>	
<th>patient number</th>
<th>Dr Name</th>	
<th>time</th>	
<th>Date</th>	

<th colspan="2">Action Link</th>


</thead>


<!----------------END HTML TABLE HEAD--------------->

	
<!----------------STAR PHP FECTCH DATA BE DECENDING ORDER--------------->

<?php

$result = mysqli_query($db_con,"select tbl_patient.*, tbl_appoinment.*,tbl_doctor.* from tbl_patient inner join tbl_appoinment on tbl_patient.patient_id = tbl_appoinment.patient_id inner join tbl_doctor on tbl_doctor.dr_id = tbl_appoinment.dr_id");
	foreach ($result as $value)
	{ 
		
	   	echo '<tr>';
              	echo '<td >'.$value['patient_name'].'</td>';
              	echo '<td>'.$value['patien_email'].'</td>';
                echo '<td >'.$value['patient_phone'].'</td>';
              	echo '<td>'.$value['dr_name'].'</td>';
                echo '<td >'.$value['app_time'].'</td>';
              	echo '<td>'.$value['app_date'].'</td>';
		

                echo "<td><a href='Update_appointment.php?id=$value[patient_id]&name=$value[patien_email]&no=$value[patient_phone]&gender=$value[dr_id]&email=$value[app_time]&pass=$value[app_date]'>Edit</a></td>";

	
				 echo '<td>'."<a href='Delete_appointment.php?id=".$value['patient_id']."'>Delete</a>".'</td>';
				// echo '<td>'."<a href='View_patientDetail.php?id=".$value['patient_id']."'>View</a>".'</td>';
              	// echo '</tr>';
	
	
	
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