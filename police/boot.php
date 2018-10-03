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
<div class="container">
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
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id'");

echo $id;

while($res = mysqli_fetch_array($result))
{
$psta = $res['psta'];
}
 echo $psta;


  // $sql = 'SELECT cno,accidentdate,psta,numberofvehiclesinvolved,status FROM basic  WHERE psta="$psta"';

   $sql= "SELECT cno,district,unit,psta,comment,who,contact,relation FROM customer  WHERE psta='$psta'";
  

   //echo $psta;

    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>cno</th>";
         echo "<th>District</th>";
         echo "<th>Unit</th>";
         echo "<th>Police Station</th>";
         echo "<th>Query</th>";
         echo "<th>By</th>";
         echo "<th>Contact</th>";
         echo "<th>Relationship </th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['cno'] . "</td>";
            echo "<td>" . $row['district'] . "</td>";
            echo "<td>" . $row['unit'] . "</td>";
            echo "<td>" . $row['psta'] . "</td>";
            echo "<td>" . $row['comment'] . "</td>";
            echo "<td>" . $row['who'] . "</td>";
            echo "<td>" . $row['contact'] . "</td>";
            echo "<td>" . $row['relation'] . "</td>";
            //echo "<td>" . $row['regno'] . "</td>";
            //echo "<td><a href='edwithcrime.php?crimenumber=" . $row['crimenumber'] . "'>Edit Accidentform Details</a></td>";
            //echo "<td><a href='vehicleedit.php?crimenumber=" . $row['crimenumber'] . "'>Edit Vehicle2 Details</a></td>";
            echo "<td><a href='test.php?crimenumber=" . $row['cno'] . "'>Edit Basic Details</a></td>";
            echo "<td><a href='basicedit.php?crimenumber=" . $row['cno'] . "'>Edit Vehicle1 Details</a></td>";
            echo "<td><a href='v2ed.php?crimenumber=" . $row['cno'] . "'>Edit Vehicle2 Details</a></td>";
            echo "<td><a href='policedetail.php?crimenumber=" . $row['cno'] . "'>View Updated Details</a></td>";
            //echo "<td><a href='viewv1.php?crimenumber=" . $row['cno'] . "'>View Vehicle1 Details</a></td>";
            //echo "<td><a href='viewv2.php?crimenumber=" . $row['cno'] . "'>View Vehicle2 Details</a></td>";
            //echo "<td><a href='basiceditwithcopy.php?crimenumber=" . $row['cno'] . "'>move edited Details</a></td>";

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