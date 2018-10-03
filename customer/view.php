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
   $query = $_GET['crimenumber'];
   $check = $_GET['policestationname'];
   //echo 'Connected successfully</br>';
   //$sql = 'SELECT b.crimenumber, b.policestationname, b.vehiclenumber,a.rrto, a.submittedby, a.approved FROM form b,rto a WHERE a.crimenumber = b.crimenumber';
   $sql = "SELECT cno, psta, unit FROM basic  WHERE (`cno` LIKE '%".$query."%') AND (`psta` LIKE '%".$check."%')" ;
   
   if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>Crime Number</th>";
         echo "<th>Policestationname</th>";
         echo "<th>RTO Unit</th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['cno'] . "</td>";
            echo "<td>" . $row['psta'] . "</td>";
            echo "<td>" . $row['unit'] . "</td>";
            //echo "<td><a href='edwithcrime.php?crimenumber=" . $row['crimenumber'] . "'>Edit Accidentform Details</a></td>";
            //echo "<td><a href='monoupdateedit.php?crimenumber=" . $row['crimenumber'] . "'>Edit RTO Updated Details</a></td>";
            echo "<td><a href='imageview.php?crimenumber=" . $row['cno'] . "'>View Police Details</a></td>";
            //echo "<td><a href='.php?crimenumber=" . $row['crimenumber'] . "'>View Vehicle2 Details</a></td>";
            echo "<td><a href='rto.php?crimenumber=" . $row['cno'] . "'>View RTO Details</a></td>";
            echo "<td><a href='samman.php?crimenumber=" . $row['cno'] . "'>View Samman Details</a></td>";
            echo "<td><a href='comment.php?crimenumber=" . $row['cno'] . "'>Comment</a></td>";
            //echo "<td><a href='addlaw.php?crimenumber=" . $row['crimenumber'] . "'>Add Lawyer Opinion</a></td>";

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