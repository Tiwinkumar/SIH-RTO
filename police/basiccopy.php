<?php
  $db = mysqli_connect("localhost", "root", "", "police");

// including the database connection file
 
 
//getting id from url
$crimenumber = $_GET['crimenumber'];

//selecting data associated with this particular id
$result = "INSERT INTO basiccopy SELECT * FROM basic WHERE cno='$crimenumber'";
//echo ("Success");
mysqli_query($db, $result); 

 
 ?>
