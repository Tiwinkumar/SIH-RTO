<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>View Records</title>
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

<div class="container">
<h1>View Records</h1>

<p><b>View All</b></p>
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


   $sql = "SELECT cno,policestation,unit,noofvehicleinvolved,regno1,regno2,status FROM rto WHERE unit='$unit'";
   
   if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Crime Number</th>";
         echo "<th>Police Station Name</th>";
         echo "<th>Regional Transport Office</th>";
         echo "<th>Number of Vehicles Involved</th>";
         echo "<th>Vehicles Number 1</th>";
         echo "<th>Vehicle Number 2</th>";
         echo "<th>Status</th>";         
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['cno'] . "</td>";
            echo "<td>" . $row['policestation'] . "</td>";
        echo "<td>" . $row['unit'] . "</td>";
            echo "<td>" . $row['noofvehicleinvolved'] . "</td>";
            echo "<td>" . $row['regno1'] . "</td>";
            echo "<td>" . $row['regno2'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            //echo "<td><a href='edwithcrime.php?crimenumber=" . $row['crimenumber'] . "'>Edit Accidentform Details</a></td>";
            echo "<td><a href='editrto.php?crimenumber=" . $row['cno'] . "'>Edit RTO Updated Basic Details</a></td>";
            echo "<td><a href='editrtov1.php?crimenumber=" . $row['cno'] . "'>Edit RTO Updated Vehicle1 Details</a></td>";
            echo "<td><a href='editrtov2.php?crimenumber=" . $row['cno'] . "'>Edit RTO Updated Vehicle2 Details</a></td>";

            //echo "<td><a href='.php?crimenumber=" . $row['crimenumber'] . "'>View Accidentform Details</a></td>";
            echo "<td><a href='rto.php?crimenumber=" . $row['cno'] . "'>View RTO Updated Details</a></td>";
            //echo "<td><a href='viewrtov1.php?crimenumber=" . $row['cno'] . "'>View RTO Updated Vehicle1 Details</a></td>";
            //echo "<td><a href='viewrtov2.php?crimenumber=" . $row['cno'] . "'>View RTO Updated Vehicle2 Details</a></td>";
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