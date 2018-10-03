<?php
  $db = mysqli_connect("localhost", "root", "", "police");

// including the database connection file
 
 
//getting id from url
$crimenumber = $_GET['crimenumber'];

//selecting data associated with this particular id
$result = "INSERT INTO vehicle1copy SELECT * FROM vehicle1 WHERE cno='$crimenumber' AND vh=1";
//echo ("Success");
mysqli_query($db, $result); 

 
 ?>

<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['submit']))
{    
$crimenumber = $_POST['crimenumber'];
$vehiclenumber = $_POST['vehiclenumber'];
$rcproduced = $_POST['rcproduced'];
$make = $_POST['make'];
$model = $_POST['model'];
$ownername = $_POST['ownername'];
$owneraddress = $_POST['owneraddress'];
$type = $_POST['type'];
$class = $_POST['class'];
$transportvehicletype = $_POST['transportvehicletype'];
$permitvalidity = $_POST['permitvalidity'];
$pollutioncertificatevalidity = $_POST['pollutioncertificatevalidity'];
$insuranceavailability = $_POST['insuranceavailability'];
$insurancecompanyname = $_POST['insurancecompanyname'];
$insurancenumber = $_POST['insurancenumber'];
$manoeuvre = $_POST['manoeuvre'];
$vehicledamagelevel = $_POST['vehicledamagelevel'];
$tradeplateavailability = $_POST['tradeplateavailability'];
$roadtestcarried = $_POST['roadtestcarried'];
$roadtestdescription = $_POST['roadtestdescription'];
$conditionoftyres = $_POST['conditionoftyres'];
$frontwhitereflectortape = $_POST['frontwhitereflectortape'];
$backwhitereflectortape = $_POST['backwhitereflectortape'];
$drivername = $_POST['drivername'];
$driveraddress = $_POST['driveraddress'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$age = $_POST['age'];
//$mobilenumber = $_POST['mobilenumber'];
//$email = $_POST['email'];
$driverinjury = $_POST['driverinjury'];
$drivererror = $_POST['drivererror'];
$drivinglicensedetails = $_POST['drivinglicensedetails'];
$licensenumber = $_POST['licensenumber'];
       
    
    // checking empty fields
  /*  if(empty($firstname) || empty($lastname)) {            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty.</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty.</font><br/>";
        }
       
                
    } 
 
    else {  
         */
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE vehicle1 SET regno1='$vehiclenumber',rcproduced='$rcproduced',make='$make',model='$model',vehicleowner='$ownername',owneraddress='$owneraddress',type='$type' , class='$class', transportvehicletype='$transportvehicletype', permitvalidity='$permitvalidity' , pollutioncertificatevalidity='$pollutioncertificatevalid' , insuranceavailability='$insuranceavailability' , insurancecompanydetail='$insurancecompanyname' , policynumber='$insurancenumber' , manoeuvre='$manoeuvre' , vehicledamagelevel='$vehicledamagelevel' , tradeplateavailability='$tradeplateavailability' , drivername='$drivername', driveraddress='$driveraddress' , gender='$gender' , dob='$dob',age='$age', driverinjury='$driverinjury', drivererror='$drivererror', licensedetails='$drivinglicensedetails' , licensenumber='$licensenumber' WHERE cno='$crimenumber' AND vh=1 ");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: check.php");
   
}
?>
<?php
//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM vehicle1 WHERE vh=1 AND cno='$crimenumber'");
 
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
             Vehicle 1 Edit
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
  <form method="POST" action="basicedit.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
     <h3><center>FORM A.I.R</center> </h3>
<h3><u><center>Inspection Report of Motor Vehicles Involved in Accident</center></u></h3>
<h4><center>(Rule 378 of the Tamil Nadu Motor Vehicles Rules 1989)</center></h4>
    <h3><center>VEHICLE 1 DETAILS ENTERING FORM </center></h3> <br /> 
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number  </label>
    <input  name="crimenumber" id="crimenumber" value="<?php echo $crimenumber;?>" class="form-control" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Vehicle Number</label>
    <input  name="vehiclenumber" id="vehiclenumber" class="form-control" value="<?php echo $vehiclenumber;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>RC Produced</label>
     <input name='rcproduced' id='rcproduced' value="<?php echo $rcproduced;?>" class="form-control">
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Make</label>
    <input  name="make" id="make" class="form-control" value="<?php echo $make;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Model</label>
    <input  name="model" id="model" class="form-control" value="<?php echo $model;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Owner Name</label>
    <input  name="ownername" id="ownername" class="form-control" value="<?php echo $ownername;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Owner Address</label>
    <input  name="owneraddress" id="owneraddress" class="form-control" value="<?php echo $owneraddress;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Type</label>
     <input name='type' id='type' value="<?php echo $type;?>" class="form-control">
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Class</label>
     <input name='class' id='class' value="<?php echo $class;?>" class="form-control">
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Transport Vehicle Type</label>
     <input name='transportvehicletype' id='transportvehicletype' value="<?php echo $transportvehicletype;?>" class="form-control">
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Permit Validity</label>
    <input  name="permitvalidity" id="permitvalidity" type="Date" value="<?php echo $permitvalidity;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Pollution Certificate Validity</label>
    <input  name="pollutioncertificatevalidity" id="pollutioncertificatevalidity" value="<?php echo $pollutioncertificatevalidity;?>" type="Date" class="form-control" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Insurance Availability</label>
     <input name='insuranceavailability' id='insuranceavailability' value="<?php echo $insuranceavailability;?>" class="form-control">
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Insurance Company Name</label>
    <input  name="insurancecompanyname" id="insurancecompanyname" value="<?php echo $insurancecompanyname;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Insurance Number</label>
    <input  name="insurancenumber" id="insurancenumber" class="form-control" value="<?php echo $insurancenumber;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Manoeuvre</label>
     <input name='manoeuvre' id='manoeuvre' value="<?php echo $manoeuvre;?>" class="form-control">
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Vehicle Damage Level</label>
     <input name='vehicledamagelevel' id='vehicledamagelevel' value="<?php echo $vehicledamagelevel;?>" class="form-control">
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Trade Plate Availability</label>
     <input name='tradeplateavailability' id='tradeplateavailability' value="<?php echo $tradeplateavailability;?>" class="form-control">
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Driver Name</label>
    <input  name="drivername" id="drivername" class="form-control" value="<?php echo $drivername;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Driver Address</label>
    <input  name="driveraddress" id="driveraddress" class="form-control" value="<?php echo $driveraddress;?>" placeholder="Enter Number">
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Gender</label>
     <input name='gender' id='gender' value="<?php echo $gender;?>" class="form-control">
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Date of Birth</label>
    <input  name="dob" id="dob" class="form-control" value="<?php echo $dob;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Age</label>
    <input  name="age" id="age" class="form-control" value="<?php echo $age;?>" placeholder="Enter Number">
    </div>
    <!--<div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Mobile Number</label>
    <input  name="mobilenumber" id="mobilenumber" value="<?php echo $mobilenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>E-mail</label>
    <input  name="email" id="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter Number">
    </div>-->
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driver Injury</label>
     <input name='driverinjury' id='driverinjury' value="<?php echo $driverinjury;?>" class="form-control">
      </input>
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driver Error</label>
     <input name='drivererror' id='drivererror' value="<?php echo $drivererror;?>" class="form-control">
      
      </input>
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driving License Details</label>
     <input name='drivinglicensedetails' id='drivinglicensedetails' value="<?php echo $drivinglicensedetails;?>" class="form-control">
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Driving License Number</label>
    <input  name="licensenumber" id="licensenumber" class="form-control" value="<?php echo $licensenumber;?>" placeholder="Enter Number">
    </div>

    <div>
        <button class="btn btn-raised btn-unblock btn-danger" type="submit" name="submit" ><strong>SUBMIT &rarr;</strong></button>
    </div>
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div>    
  </form>
</div>
</body>
</html>