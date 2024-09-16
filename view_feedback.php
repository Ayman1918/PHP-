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
                </span> View All Feedback
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
<th>Feedback ID</th>	
<th>User Name</th>
<th>User Email</th>	
<th>User Message</th>	
</thead>


<!----------------END HTML TABLE HEAD--------------->

	
<!----------------STAR PHP FECTCH DATA BE DECENDING ORDER--------------->

<?php

$result = mysqli_query($db_con,"SELECT * FROM tbl_feedback ORDER BY `f_id` DESC");
	foreach ($result as $value)
	{ 
		
	   	echo '<tr>';
              	echo '<td >'.$value['f_id'].'</td>';
              	echo '<td>'.$value['f_name'].'</td>';
                echo '<td >'.$value['f_email'].'</td>';
              	echo '<td>'.$value['f_message'].'</td>';
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