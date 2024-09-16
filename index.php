<?php
    include("admindashboard_tamplate.php");
    if(!isset($_SESSION['ID']))
    {
      header("location:admin_login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row" style="width:100%">
          <div class="col-md-12 pt-1 bg-success" style="width:100%; height:50px">
            <h1 class="text-center">Admin Dashboard</h1>
          </div>
            <div class="card bg-success" style="width:200px; padding:30px 20px; border:2px solid #eee; height:80px;margin-top: -250px; margin-left:30px">  
            <?php
                $query = "SELECT * FROM tbl_patient";
                $result = mysqli_query($db_con,$query);
                $row = mysqli_num_rows($result);
            ?>
              <h4 class="text-white">Total Patient : <?php echo $row?></h4>
            </div>

            <div class="card bg-success" style="width:200px; padding:30px 20px; border:2px solid #eee; height:80px;margin-top: -250px; margin-left:30px">  
            <?php
                $query = "SELECT * FROM tbl_appoinment";
                $result = mysqli_query($db_con,$query);
                $row = mysqli_num_rows($result);
            ?>
              <h4 class="text-white">Appointments : <?php echo $row?></h4>
            </div>

            <div class="card bg-success" style="width:200px; padding:30px 20px; border:2px solid #eee; height:80px;margin-top: -250px; margin-left:30px">  
            <?php
                $query = "SELECT * FROM tbl_doctor";
                $result = mysqli_query($db_con,$query);
                $row = mysqli_num_rows($result);
            ?>
              <h4 class="text-white">Total Doctors : <?php echo $row?></h4>
            </div>

            <div class="card bg-success" style="width:200px; padding:30px 20px; border:2px solid #eee; height:80px;margin-top: -250px; margin-left:30px">  
            <?php
                $query = "SELECT * FROM city";
                $result = mysqli_query($db_con,$query);
                $row = mysqli_num_rows($result);
            ?>
              <h4 class="text-white">Total Cities : <?php echo $row?></h4>
            </div>
            <div class="card bg-success" style="width:200px; padding:30px 20px; border:2px solid #eee; height:80px;margin-top: -250px; margin-left:30px">  
            <?php
                $query = "SELECT * FROM tbl_feedback";
                $result = mysqli_query($db_con,$query);
                $row = mysqli_num_rows($result);
            ?>
              <h4 class="text-white">Feedback : <?php echo $row?></h4>
            </div>
        </div>
</body>
</html>