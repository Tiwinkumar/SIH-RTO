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

<p><b>View All</b> | <a href="rtonew.php">New accident Details</a> | <a href="view.php">Updated Accident Details</a> | <a href="boot.php">Customer Queries</a>   </p>


                        
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
 include_once("connect.php");
 $id = $_SESSION['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rtologin WHERE id='$id'");

 
while($res = mysqli_fetch_array($result))
{
$unit = $res['unit'];
}
?>
                            <?php echo $unit;?>
                    
</div>

</body>
</html>