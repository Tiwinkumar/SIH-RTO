<?php
include_once("connect.php");

//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM basic WHERE cno='$crimenumber'");
 
while($res = mysqli_fetch_array($result))
{
    $crimenumber = $res['cno'];
$policestationname = $res['psta'];
$district = $res['dis'];
$zone = $res['zone'];
$rto = $res['rto'];
$ipcsection = $res['ipc'];
$natureofaccident = $res['natureofaccident'];
$placeofaccident = $res['placeofaccident'];
$accidentdate = $res['accidentdate'];
$accidenttime = $res['accidenttime'];
$numberofvehicles = $res['numberofvehiclesinvolved'];
$collisiontype = $res['collisiontype'];
$junctiontype = $res['junctiontype'];
$junctioncontrol = $res['junctioncontrol'];
$roadcategory = $res['roadcategory'];
$roadnarrowing = $res['roadnarrowing'];
$lightcondition = $res['lightconditions'];
$climate = $res['climate'];
$status = $res['status'];


}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
             Police Login
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
<style type="text/css">
   #content{
    width: 65%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
    background: #ffffff;
   }
   form{
    width: 70%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
   }
   
</style>
</head>
<body>
     
<div id="content">
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3><center>FORM A.I.R</center> </h3>
<h3><u><center>Inspection Report of Motor Vehicles Involved in Accident</center></u></h3>
<h4><center>(Rule 378 of the Tamil Nadu Motor Vehicles Rules 1989)</center></h4>
    <h3><center>ACCIDENTAL DETAILS ENTERING FORM </center></h3> <br /> 
    <div>
    <label> Crime Number:  </label>
    <?php echo $crimenumber;?>
    </div>
    <div>
    <label> Police Station Name:</label>
    <?php echo $policestationname;?>
    </div>
    <div>
    <label>District:</label>
    <?php echo $district;?>
    </div>
    <div>
    <label>Zone:</label>
    <?php echo $zone;?>
    </div>
    <div>
    <label>RTO:</label>
    <?php echo $rto;?>
    </div>
    
    <div>
    <label>IPC Section:</label>
    <?php echo $ipcsection;?>
    </div>
    <div >
     <label>Nature of Accident:</label>
     <?php echo $natureofaccident;?>
    </div>
    <div>
    <label>Accident Date:</label>
    <?php echo $accidentdate;?>
    </div>
    <div>
    <label>Accident Time:</label>
   <?php echo $accidenttime;?>
    </div>
    <div>
    <label>Place of Accident:</label>
    <?php echo $placeofaccident;?>
    </div>
    <div>
     <label>Number of Vehicles:</label>
     <?php echo $numberofvehicles;?>
    </div> 
    <?php
     //while($res = mysqli_fetch_array($result))
       // echo "<div id='img_div'>";
        echo "<img src='img/".$res['image']."' >";
        //echo "<p>".$row['ima']."</p>";
      //echo "</div>";
      ?>

      </br>
      </br></br></br></br>
      </br></br></br></br>
    <div >
     <label>Collision Type:</label>
     <?php echo $collisiontype;?>
    </div>
    <div >
     <label>Junction Type:</label>
     <?php echo $junctiontype;?>
 
    </div>
    <div >
     <label>Junction Control:</label>
    <?php echo $junctioncontrol;?>
    </div>
    <div >
     <label>Road Category:</label>
     <?php echo $roadcategory;?>
    </div>
    <div >
     <label>Road Narrowing:</label>
     <?php echo $roadnarrowing;?>
    </div>
    <div >
     <label>Light Condition:</label>
     <?php echo $lightcondition;?>
    </div>
    <div >
     <label>Climate:</label>
     <?php echo $climate;?>
      </input>
    </div>
      <div >
     <label>Status:</label>
     <?php echo $status;?>
      </input>
    </div>   
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div>    
  </form>
</div>
</body>
</html>

<?php
include_once("connect.php");

//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM vehicle1 WHERE cno='$crimenumber' AND vh=1");
 
while($res = mysqli_fetch_array($result))
{
    $crimenumber = $res['cno'];
$vehiclenumber = $res['regno1'];
$rcproduced = $res['rcproduced'];
$make = $res['make'];
$model = $res['model'];
$ownername = $res['vehicleowner'];
$owneraddress = $res['owneraddress'];
$type = $res['type'];
$class = $res['class'];
$transportvehicletype = $res['transportvehicletype'];
$permitvalidity = $res['permitvalidity'];
$pollutioncertificatevalidity = $res['pollutioncertificatevalid'];
$insuranceavailability = $res['insuranceavailability'];
$insurancecompanyname = $res['insurancecompanydetail'];
$insurancenumber = $res['policynumber'];
$manoeuvre = $res['manoeuvre'];
$vehicledamagelevel = $res['vehicledamagelevel'];
$tradeplateavailability = $res['tradeplateavailability'];
$drivername = $res['drivername'];
$driveraddress = $res['driveraddress'];
$gender = $res['gender'];
$dob = $res['dob'];
$age = $res['age'];
//$mobilenumber = $res['mobilenumber'];
//$email = $res['email'];
$driverinjury = $res['driverinjury'];
$drivererror = $res['drivererror'];
$drivinglicensedetails = $res['licensedetails'];
$licensenumber = $res['licensenumber'];
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
             Police Login
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
    background: #ffffff;
   }
   form{
    width: 70%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   
</style>
</head>
<body>
<div id="content">
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
     <h3><center>FORM A.I.R</center> </h3>
<h3><u><center>Inspection Report of Motor Vehicles Involved in Accident</center></u></h3>
<h4><center>(Rule 378 of the Tamil Nadu Motor Vehicles Rules 1989)</center></h4>
    <h3><center>VEHICLE 1 DETAILS ENTERING FORM </center></h3> <br /> 
    <div>
    <label> Crime Number:  </label>
    <?php echo $crimenumber;?>
    </div>
    <div>
    <label> Vehicle Number:</label>
    <?php echo $vehiclenumber;?>
    </div>
    <div >
     <label>RC Produced:</label>
     <?php echo $rcproduced;?>
      
    </div>
    <div>
    <label>Make:</label>
    <?php echo $make;?>
    </div>
    <div>
    <label>Model:</label>
   <?php echo $model;?>
    </div>
    <div>
    <label>Owner Name:</label>
    <?php echo $ownername;?>
    </div>
    <div>
    <label>Owner Address:</label>
    <?php echo $owneraddress;?>
    </div>
    <div >
     <label>Type:</label>
     <?php echo $type;?>
    </div>
    <div >
     <label>Class:</label>
     <?php echo $class;?> 
    </div>
    <div >
     <label>Transport Vehicle Type:</label>
     <?php echo $transportvehicletype;?>
        
    </div>
    <div>
    <label>Permit Validity:</label>
    <?php echo $permitvalidity;?>
    </div>
    <div>
    <label>Pollution Certificate Validity:</label>
    <?php echo $pollutioncertificatevalidity;?>
    </div>
    <div >
     <label>Insurance Availability:</label>
     <?php echo $insuranceavailability;?>
      
    </div>
    <div>
    <label>Insurance Company Name:</label>
    <?php echo $insurancecompanyname;?>
    </div>
    <div>
    <label>Insurance Number:</label>
    <?php echo $insurancenumber;?>
    </div>
    <div >
     <label>Manoeuvre:</label>
     <?php echo $manoeuvre;?>
      
    </div>
    <div >
     <label>Vehicle Damage Level:</label>
     <?php echo $vehicledamagelevel;?>
      
    </div>
    <div >
     <label>Trade Plate Availability:</label>
     <?php echo $tradeplateavailability;?>
      
    </div>
    <div>
    <label>Driver Name:</label>
    <?php echo $drivername;?>
    </div>
    <div>
    <label> Driver Address:</label>
    <?php echo $driveraddress;?>
    </div>
     <div >
     <label>Gender:</label>
     <?php echo $gender;?>
      
    </div>
    <div>
    <label>Date of Birth:</label>
    <?php echo $dob;?>
    </div>
    <div>
    <label>Age:</label>
    <?php echo $age;?>
    </div>
    <!--<div>
    <label>Mobile Number</label>
    <input  name="mobilenumber" id="mobilenumber" value="<?php echo $mobilenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label>E-mail</label>
    <input  name="email" id="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter Number">
    </div>-->
    <div >
     <label>Driver Injury:</label>
     <?php echo $driverinjury;?>
      
    </div>
     <div >
     <label>Driver Error:</label>
     <?php echo $drivererror;?>
      
    </div>
     <div >
     <label>Driving License Details:</label>
     <?php echo $drivinglicensedetails;?>
      
    </div>
    <div>
    <label>Driving License Number:</label>
    <?php echo $licensenumber;?>
    </div>
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div>    
  </form>
</div>
</body>
</html>

<?php
include_once("connect.php");

//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM vehicle1 WHERE cno='$crimenumber' AND vh=2");
 
while($res = mysqli_fetch_array($result))
{
    $crimenumber = $res['cno'];
$vehiclenumber = $res['regno1'];
$rcproduced = $res['rcproduced'];
$make = $res['make'];
$model = $res['model'];
$ownername = $res['vehicleowner'];
$owneraddress = $res['owneraddress'];
$type = $res['type'];
$class = $res['class'];
$transportvehicletype = $res['transportvehicletype'];
$permitvalidity = $res['permitvalidity'];
$pollutioncertificatevalidity = $res['pollutioncertificatevalid'];
$insuranceavailability = $res['insuranceavailability'];
$insurancecompanyname = $res['insurancecompanydetail'];
$insurancenumber = $res['policynumber'];
$manoeuvre = $res['manoeuvre'];
$vehicledamagelevel = $res['vehicledamagelevel'];
$tradeplateavailability = $res['tradeplateavailability'];
$drivername = $res['drivername'];
$driveraddress = $res['driveraddress'];
$gender = $res['gender'];
$dob = $res['dob'];
$age = $res['age'];
//$mobilenumber = $res['mobilenumber'];
//$email = $res['email'];
$driverinjury = $res['driverinjury'];
$drivererror = $res['drivererror'];
$drivinglicensedetails = $res['licensedetails'];
$licensenumber = $res['licensenumber'];
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
             Police Login
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
    background: #ffffff;
   }
   form{
    width: 70%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   
</style>
</head>
<body>
<div id="content">
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
     <h3><center>FORM A.I.R</center> </h3>
<h3><u><center>Inspection Report of Motor Vehicles Involved in Accident</center></u></h3>
<h4><center>(Rule 378 of the Tamil Nadu Motor Vehicles Rules 1989)</center></h4>
    <h3><center>VEHICLE 1 DETAILS ENTERING FORM </center></h3> <br /> 
    <div>
    <label> Crime Number:  </label>
    <?php echo $crimenumber;?>
    </div>
    <div>
    <label> Vehicle Number:</label>
    <?php echo $vehiclenumber;?>
    </div>
    <div >
     <label>RC Produced:</label>
     <?php echo $rcproduced;?>
      
    </div>
    <div>
    <label>Make:</label>
    <?php echo $make;?>
    </div>
    <div>
    <label>Model:</label>
   <?php echo $model;?>
    </div>
    <div>
    <label>Owner Name:</label>
    <?php echo $ownername;?>
    </div>
    <div>
    <label>Owner Address:</label>
    <?php echo $owneraddress;?>
    </div>
    <div >
     <label>Type:</label>
     <?php echo $type;?>
    </div>
    <div >
     <label>Class:</label>
     <?php echo $class;?> 
    </div>
    <div >
     <label>Transport Vehicle Type:</label>
     <?php echo $transportvehicletype;?>
        
    </div>
    <div>
    <label>Permit Validity:</label>
    <?php echo $permitvalidity;?>
    </div>
    <div>
    <label>Pollution Certificate Validity:</label>
    <?php echo $pollutioncertificatevalidity;?>
    </div>
    <div >
     <label>Insurance Availability:</label>
     <?php echo $insuranceavailability;?>
      
    </div>
    <div>
    <label>Insurance Company Name:</label>
    <?php echo $insurancecompanyname;?>
    </div>
    <div>
    <label>Insurance Number:</label>
    <?php echo $insurancenumber;?>
    </div>
    <div >
     <label>Manoeuvre:</label>
     <?php echo $manoeuvre;?>
      
    </div>
    <div >
     <label>Vehicle Damage Level:</label>
     <?php echo $vehicledamagelevel;?>
      
    </div>
    <div >
     <label>Trade Plate Availability:</label>
     <?php echo $tradeplateavailability;?>
      
    </div>
    <div>
    <label>Driver Name:</label>
    <?php echo $drivername;?>
    </div>
    <div>
    <label> Driver Address:</label>
    <?php echo $driveraddress;?>
    </div>
     <div >
     <label>Gender:</label>
     <?php echo $gender;?>
      
    </div>
    <div>
    <label>Date of Birth:</label>
    <?php echo $dob;?>
    </div>
    <div>
    <label>Age:</label>
    <?php echo $age;?>
    </div>
    <!--<div>
    <label>Mobile Number</label>
    <input  name="mobilenumber" id="mobilenumber" value="<?php echo $mobilenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label>E-mail</label>
    <input  name="email" id="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter Number">
    </div>-->
    <div >
     <label>Driver Injury:</label>
     <?php echo $driverinjury;?>
      
    </div>
     <div >
     <label>Driver Error:</label>
     <?php echo $drivererror;?>
      
    </div>
     <div >
     <label>Driving License Details:</label>
     <?php echo $drivinglicensedetails;?>
      
    </div>
    <div>
    <label>Driving License Number:</label>
    <?php echo $licensenumber;?>
    </div>
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div>    
  </form>
</div>
</body>
</html>