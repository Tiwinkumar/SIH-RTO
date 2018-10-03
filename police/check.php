 <?php
 include_once("connect.php");
?>
   <?php 
                        
                            session_start();
                            if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                        ?>
                      

                            
                        <?php
                        include_once("connect.php");
 $id = $_SESSION['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id'");

//echo $id;

while($res = mysqli_fetch_array($result))
{
$psta = $res['psta'];
}
 //echo $psta;
                            }
                            ?>

<!DOCTYPE HTML PUBLIC>
<html>
<head>
<title>Updated Forms</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="../header/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../header/css/logo-nav.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
            <li class="nav-item">
        <a class="nav-link disabled" >User ID: <?php echo $id;
?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Policestation: <?php echo $psta;
?></a>
      </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Bootstrap core JavaScript -->
    <script src="../header/vendor/jquery/jquery.min.js"></script>
    <script src="../header/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
 
                          
<h1><center>Police Login</center></h1>

<p><b><center>Updated Accident Details Form</center></b></p>
<div class="container">
<div class="table table-bordered " >
   <div class="table">
    <div class="thead-dark">
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
   


  // $sql = 'SELECT cno,accidentdate,psta,numberofvehiclesinvolved,status FROM basic  WHERE psta="$psta"';

   $sql= "SELECT psta,cno,accidentdate,numberofvehiclesinvolved,vehicle1,vehicle2,status FROM basic  WHERE psta='$psta'";
  

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
         echo "<th></th>";
         echo "<th></th>";
         echo "<th></th>";
         echo "<th></th>";
         echo "<th></th>";         
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
            echo "<td><a href='test.php?crimenumber=" . $row['cno'] . "'>Edit Basic Details</a></td>";
            echo "<td><a href='basicedit.php?crimenumber=" . $row['cno'] . "'>Edit Vehicle1 Details</a></td>";
            echo "<td><a href='v2ed.php?crimenumber=" . $row['cno'] . "'>Edit Vehicle2 Details</a></td>";
            echo "<td><a href='policedetail.php?crimenumber=" . $row['cno'] . "'>View Updated Details</a></td>";
            //echo "<td><a href='viewv1.php?crimenumber=" . $row['cno'] . "'>View Vehicle1 Details</a></td>";
            //echo "<td><a href='viewv2.php?crimenumber=" . $row['cno'] . "'>View Vehicle2 Details</a></td>";
           echo "<td><a href='basiccopy.php?crimenumber=" . $row['cno'] . "'>move edited Details</a></td>";

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
</div>

</body>
</html>