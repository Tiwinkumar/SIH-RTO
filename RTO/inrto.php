<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sih");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    // Get image name
$crimenumber = mysqli_real_escape_string($db, $_POST['crimenumber']);
$policestationname = mysqli_real_escape_string($db, $_POST['policestationname']);
$district = mysqli_real_escape_string($db, $_POST['district']);
$zone = mysqli_real_escape_string($db, $_POST['zone']);
$rto = mysqli_real_escape_string($db, $_POST['rto']);
$ipcsection = mysqli_real_escape_string($db, $_POST['ipcsection']);
$natureofaccident = mysqli_real_escape_string($db, $_POST['natureofaccident']);
$placeofaccident = mysqli_real_escape_string($db, $_POST['placeofaccident']);
$accidentdate = mysqli_real_escape_string($db, $_POST['accidentdate']);
$accidenttime = mysqli_real_escape_string($db, $_POST['accidenttime']);
$numberofvehicles = mysqli_real_escape_string($db, $_POST['numberofvehicles']);
$collisiontype = mysqli_real_escape_string($db, $_POST['collisiontype']);
$junctiontype = mysqli_real_escape_string($db, $_POST['junctiontype']);
$junctioncontrol = mysqli_real_escape_string($db, $_POST['junctioncontrol']);
$roadcategory = mysqli_real_escape_string($db, $_POST['roadcategory']);
$roadnarrowing = mysqli_real_escape_string($db, $_POST['roadnarrowing']);
$lightcondition = mysqli_real_escape_string($db, $_POST['lightcondition']);
$climate = mysqli_real_escape_string($db, $_POST['climate']);
$vehiclenumber = mysqli_real_escape_string($db, $_POST['vehiclenumber']);
$rcproduced = mysqli_real_escape_string($db, $_POST['rcproduced']);
$make = mysqli_real_escape_string($db, $_POST['make']);
$model = mysqli_real_escape_string($db, $_POST['model']);
$ownername = mysqli_real_escape_string($db, $_POST['ownername']);
$owneraddress = mysqli_real_escape_string($db, $_POST['owneraddress']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$class = mysqli_real_escape_string($db, $_POST['class']);
$transportvehicletype = mysqli_real_escape_string($db, $_POST['transportvehicletype']);
$permitvalidity = mysqli_real_escape_string($db, $_POST['permitvalidity']);
$pollutioncertificatevalidity = mysqli_real_escape_string($db, $_POST['pollutioncertificatevalidity']);
$insuranceavailability = mysqli_real_escape_string($db, $_POST['insuranceavailability']);
$insurancecompanyname = mysqli_real_escape_string($db, $_POST['insurancecompanyname']);
$insurancenumber = mysqli_real_escape_string($db, $_POST['insurancenumber']);
$manoeuvre = mysqli_real_escape_string($db, $_POST['manoeuvre']);
$vehicledamagelevel = mysqli_real_escape_string($db, $_POST['vehicledamagelevel']);
$tradeplateavailability = mysqli_real_escape_string($db, $_POST['tradeplateavailability']);
$roadtestcarried = mysqli_real_escape_string($db, $_POST['roadtestcarried']);
$roadtestdescription = mysqli_real_escape_string($db, $_POST['roadtestdescription']);
$conditionoftyres = mysqli_real_escape_string($db, $_POST['conditionoftyres']);
$frontwhitereflectortape = mysqli_real_escape_string($db, $_POST['frontwhitereflectortape']);
$backwhitereflectortape = mysqli_real_escape_string($db, $_POST['backwhitereflectortape']);
$drivername = mysqli_real_escape_string($db, $_POST['drivername']);
$driveraddress = mysqli_real_escape_string($db, $_POST['driveraddress']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$age = mysqli_real_escape_string($db, $_POST['age']);
$mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$driverinjury = mysqli_real_escape_string($db, $_POST['driverinjury']);
$drivererror = mysqli_real_escape_string($db, $_POST['drivererror']);
$drivinglicensedetails = mysqli_real_escape_string($db, $_POST['drivinglicensedetails']);
$licensenumber = mysqli_real_escape_string($db, $_POST['licensenumber']);
$numberofinjuredpersons = mysqli_real_escape_string($db, $_POST['numberofinjuredpersons']);

    // image file directory

    $sql = "INSERT INTO form (crimenumber,policestationname,district,zone,rto,ipcsection,natureofaccident,placeofaccident,accidentdate,accidenttime,numberofvehicles,collisiontype,junctiontype,junctioncontrol,roadcategory,roadnarrowing,lightcondition,climate,vehiclenumber,rcproduced,make,model,ownername,owneraddress,type,class,transportvehicletype,permitvalidity,pollutioncertificatevalidity,insuranceavailability,insurancecompanyname,insurancenumber,manoeuvre,vehicledamagelevel,tradeplateavailability,roadtestcarried,roadtestdescription,conditionoftyres,frontwhitereflectortape,backwhitereflectortape,drivername,driveraddress,gender,dob,age,mobilenumber,email,driverinjury,drivererror,drivinglicensedetails,licensenumber,numberofinjuredpersons) VALUES ('$crimenumber', '$policestationname', '$district', '$zone', '$rto', '$ipcsection', '$natureofaccident', '$placeofaccident', '$accidentdate', '$accidenttime', '$numberofvehicles', '$collisiontype', '$junctiontype', '$junctioncontrol', '$roadcategory', '$roadnarrowing', '$lightcondition', '$climate', '$vehiclenumber', '$rcproduced', '$make', '$model', '$ownername', '$owneraddress', '$type', '$class', '$transportvehicletype', '$permitvalidity', '$pollutioncertificatevalidity', '$insuranceavailability', '$insurancecompanyname',  '$insurancenumber', '$manoeuvre', '$vehicledamagelevel', '$tradeplateavailability', '$roadtestcarried', '$roadtestdescription', '$conditionoftyres', '$frontwhitereflectortape', '$backwhitereflectortape', '$drivername', '$driveraddress', '$gender', '$dob', '$age', '$mobilenumber', '$email', '$driverinjury', '$drivererror', '$drivinglicensedetails', '$licensenumber', '$numberofinjuredpersons')";
    // execute query
    mysqli_query($db, $sql);
  }
  ?>