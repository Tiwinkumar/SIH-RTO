<!DOCTYPE HTML PUBLIC>
<html>
<head>
<title>View Forms</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
   
   
 <?php
 include_once("connect.php");
?>
<div class="container">
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
$result = mysqli_query($mysqli, "SELECT * FROM rtologin WHERE id='$id'");

echo $id;

while($res = mysqli_fetch_array($result))
{
$unit = $res['unit'];
}
 echo $unit;


  // $sql = 'SELECT cno,accidentdate,psta,numberofvehiclesinvolved,status FROM basic  WHERE psta="$psta"';

   $sql= "SELECT psta,cno,accidentdate,numberofvehiclesinvolved,vehicle1,vehicle2,status FROM basic  WHERE unit='$unit'";
  

   //echo $psta;

    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Accident Date</th>";
         echo "<th>Crime Number</th>";
         echo "<th>Police Station Name</th>";
         echo "<th>No. of Vehicles Involved</th>";
         echo "<th>Vehicle1 Registration</th>";
         echo "<th>Vehicle2 Registration</th>";
         echo "<th>Status </th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['accidentdate'] . "</td>";
            echo "<td>" . $row['cno'] . "</td>";
            echo "<td>" . $row['psta'] . "</td>";
            echo "<td>" . $row['numberofvehiclesinvolved'] . "</td>";
            echo "<td>" . $row['vehicle1'] . "</td>";
            echo "<td>" . $row['vehicle2'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            //echo "<td>" . $row['regno'] . "</td>";
            //echo "<td><a href='edwithcrime.php?crimenumber=" . $row['crimenumber'] . "'>Edit Accidentform Details</a></td>";
            //echo "<td><a href='vehicleedit.php?crimenumber=" . $row['crimenumber'] . "'>Edit Vehicle2 Details</a></td>";
            
            echo "<td><a href='add.php?crimenumber=" . $row['cno'] . "'>Update Details</a></td>";
            echo "<td><a href='policedetail.php?crimenumber=" . $row['cno'] . "'>View Police Updated Details</a></td>";
            //echo "<td><a href='viewv1.php?crimenumber=" . $row['cno'] . "'>View Vehicle1 Details</a></td>";
            //echo "<td><a href='viewv2.php?crimenumber=" . $row['cno'] . "'>View Vehicle2 Details</a></td>";

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

</body>
</html>