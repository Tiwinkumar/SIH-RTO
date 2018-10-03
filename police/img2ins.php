<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "police");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
    // Get image name
//$id = mysqli_real_escape_string($db, $_POST['id']);
$zone = mysqli_real_escape_string($db, $_POST['zone']);
$dis = mysqli_real_escape_string($db, $_POST['dis']);
$rto = mysqli_real_escape_string($db, $_POST['rto']);
$unit = mysqli_real_escape_string($db, $_POST['unit']);
$psta = mysqli_real_escape_string($db, $_POST['psta']);
$cno = mysqli_real_escape_string($db, $_POST['cno']);
$placeofaccident = mysqli_real_escape_string($db, $_POST['lo']);
$latitude = mysqli_real_escape_string($db, $_POST['lati']);
$longitude = mysqli_real_escape_string($db, $_POST['longi']);
$ipc = mysqli_real_escape_string($db, $_POST['ipc']);
$ioth1 = mysqli_real_escape_string($db, $_POST['ioth1']);
$natureofaccident = mysqli_real_escape_string($db, $_POST['noa']);
$ioth2 = mysqli_real_escape_string($db, $_POST['ioth2']);
$accidentdate = mysqli_real_escape_string($db, $_POST['adate']);
$accidenttime = mysqli_real_escape_string($db, $_POST['at']);
$numberofvehiclesinvolved = mysqli_real_escape_string($db, $_POST['novi']);

$image = $_FILES['image']['name'];
$target = "img/".basename($image);

$collisiontype = mysqli_real_escape_string($db, $_POST['ctype']);
$coth = mysqli_real_escape_string($db, $_POST['coth']);
$junctiontype = mysqli_real_escape_string($db, $_POST['jtype']);
$joth = mysqli_real_escape_string($db, $_POST['joth']);
$junctioncontrol = mysqli_real_escape_string($db, $_POST['jcon']);
$jcoth = mysqli_real_escape_string($db, $_POST['jcoth']);
$roadcategory = mysqli_real_escape_string($db, $_POST['rcat']);
$roth = mysqli_real_escape_string($db, $_POST['roth']);
$roadnarrowing = mysqli_real_escape_string($db, $_POST['rnar']);
$rnoth = mysqli_real_escape_string($db, $_POST['rnoth']);
$lightconditions = mysqli_real_escape_string($db, $_POST['lcon']);
$loth = mysqli_real_escape_string($db, $_POST['loth']);
$climate = mysqli_real_escape_string($db, $_POST['cli']);
$cloth = mysqli_real_escape_string($db, $_POST['cloth']);

$regno = mysqli_real_escape_string($db, $_POST['reg1']);
$rcproduced = mysqli_real_escape_string($db, $_POST['rcp1']);
$make = mysqli_real_escape_string($db, $_POST['make1']);
$model = mysqli_real_escape_string($db, $_POST['classi1']);
$vehicleowner = mysqli_real_escape_string($db, $_POST['oname1']);
$owneraddress = mysqli_real_escape_string($db, $_POST['oaddress1']);
$type = mysqli_real_escape_string($db, $_POST['type1']);
$class = mysqli_real_escape_string($db, $_POST['class1']);
$cloth1 = mysqli_real_escape_string($db, $_POST['cloth1']);
$transportvehicletype = mysqli_real_escape_string($db, $_POST['tt1']);
$toth = mysqli_real_escape_string($db, $_POST['toth1']);
$stagecarrier = mysqli_real_escape_string($db, $_POST['st1']);
$mofussil = mysqli_real_escape_string($db, $_POST['mof1']);
$towntype = mysqli_real_escape_string($db, $_POST['tow1']);
$permitvalidity = mysqli_real_escape_string($db, $_POST['pv1']);
$fitnesscertificateissueddate = mysqli_real_escape_string($db, $_POST['fit1']);
$fitnesscertificatevalidity = mysqli_real_escape_string($db, $_POST['ft1']);
$pollutioncertificatevalidity = mysqli_real_escape_string($db, $_POST['pct1']);
$nontransport = mysqli_real_escape_string($db, $_POST['ntt1']);
$ntoth1 = mysqli_real_escape_string($db, $_POST['ntoth1']);
$rcvalidity = mysqli_real_escape_string($db, $_POST['rc1']);
$pollutioncertificatevalid = mysqli_real_escape_string($db, $_POST['pcnt1']);
$insuranceavailability = mysqli_real_escape_string($db, $_POST['ins1']);
$insurancevalidity = mysqli_real_escape_string($db, $_POST['iv1']);
$insurancecompanydetail = mysqli_real_escape_string($db, $_POST['ic1']);
$policynumber = mysqli_real_escape_string($db, $_POST['pn1']);
$manoeuvre = mysqli_real_escape_string($db, $_POST['ma1']);
$moth1 = mysqli_real_escape_string($db, $_POST['moth1']);
$vehicledamagelevel = mysqli_real_escape_string($db, $_POST['man1']);
$vdoth = mysqli_real_escape_string($db, $_POST['vdoth1']);
$tradeplateavailability = mysqli_real_escape_string($db, $_POST['vp']);
$reason = mysqli_real_escape_string($db, $_POST['tpoth1']);
$drivername = mysqli_real_escape_string($db, $_POST['dname1']);
$driveraddress = mysqli_real_escape_string($db, $_POST['daddress1']);
$gender = mysqli_real_escape_string($db, $_POST['gen1']);
$dob = mysqli_real_escape_string($db, $_POST['date1']);
$age = mysqli_real_escape_string($db, $_POST['age1']);
$driverinjury = mysqli_real_escape_string($db, $_POST['din1']);
$dinoth1 = mysqli_real_escape_string($db, $_POST['dinoth1']);
$drivererror = mysqli_real_escape_string($db, $_POST['derr1']);
$deoth1 = mysqli_real_escape_string($db, $_POST['deoth1']);
$licensedetails = mysqli_real_escape_string($db, $_POST['l1']);
$licensenumber = mysqli_real_escape_string($db, $_POST['dl1']);
$classofvehicle = mysqli_real_escape_string($db, $_POST['cl1']);
$lcloth1 = mysqli_real_escape_string($db, $_POST['lcloth1']);
$badgenumber = mysqli_real_escape_string($db, $_POST['b1']);
$licenseissueddate = mysqli_real_escape_string($db, $_POST['dob']);
$driverexperience = mysqli_real_escape_string($db, $_POST['dexp1']);
$licensevalidity = mysqli_real_escape_string($db, $_POST['dlv1']);

$regno2 = mysqli_real_escape_string($db, $_POST['reg2']);
$rcproduced2 = mysqli_real_escape_string($db, $_POST['rcp2']);
$make2 = mysqli_real_escape_string($db, $_POST['make2']);
$model2 = mysqli_real_escape_string($db, $_POST['classi2']);
$vehicleowner2 = mysqli_real_escape_string($db, $_POST['oname2']);
$owneraddress2 = mysqli_real_escape_string($db, $_POST['oaddress2']);
$type2 = mysqli_real_escape_string($db, $_POST['type2']);
$class2 = mysqli_real_escape_string($db, $_POST['class2']);
$cloth2 = mysqli_real_escape_string($db, $_POST['cloth2']);
$transportvehicletype2 = mysqli_real_escape_string($db, $_POST['tt2']);
$toth2 = mysqli_real_escape_string($db, $_POST['toth2']);
$stagecarrier2 = mysqli_real_escape_string($db, $_POST['st2']);
$mofussil2 = mysqli_real_escape_string($db, $_POST['mof2']);
$towntype2 = mysqli_real_escape_string($db, $_POST['tow2']);
$permitvalidity2 = mysqli_real_escape_string($db, $_POST['pv2']);
$fitnesscertificateissueddate2 = mysqli_real_escape_string($db, $_POST['fit2']);
$fitnesscertificatevalidity2 = mysqli_real_escape_string($db, $_POST['ft2']);
$pollutioncertificatevalidity2 = mysqli_real_escape_string($db, $_POST['pct2']);
$nontransport2 = mysqli_real_escape_string($db, $_POST['ntt2']);
$ntoth2 = mysqli_real_escape_string($db, $_POST['ntoth2']);
$rcvalidity2 = mysqli_real_escape_string($db, $_POST['rc2']);
$pollutioncertificatevalid2 = mysqli_real_escape_string($db, $_POST['pcnt2']);
$insuranceavailability2 = mysqli_real_escape_string($db, $_POST['ins2']);
$insurancevalidity2 = mysqli_real_escape_string($db, $_POST['iv2']);
$insurancecompanydetail2 = mysqli_real_escape_string($db, $_POST['ic2']);
$policynumber2 = mysqli_real_escape_string($db, $_POST['pn2']);
$manoeuvre2 = mysqli_real_escape_string($db, $_POST['ma2']);
$moth2 = mysqli_real_escape_string($db, $_POST['moth2']);
$vehicledamagelevel2 = mysqli_real_escape_string($db, $_POST['man2']);
$vdoth2 = mysqli_real_escape_string($db, $_POST['vdoth2']);
$tradeplateavailability2 = mysqli_real_escape_string($db, $_POST['tp2']);
$reason2 = mysqli_real_escape_string($db, $_POST['tpoth2']);
$drivername2 = mysqli_real_escape_string($db, $_POST['dname2']);
$driveraddress2 = mysqli_real_escape_string($db, $_POST['daddress2']);
$gender2 = mysqli_real_escape_string($db, $_POST['gen2']);
$dob2 = mysqli_real_escape_string($db, $_POST['date2']);
$age2 = mysqli_real_escape_string($db, $_POST['age2']);
$driverinjury2 = mysqli_real_escape_string($db, $_POST['din2']);
$dinoth2 = mysqli_real_escape_string($db, $_POST['dinoth2']);
$drivererror2 = mysqli_real_escape_string($db, $_POST['derr2']);
$deoth2 = mysqli_real_escape_string($db, $_POST['deoth2']);
$licensedetails2 = mysqli_real_escape_string($db, $_POST['l2']);
$licensenumber2 = mysqli_real_escape_string($db, $_POST['dl2']);
$classofvehicle2 = mysqli_real_escape_string($db, $_POST['cl2']);
$lcloth2 = mysqli_real_escape_string($db, $_POST['lcloth2']);
$badgenumber2 = mysqli_real_escape_string($db, $_POST['b2']);
$licenseissueddate2 = mysqli_real_escape_string($db, $_POST['dob2']);
$driverexperience2 = mysqli_real_escape_string($db, $_POST['dexp2']);
$licensevalidity2 = mysqli_real_escape_string($db, $_POST['dlv2']);

$male = mysqli_real_escape_string($db, $_POST['fmal']);
$female = mysqli_real_escape_string($db, $_POST['ffem']);
$children = mysqli_real_escape_string($db, $_POST['fchild']);
//$total = mysqli_real_escape_string($db, $_POST['ftot']);
$imale = mysqli_real_escape_string($db, $_POST['imal']);
$ifemale = mysqli_real_escape_string($db, $_POST['ifem']);
$ichildren = mysqli_real_escape_string($db, $_POST['ichild']);
//$itotal = mysqli_real_escape_string($db, $_POST['itot']);

$male2 = mysqli_real_escape_string($db, $_POST['fmal2']);
$female2 = mysqli_real_escape_string($db, $_POST['ffem2']);
$children2 = mysqli_real_escape_string($db, $_POST['fchild2']);
//$total = mysqli_real_escape_string($db, $_POST['ftot']);
$imale2 = mysqli_real_escape_string($db, $_POST['imal2']);
$ifemale2 = mysqli_real_escape_string($db, $_POST['ifem2']);
$ichildren2 = mysqli_real_escape_string($db, $_POST['ichild2']);
//$itotal = mysqli_real_escape_string($db, $_POST['itot']);

    // image file directory

    $sql = "INSERT INTO basic (zone,dis,rto,unit,psta,cno,placeofaccident,latitude,longitude,ipc,ioth1,natureofaccident,ioth2,accidentdate,accidenttime,numberofvehiclesinvolved,image,collisiontype,coth,junctiontype,joth,junctioncontrol,jcoth,roadcategory,roth,roadnarrowing,rnoth,lightconditions,loth,climate,cloth) VALUES ('$zone', '$dis', '$rto', '$unit', '$psta', '$cno', '$placeofaccident', '$latitude', '$longitude', '$ipc', '$ioth1', '$natureofaccident', '$ioth2', '$accidentdate', '$accidenttime', '$numberofvehiclesinvolved', '$image', '$collisiontype', '$coth', '$junctiontype', '$joth', '$junctioncontrol', '$jcoth', '$roadcategory', '$roth', '$roadnarrowing', '$rnoth', '$lightconditions', '$loth', '$climate', '$cloth')";


    $sql1 = "INSERT INTO vehicle1 (cno,regno,rcproduced,make,model,vehicleowner,owneraddress,type,class,cloth1,transportvehicletype,toth,stagecarrier,mofussil,towntype,permitvalidity,fitnesscertificateissueddate,fitnesscertificatevalidity,pollutioncertificatevalidity,nontransport,ntoth,rcvalidity,pollutioncertificatevalid,insuranceavailability,insurancevalidity,insurancecompanydetail,policynumber,manoeuvre,moth1,vehicledamagelevel,vdoth,tradeplateavailability,reason,drivername,driveraddress,gender,dob,age,driverinjury,dinoth1,drivererror,deoth1,licensedetails,licensenumber,classofvehicle,lcloth1,badgenumber,licenseissueddate,driverexperience,licensevalidity) VALUES ('$cno', '$regno', '$rcproduced', '$make', '$model', '$vehicleowner', '$owneraddress', '$type', '$class', '$cloth1', '$transportvehicletype', '$toth', '$stagecarrier', '$mofussil', '$towntype', '$permitvalidity', '$fitnesscertificateissueddate', '$fitnesscertificatevalidity', '$pollutioncertificatevalidity', '$nontransport', '$ntoth1', '$rcvalidity', '$pollutioncertificatevalid', '$insuranceavailability', '$insurancevalidity', '$insurancecompanydetail', '$policynumber', '$manoeuvre', '$moth1', '$vehicledamagelevel', '$vdoth', '$tradeplateavailability', '$reason', '$drivername', '$driveraddress', '$gender', '$dob', '$age', '$driverinjury', '$dinoth1', '$drivererror', '$deoth1', '$licensedetails', '$licensenumber', '$classofvehicle', '$lcloth1', '$badgenumber', '$licenseissueddate', '$driverexperience', '$licensevalidity')";

    $sql2 = "INSERT INTO fatal1 (cno,regno,male,female,children,imale,ifemale,ichildren) VALUES ('$cno', '$regno', '$male', '$female', '$children', '$imale', '$ifemale', '$ichildren')";

     $sql3 = "INSERT INTO vehicle2 (cno,regno,rcproduced,make,model,vehicleowner,owneraddress,type,class,cloth1,transportvehicletype,toth,stagecarrier,mofussil,towntype,permitvalidity,fitnesscertificateissueddate,fitnesscertificatevalidity,pollutioncertificatevalidity,nontransport,ntoth,rcvalidity,pollutioncertificatevalid,insuranceavailability,insurancevalidity,insurancecompanydetail,policynumber,manoeuvre,moth1,vehicledamagelevel,vdoth,tradeplateavailability,reason,drivername,driveraddress,gender,dob,age,driverinjury,dinoth1,drivererror,deoth1,licensedetails,licensenumber,classofvehicle,lcloth1,badgenumber,licenseissueddate,driverexperience,licensevalidity) VALUES ('$cno', '$regno2', '$rcproduced2', '$make2', '$model2', '$vehicleowner2', '$owneraddress2', '$type2', '$class2', '$cloth2', '$transportvehicletype2', '$toth2', '$stagecarrier2', '$mofussil2', '$towntype2', '$permitvalidity2', '$fitnesscertificateissueddate2', '$fitnesscertificatevalidity2', '$pollutioncertificatevalidity2', '$nontransport2', '$ntoth2', '$rcvalidity2', '$pollutioncertificatevalid2', '$insuranceavailability2', '$insurancevalidity2', '$insurancecompanydetail2', '$policynumber2', '$manoeuvre2', '$moth2', '$vehicledamagelevel2', '$vdoth2', '$tradeplateavailability2', '$reason2', '$drivername2', '$driveraddress2', '$gender2', '$dob2', '$age2', '$driverinjury2', '$dinoth2', '$drivererror2', '$deoth2', '$licensedetails2', '$licensenumber2', '$classofvehicle2', '$lcloth2', '$badgenumber2', '$licenseissueddate2', '$driverexperience2', '$licensevalidity2')";

      $sql4 = "INSERT INTO fatal2 (cno,regno,male,female,children,imale,ifemale,ichildren) VALUES ('$cno', '$regno2', '$male2', '$female2', '$children2', '$imale2', '$ifemale2', '$ichildren2')";
    // execute query
    mysqli_query($db, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    mysqli_query($db, $sql1);
    mysqli_query($db, $sql2);
    mysqli_query($db, $sql3);
    mysqli_query($db, $sql4);

  }
  ?>