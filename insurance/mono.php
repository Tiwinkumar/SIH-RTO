<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div class="container">
<h1>View Records</h1>

                        
                       <!-- <li><a href="home.php">Profile</a></li>-->
                        <?php 
                        
                            session_start();
                            if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                        ?>
                        <li>
                            <a href="#"><?php echo  $_SESSION['id'];?></a>
                        </li>
                            
                        <?php
                            }
                            ?>
                            <?php
 
                            ?>
                    
 
 <?php
 include_once("connect.php");
?>
<div class="container">
   
                            
                            
<h1>View Forms</h1>

<p><b>View Form</b></p>
<div class="table table-hover  d-flex justify-content-center w-100" >
   <table class="thead-dark">
   <?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'police';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   //echo 'Connected successfully</br>';
   include_once("connect.php");
 $id = $_SESSION['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM inlogin WHERE id='$id'");


while($res = mysqli_fetch_array($result))
{
$zone = $res['zone'];
}
 //echo $psta;

//echo $status;
  // $sql = 'SELECT cno,accidentdate,psta,numberofvehiclesinvolved,status FROM basic  WHERE psta="$psta"';

   $sql= "SELECT b.psta,a.cno,b.accidentdate,b.numberofvehiclesinvolved,b.status FROM lbasic b,vehicle1 a WHERE a.cno = b.cno AND a.insurancecompanydetail='$zone'";
  

   //echo $psta;

    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Accident Date</th>";
         echo "<th>Crime Number</th>";
         echo "<th>Police Station Name</th>";
         echo "<th>No. of Vehicles Involved</th>";
         echo "<th>Status</th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['accidentdate'] . "</td>";
            echo "<td>" . $row['cno'] . "</td>";
            echo "<td>" . $row['psta'] . "</td>";
            echo "<td>" . $row['numberofvehiclesinvolved'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            //echo "<td>" . $row['regno'] . "</td>";
            //echo "<td><a href='edwithcrime.php?crimenumber=" . $row['crimenumber'] . "'>Edit Accidentform Details</a></td>";
            //echo "<td><a href='vehicleedit.php?crimenumber=" . $row['crimenumber'] . "'>Edit Vehicle2 Details</a></td>";
            echo "<td><a href='imageview.php?crimenumber=" . $row['cno'] . "'>police Details</a></td>";
            echo "<td><a href='rto.php?crimenumber=" . $row['cno'] . "'>RTO Details</a></td>";
             echo "<td><a href='samman.php?crimenumber=" . $row['cno'] . "'>Samman</a></td>";
            echo "<td><a href='final.php?crimenumber=" . $row['cno'] . "'>Status</a></td>";

            echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
      } else {
         echo "No records matching your query were found.";
      }
   } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>
</div>

</div>

</div>

</body>
</html>