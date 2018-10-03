<?php
// including the database connection file
//include_once("connect.php");
$dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'police';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
 
if(isset($_POST['submit']))
{    
$zone =  $_POST['zone'];
$dis =  $_POST['dis'];
$rto =  $_POST['rto'];
$unit =  $_POST['unit'];
$psta =  $_POST['psta'];
$cno =  $_POST['cno'];
$placeofaccident =  $_POST['lo'];
$latitude =  $_POST['lati'];
$longitude =  $_POST['longi'];
$ipc =  $_POST['ipc'];
$ioth1 =  $_POST['ioth1'];
$natureofaccident =  $_POST['noa'];
$ioth2 =  $_POST['ioth2'];
$accidentdate =  $_POST['adate'];
$accidenttime =  $_POST['at'];
$numberofvehiclesinvolved =  $_POST['novi'];
$status =  $_POST['status'];


$image = $_FILES['image']['name'];
$target = "img/".basename($image);

$collisiontype =  $_POST['ctype'];
$coth =  $_POST['coth'];
$junctiontype =  $_POST['jtype'];
$joth =  $_POST['joth'];
$junctioncontrol =  $_POST['jcon'];
$jcoth =  $_POST['jcoth'];
$roadcategory =  $_POST['rcat'];
$roth =  $_POST['roth'];
$roadnarrowing =  $_POST['rnar'];
$rnoth =  $_POST['rnoth'];
$lightconditions =  $_POST['lcon'];
$loth =  $_POST['loth'];
$climate =  $_POST['cli'];
$cloth =  $_POST['cloth'];

$regno =  $_POST['reg1'];
$rcproduced =  $_POST['rcp1'];
$make =  $_POST['make1'];
$model =  $_POST['classi1'];
$vehicleowner =  $_POST['oname1'];
$owneraddress =  $_POST['oaddress1'];
$type =  $_POST['type1'];
$class =  $_POST['class1'];
$cloth1 =  $_POST['cloth1'];
$transportvehicletype =  $_POST['tt1'];
$toth =  $_POST['toth1'];
$stagecarrier =  $_POST['st1'];
$mofussil =  $_POST['mof1'];
$towntype =  $_POST['tow1'];
$permitvalidity =  $_POST['pv1'];
$fitnesscertificateissueddate =  $_POST['fit1'];
$fitnesscertificatevalidity =  $_POST['ft1'];
$pollutioncertificatevalidity =  $_POST['pct1'];
$nontransport =  $_POST['ntt1'];
$ntoth1 =  $_POST['ntoth1'];
$rcvalidity =  $_POST['rc1'];
$pollutioncertificatevalid =  $_POST['pcnt1'];
$insuranceavailability =  $_POST['ins1'];
$insurancevalidity =  $_POST['iv1'];
$insurancecompanydetail =  $_POST['ic1'];
$policynumber =  $_POST['pn1'];
$manoeuvre =  $_POST['ma1'];
$moth1 =  $_POST['moth1'];
$vehicledamagelevel =  $_POST['man1'];
$vdoth =  $_POST['vdoth1'];
$tradeplateavailability =  $_POST['vp'];
$reason =  $_POST['tpoth1'];
$drivername =  $_POST['dname1'];
$driveraddress =  $_POST['daddress1'];
$gender =  $_POST['gen1'];
$dob =  $_POST['date1'];
$age =  $_POST['age1'];
$driverinjury =  $_POST['din1'];
$dinoth1 =  $_POST['dinoth1'];
$drivererror =  $_POST['derr1'];
$deoth1 =  $_POST['deoth1'];
$licensedetails =  $_POST['l1'];
$licensenumber =  $_POST['dl1'];
$classofvehicle =  $_POST['cl1'];
$lcloth1 =  $_POST['lcloth1'];
$badgenumber =  $_POST['b1'];
$licenseissueddate =  $_POST['dob'];
$driverexperience =  $_POST['dexp1'];
$licensevalidity =  $_POST['dlv1'];

$regno2 =  $_POST['reg2'];
$rcproduced2 =  $_POST['rcp2'];
$make2 =  $_POST['make2'];
$model2 =  $_POST['classi2'];
$vehicleowner2 =  $_POST['oname2'];
$owneraddress2 =  $_POST['oaddress2'];
$type2 =  $_POST['type2'];
$class2 =  $_POST['class2'];
$cloth2 =  $_POST['cloth2'];
$transportvehicletype2 =  $_POST['tt2'];
$toth2 =  $_POST['toth2'];
$stagecarrier2 =  $_POST['st2'];
$mofussil2 =  $_POST['mof2'];
$towntype2 =  $_POST['tow2'];
$permitvalidity2 =  $_POST['pv2'];
$fitnesscertificateissueddate2 =  $_POST['fit2'];
$fitnesscertificatevalidity2 =  $_POST['ft2'];
$pollutioncertificatevalidity2 =  $_POST['pct2'];
$nontransport2 =  $_POST['ntt2'];
$ntoth2 =  $_POST['ntoth2'];
$rcvalidity2 =  $_POST['rc2'];
$pollutioncertificatevalid2 =  $_POST['pcnt2'];
$insuranceavailability2 =  $_POST['ins2'];
$insurancevalidity2 =  $_POST['iv2'];
$insurancecompanydetail2 =  $_POST['ic2'];
$policynumber2 =  $_POST['pn2'];
$manoeuvre2 =  $_POST['ma2'];
$moth2 =  $_POST['moth2'];
$vehicledamagelevel2 =  $_POST['man2'];
$vdoth2 =  $_POST['vdoth2'];
$tradeplateavailability2 =  $_POST['tp2'];
$reason2 =  $_POST['tpoth2'];
$drivername2 =  $_POST['dname2'];
$driveraddress2 =  $_POST['daddress2'];
$gender2 =  $_POST['gen2'];
$dob2 =  $_POST['date2'];
$age2 =  $_POST['age2'];
$driverinjury2 =  $_POST['din2'];
$dinoth2 =  $_POST['dinoth2'];
$drivererror2 =  $_POST['derr2'];
$deoth2 =  $_POST['deoth2'];
$licensedetails2 =  $_POST['l2'];
$licensenumber2 =  $_POST['dl2'];
$classofvehicle2 =  $_POST['cl2'];
$lcloth2 =  $_POST['lcloth2'];
$badgenumber2 =  $_POST['b2'];
$licenseissueddate2 =  $_POST['dob2'];
$driverexperience2 =  $_POST['dexp2'];
$licensevalidity2 =  $_POST['dlv2'];

$male =  $_POST['fmal'];
$female =  $_POST['ffem'];
$children =  $_POST['fchild'];
//$total =  $_POST['ftot'];
$imale =  $_POST['imal'];
$ifemale =  $_POST['ifem'];
$ichildren =  $_POST['ichild'];
//$itotal =  $_POST['itot'];

$male2 =  $_POST['fmal2'];
$female2 =  $_POST['ffem2'];
$children2 =  $_POST['fchild2'];
//$total =  $_POST['ftot'];
$imale2 =  $_POST['imal2'];
$ifemale2 =  $_POST['ifem2'];
$ichildren2 =  $_POST['ichild2'];

    
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

        /*$result = mysqli_query($mysqli, "UPDATE vehicle SET 2vehiclenumber='$vehiclenumber',2rcproduced='$rcproduced',2make='$make',2model='$model',2ownername='$ownername',2owneraddress='$owneraddress',2type='$type' , 2class='$class', 2transportvehicletype='$transportvehicletype', 2permitvalidity='$permitvalidity' , 2pollutioncertificatevalidity='$pollutioncertificatevalidity' , insuranceavailability='$insuranceavailability' , insurancecompanyname='$insurancecompanyname' , 2insurancenumber='$insurancenumber' , 2manoeuvre='$manoeuvre' , 2vehicledamagelevel='$vehicledamagelevel' , 2tradeplateavailability='$tradeplateavailability' , 2roadtestcarried='$roadtestcarried', 2roadtestdescription='$roadtestdescription', 2conditionoftyres='$conditionoftyres' , 2frontwhitereflectortape='$frontwhitereflectortape', 2backwhitereflectortape='$backwhitereflectortape' , 2drivername='$drivername', 2driveraddress='$driveraddress' , 2gender='$gender' , 2dob='$dob',2age='$age', 2mobilenumber='$mobilenumber', 2email='$email' , 2driverinjury='$driverinjury', 2drivererror='$drivererror', 2drivinglicensedetails='$drivinglicensedetails' , 2licensenumber='$licensenumber' , 2numberofinjuredpersons='$numberofinjuredpersons' WHERE crimenumber='$crimenumber'");*/
        
        //redirectig to the display page. In our case, it is index.php
        $result = mysqli_query($mysqli, "UPDATE basic SET (zone,dis,rto,unit,psta,cno,placeofaccident,latitude,longitude,ipc,ioth1,natureofaccident,ioth2,accidentdate,accidenttime,numberofvehiclesinvolved,image,collisiontype,coth,junctiontype,joth,junctioncontrol,jcoth,roadcategory,roth,roadnarrowing,rnoth,lightconditions,loth,climate,cloth,status) VALUES ('$zone', '$dis', '$rto', '$unit', '$psta', '$cno', '$placeofaccident', '$latitude', '$longitude', '$ipc', '$ioth1', '$natureofaccident', '$ioth2', '$accidentdate', '$accidenttime', '$numberofvehiclesinvolved', '$image', '$collisiontype', '$coth', '$junctiontype', '$joth', '$junctioncontrol', '$jcoth', '$roadcategory', '$roth', '$roadnarrowing', '$rnoth', '$lightconditions', '$loth', '$climate', '$cloth', '$status') WHERE id='$id'");
        //header("Location: threemix.php");
        $result1 = mysqli_query($mysqli, "UPDATE vehicle1 SET (cno,regno1,rcproduced,make,model,vehicleowner,owneraddress,type,class,cloth1,transportvehicletype,toth,stagecarrier,mofussil,towntype,permitvalidity,fitnesscertificateissueddate,fitnesscertificatevalidity,pollutioncertificatevalidity,nontransport,ntoth,rcvalidity,pollutioncertificatevalid,insuranceavailability,insurancevalidity,insurancecompanydetail,policynumber,manoeuvre,moth1,vehicledamagelevel,vdoth,tradeplateavailability,reason,drivername,driveraddress,gender,dob,age,driverinjury,dinoth1,drivererror,deoth1,licensedetails,licensenumber,classofvehicle,lcloth1,badgenumber,licenseissueddate,driverexperience,licensevalidity) VALUES ('$cno', '$regno', '$rcproduced', '$make', '$model', '$vehicleowner', '$owneraddress', '$type', '$class', '$cloth1', '$transportvehicletype', '$toth', '$stagecarrier', '$mofussil', '$towntype', '$permitvalidity', '$fitnesscertificateissueddate', '$fitnesscertificatevalidity', '$pollutioncertificatevalidity', '$nontransport', '$ntoth1', '$rcvalidity', '$pollutioncertificatevalid', '$insuranceavailability', '$insurancevalidity', '$insurancecompanydetail', '$policynumber', '$manoeuvre', '$moth1', '$vehicledamagelevel', '$vdoth', '$tradeplateavailability', '$reason', '$drivername', '$driveraddress', '$gender', '$dob', '$age', '$driverinjury', '$dinoth1', '$drivererror', '$deoth1', '$licensedetails', '$licensenumber', '$classofvehicle', '$lcloth1', '$badgenumber', '$licenseissueddate', '$driverexperience', '$licensevalidity') WHERE crimenumber = '$crimenumber'");

        $result2 = mysqli_query($mysqli, "UPDATE vehicle2 SET (cno,regno2,rcproduced,make,model,vehicleowner,owneraddress,type,class,cloth1,transportvehicletype,toth,stagecarrier,mofussil,towntype,permitvalidity,fitnesscertificateissueddate,fitnesscertificatevalidity,pollutioncertificatevalidity,nontransport,ntoth,rcvalidity,pollutioncertificatevalid,insuranceavailability,insurancevalidity,insurancecompanydetail,policynumber,manoeuvre,moth1,vehicledamagelevel,vdoth,tradeplateavailability,reason,drivername,driveraddress,gender,dob,age,driverinjury,dinoth1,drivererror,deoth1,licensedetails,licensenumber,classofvehicle,lcloth1,badgenumber,licenseissueddate,driverexperience,licensevalidity) VALUES ('$cno', '$regno2', '$rcproduced2', '$make2', '$model2', '$vehicleowner2', '$owneraddress2', '$type2', '$class2', '$cloth2', '$transportvehicletype2', '$toth2', '$stagecarrier2', '$mofussil2', '$towntype2', '$permitvalidity2', '$fitnesscertificateissueddate2', '$fitnesscertificatevalidity2', '$pollutioncertificatevalidity2', '$nontransport2', '$ntoth2', '$rcvalidity2', '$pollutioncertificatevalid2', '$insuranceavailability2', '$insurancevalidity2', '$insurancecompanydetail2', '$policynumber2', '$manoeuvre2', '$moth2', '$vehicledamagelevel2', '$vdoth2', '$tradeplateavailability2', '$reason2', '$drivername2', '$driveraddress2', '$gender2', '$dob2', '$age2', '$driverinjury2', '$dinoth2', '$drivererror2', '$deoth2', '$licensedetails2', '$licensenumber2', '$classofvehicle2', '$lcloth2', '$badgenumber2', '$licenseissueddate2', '$driverexperience2', '$licensevalidity2') WHERE crimenumber='$crimenumber'");

        $result3 = mysqli_query($mysqli, "UPDATE fatal1 SET (cno,regno,male,female,children,imale,ifemale,ichildren) VALUES ('$cno', '$regno', '$male', '$female', '$children', '$imale', '$ifemale', '$ichildren') WHERE crimenumber = '$crimenumber'");
   
        $result4 = mysqli_query($mysqli, "UPDATE fatal2 SET (cno,regno,male,female,children,imale,ifemale,ichildren) VALUES ('$cno', '$regno2', '$male2', '$female2', '$children2', '$imale2', '$ifemale2', '$ichildren2') WHERE crimenumber = '$crimenumber'");



}
?>
<?php
//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM basic WHERE crimenumber='$crimenumber'");
$result1 = mysqli_query($mysqli, "SELECT * FROM vehicle1 WHERE crimenumber='$crimenumber'");
$result2 = mysqli_query($mysqli, "SELECT * FROM vehicle2 WHERE crimenumber='$crimenumber'");
$result3 = mysqli_query($mysqli, "SELECT * FROM fatal1 WHERE crimenumber='$crimenumber'");
$result4 = mysqli_query($mysqli, "SELECT * FROM fatal2 WHERE crimenumber='$crimenumber'");
 
while($res = mysqli_fetch_array($result))
{  
$zone =  $res['zone'];
$dis =  $res['dis'];
$rto =  $res['rto'];
$unit =  $res['unit'];
$psta =  $res['psta'];
$cdate =  $res['cdate'];
$cno =  $res['cno'];
$placeofaccident =  $res['lo'];
$latitude =  $res['lati'];
$longitude =  $res['longi'];
$ipc =  $res['ipc'];
$ioth1 =  $res['ioth1'];
$natureofaccident =  $res['noa'];
$ioth2 =  $res['ioth2'];
$accidentdate =  $res['adate'];
$accidenttime =  $res['at'];
$numberofvehiclesinvolved =  $res['novi'];
$status =  $res['status'];

$image = $_FILES['image']['name'];
$target = "img/".basename($image);

$collisiontype =  $res['ctype'];
$coth =  $res['coth'];
$junctiontype =  $res['jtype'];
$joth =  $res['joth'];
$junctioncontrol =  $res['jcon'];
$jcoth =  $res['jcoth'];
$roadcategory =  $res['rcat'];
$roth =  $res['roth'];
$roadnarrowing =  $res['rnar'];
$rnoth =  $res['rnoth'];
$lightconditions =  $res['lcon'];
$loth =  $res['loth'];
$climate =  $res['cli'];
$cloth =  $res['cloth'];

}

while($res1 = mysqli_fetch_array($result1))
{
$regno =  $res1['reg1'];
$rcproduced =  $res1['rcp1'];
$make =  $res1['make1'];
$model =  $res1['classi1'];
$vehicleowner =  $res1['oname1'];
$owneraddress =  $res1['oaddress1'];
$type =  $res1['type1'];
$class =  $res1['class1'];
$cloth1 =  $res1['cloth1'];
$transportvehicletype =  $res1['tt1'];
$toth =  $res1['toth1'];
$stagecarrier =  $res1['st1'];
$mofussil =  $res1['mof1'];
$towntype =  $res1['tow1'];
$permitvalidity =  $res1['pv1'];
$fitnesscertificateissueddate =  $res1['fit1'];
$fitnesscertificatevalidity =  $res1['ft1'];
$pollutioncertificatevalidity =  $res1['pct1'];
$nontransport =  $res1['ntt1'];
$ntoth1 =  $res1['ntoth1'];
$rcvalidity =  $res1['rc1'];
$pollutioncertificatevalid =  $res1['pcnt1'];
$insuranceavailability =  $res1['ins1'];
$insurancevalidity =  $res1['iv1'];
$insurancecompanydetail =  $res1['ic1'];
$policynumber =  $res1['pn1'];
$manoeuvre =  $res1['ma1'];
$moth1 =  $res1['moth1'];
$vehicledamagelevel =  $res1['man1'];
$vdoth =  $res1['vdoth1'];
$tradeplateavailability =  $res1['vp'];
$reason =  $res1['tpoth1'];
$drivername =  $res1['dname1'];
$driveraddress =  $res1['daddress1'];
$gender =  $res1['gen1'];
$dob =  $res1['date1'];
$age =  $res1['age1'];
$driverinjury =  $res1['din1'];
$dinoth1 =  $res1['dinoth1'];
$drivererror =  $res1['derr1'];
$deoth1 =  $res1['deoth1'];
$licensedetails =  $res1['l1'];
$licensenumber =  $res1['dl1'];
$classofvehicle =  $res1['cl1'];
$lcloth1 =  $res1['lcloth1'];
$badgenumber =  $res1['b1'];
$licenseissueddate =  $res1['dob'];
$driverexperience =  $res1['dexp1'];
$licensevalidity =  $res1['dlv1'];

}

while($res2 = mysqli_fetch_array($result2))
{
    $regno2 =  $res2['reg2'];
$rcproduced2 =  $res2['rcp2'];
$make2 =  $res2['make2'];
$model2 =  $res2['classi2'];
$vehicleowner2 =  $res2['oname2'];
$owneraddress2 =  $res2['oaddress2'];
$type2 =  $res2['type2'];
$class2 =  $res2['class2'];
$cloth2 =  $res2['cloth2'];
$transportvehicletype2 =  $res2['tt2'];
$toth2 =  $res2['toth2'];
$stagecarrier2 =  $res2['st2'];
$mofussil2 =  $res2['mof2'];
$towntype2 =  $res2['tow2'];
$permitvalidity2 =  $res2['pv2'];
$fitnesscertificateissueddate2 =  $res2['fit2'];
$fitnesscertificatevalidity2 =  $res2['ft2'];
$pollutioncertificatevalidity2 =  $res2['pct2'];
$nontransport2 =  $res2['ntt2'];
$ntoth2 =  $res2['ntoth2'];
$rcvalidity2 =  $res2['rc2'];
$pollutioncertificatevalid2 =  $res2['pcnt2'];
$insuranceavailability2 =  $res2['ins2'];
$insurancevalidity2 =  $res2['iv2'];
$insurancecompanydetail2 =  $res2['ic2'];
$policynumber2 =  $res2['pn2'];
$manoeuvre2 =  $res2['ma2'];
$moth2 =  $res2['moth2'];
$vehicledamagelevel2 =  $res2['man2'];
$vdoth2 =  $res2['vdoth2'];
$tradeplateavailability2 =  $res2['tp2'];
$reason2 =  $res2['tpoth2'];
$drivername2 =  $res2['dname2'];
$driveraddress2 =  $res2['daddress2'];
$gender2 =  $res2['gen2'];
$dob2 =  $res2['date2'];
$age2 =  $res2['age2'];
$driverinjury2 =  $res2['din2'];
$dinoth2 =  $res2['dinoth2'];
$drivererror2 =  $res2['derr2'];
$deoth2 =  $res2['deoth2'];
$licensedetails2 =  $res2['l2'];
$licensenumber2 =  $res2['dl2'];
$classofvehicle2 =  $res2['cl2'];
$lcloth2 =  $res2['lcloth2'];
$badgenumber2 =  $res2['b2'];
$licenseissueddate2 =  $res2['dob2'];
$driverexperience2 =  $res2['dexp2'];
$licensevalidity2 =  $res2['dlv2'];
}
while($res3 = mysqli_fetch_array($result3))
{
$male =  $res3['fmal'];
$female =  $res3['ffem'];
$children =  $res3['fchild'];
//$total =  $res3['ftot'];
$imale =  $res3['imal'];
$ifemale =  $res3['ifem'];
$ichildren =  $res3['ichild'];
}

while($res3 = mysqli_fetch_array($result3))
{
$male2 =  $res4['fmal2'];
$female2 =  $res4['ffem2'];
$children2 =  $res4['fchild2'];
//$total =  $res4['ftot'];
$imale2 =  $res4['imal2'];
$ifemale2 =  $res4['ifem2'];
$ichildren2 =  $res4['ichild2'];
}

?>

<head>
<title>
ASR New Entry</title>
<link rel="shortcut icon" href="logo_icon.png" />
  <!-- Site made with Mobirise Website Builder v2.3.2, http://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="timedropper.css" rel="stylesheet" type="text/css">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  </head>
<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-6">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <a class="mbr-brand__logo" href="http://www.tn.gov.in/sta/"><img class="mbr-navbar__brand-img mbr-brand__img" alt="" src="assets/images/englogo370x401-112.png"></a>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="http://www.tn.gov.in/sta/">ASR</a></span>
                    </span>
                </div>
              <br><center><span class="mbr-brand__name"><p class="mbr-brand__name text-white" style="margin-left:4cm"><font size="+2">NEW ENTRY</font></p></span></center>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="../../mvihomepage.php">HOME</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="../../loginind.php">LOGOUT</a></li></ul></div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<SCRIPT LANGUAGE="JavaScript">

function goNewWin() {

//***Get what is below onto one line***

//window.open("http://mkce.ac.in/asr/asr.html",'TheNewpop','toolbar=1,
location=1,directories=1,status=1,menubar=1,
//scrollbars=1,resizable=1');

//***Get what is above onto one line***

self.close()

}
</script>
 <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  
   <link rel="stylesheet" href="css/smoothness/jquery-ui.css">
   <script src="js/mini.js" type="text/javascript"></script>
    <script src="js/mini2.js" type="text/javascript"></script>
  <script defer src="js/jquery-1.9.1.js"></script>
   <script defer src="js/jquery-ui.js"></script>
  
  <script defer type="text/javascript">
  $(function() {
    $( '#adate' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
    $( '#idate' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#dor' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#pv1' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#ft1' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#rc1' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  $( '#pct1' ).datepicker({
    constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  $( '#pcnt1' ).datepicker({
    constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
   $( '#pct2' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  $( '#pcnt2' ).datepicker({
    constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
   $( '#pct3' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  $( '#pcnt3' ).datepicker({
    constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
   $( '#pct4' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  $( '#pcnt4' ).datepicker({
    constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  
  
  
   $( '#iv1' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#dlv1' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#pv2' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#ft2' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#rc2' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#iv2' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#dlv2' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#pv3' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
     $( '#dob' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#dob2' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#dob3' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#dob4' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#ft3' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#rc3' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#iv3' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#dlv3' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#pv4' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#ft4' ).datepicker({
     constrainInput: false,
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#rc4' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#iv4' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
   $( '#dlv4' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#fit1' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#fit2' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#fit3' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#fit4' ).datepicker({
     dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  
  
   $( '#date1' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#date2' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#date3' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  $( '#date4' ).datepicker({
     dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
   showOn: "button",
     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
   buttonImageOnly: true
  });
  });
/*  $(document).ready(function() {
  $('#text1').hide();
  $("#check").change(function(){
        $('#text1').show();
            }
  }*/
/*function ageCount() {
    var date1 = new Date();
    var dob = document.getElementById("dob").value;
    var date2 = new Date(dob);
    var pattern = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    //Regex to validate date format (dd-mm-yyyy)       
    if (pattern.test(dob)) {
        var y1 = date1.getFullYear();
        //getting current year            
        var y2 = date2.getFullYear();
        //getting dob year            
        var age = y1 - y2;
        //calculating age                       
        document.getElementById("ageId").value = age;
        doucment.getElementById("ageId").focus ();
        return true;
    } else {
        alert("Invalid date format. Please Input in (dd-mm-yyyy) format!");
        return false;
    }

}*/
  </script>
</body>

<title>ASR</title>
<link rel="shortcut icon" href="logo_icon.png" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="stylesheets/wickedpicker.css">
        <script type="text/javascript" src="src/wickedpicker.js"></script>
<style>

form fieldset h3 {
  color: #026AB0;
text-align :center;             
 }
form fieldset legend {
   color: #000D19;
text-align :center;
 font-size: 40px;
text-shadow: 2px 2px #E5F2FF;            
 }
</style>
<style type="text/css">
 a:hover {
  cursor:hand;
 }
</style>
<script>


function getAge(input) 
{
  var input1 = document.getElementById( 'adate' ).value;
  var input = document.getElementById( 'date1' ).value;
    var today = new Date(input1);
    var birthDate = new Date(input);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('age1').value = age;
}

function getAge2(input) 
{
  var input2 = document.getElementById( 'adate' ).value;
  var input3 = document.getElementById( 'date2' ).value;
    var today = new Date(input2);
    var birthDate = new Date(input3);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('age2').value = age;
}

function getAge3(input) 
{
  var input4 = document.getElementById( 'adate' ).value;
  var input5 = document.getElementById( 'date3' ).value;
    var today = new Date(input4);
    var birthDate = new Date(input5);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('age3').value = age;
}

function getAge4(input) 
{
  var input6 = document.getElementById( 'adate' ).value;
  var input7 = document.getElementById( 'date4' ).value;
    var today = new Date(input6);
    var birthDate = new Date(input7);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('age4').value = age;
}


function getAge5(input) 
{
  var input7 = document.getElementById( 'adate' ).value;
  var input8 = document.getElementById( 'dob' ).value;
    var today = new Date(input7);
    var birthDate = new Date(input8);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('dexp1').value = age;
}

function getAge6(input) 
{
  var input9 = document.getElementById( 'adate' ).value;
  var input10 = document.getElementById( 'dob2' ).value;
    var today = new Date(input9);
    var birthDate = new Date(input10);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('dexp2').value = age;
}


function getAge7(input) 
{
  var input11 = document.getElementById( 'adate' ).value;
  var input12 = document.getElementById( 'dob3' ).value;
    var today = new Date(input11);
    var birthDate = new Date(input12);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('dexp3').value = age;
}

function getAge8(input) 
{
  var input13 = document.getElementById( 'adate' ).value;
  var input14 = document.getElementById( 'dob4' ).value;
    var today = new Date(input13);
    var birthDate = new Date(input14);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
  document.getElementById('dexp4').value = age;
}




function validateForm() {
    var x = document.forms["myForm"]["dl1"].value;
    if (x == null || x == "" || x.length > 30) {
        alert("Please enter Proper License Number");
        return false;
    }
}

function validateForm9() {
    var x = document.forms["myForm"]["dl2"].value;
    if (x == null || x == "" || x.length > 30) {
        alert("Please enter Proper License Number");
        return false;
    }
}

function validateForm10() {
    var x = document.forms["myForm"]["dl3"].value;
    if (x == null || x == "" || x.length > 30) {
        alert("Please enter Proper License Number");
        return false;
    }
}

function validateForm11() {
    var x = document.forms["myForm"]["dl4"].value;
    if (x == null || x == "" || x.length > 30) {
        alert("Please enter Proper License Number");
        return false;
    }
}


function validateForm1() {
    var x1 = document.forms["myForm"]["idate"].value;
    if (x1 == null || x1 == "" || x1.length != 10 ) {
        alert("Please enter Proper Inspection Date");
        return false;
    }
}

function validateForm2() {
    var x1 = document.forms["myForm"]["itime"].value;
    if (x1 == null || x1 == "" || x1.length < 5 ) {
        alert("Please enter Proper Inspection Time");
        return false;
    }
}
 
function validateForm3() {
    var x1 = document.forms["myForm"]["cno"].value;
    if (x1 == null || x1 == "" || x1.length > 7 ) {
        alert("Please enter Proper Crime No");
        return false;
    }
}

function validateForm4() {
    var x1 = document.forms["myForm"]["ad"].value;
    if (x1 == null || x1 == "" || x1.length != 10 ) {
        alert("Please enter Proper Accident Date");
        return false;
    }
}


function validateForm5() {
    var x1 = document.forms["myForm"]["at"].value;
    if (x1 == null || x1 == "" || x1.length < 5 ) {
        alert("Please enter Proper Accident Time");
        return false;
    }
}

function validateForm6() {
    var x = document.forms["myForm"]["reg1"].value;
    if (x == null || x == "" || x.length > 18) {
        alert("Please enter Proper Registration Number");
        return false;
    }
}

function validateForm7() {
    var x = document.forms["myForm"]["pv1"].value;
    if (x == null || x == "" || x.length != 10) {
        alert("Please enter Proper Permit Validity");
        return false;
    }
}



function validateForm8() {
    var x = document.forms["myForm"]["iv1"].value;
    if (x == null || x == "" || x.length != 10) {
        alert("Please enter Proper Insurance Validity");
        return false;
    }
}
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }

function openWindow() {
    window.open("http://www.mapcoordinates.net/");
}




var stateObject = {

  "Trichy":{
  "Ariyalur": {
        "Ariyalur":["Ariyalur(R.T.O)"]
    },
  "Karur": {
        "Karur":["Karur(R.T.O)", "Aravakurichi(U.O)","Manmangalam(U.O)","kulithalai(U.O)"]
    },
    "Perambalur": {
        "Perambalur":["Permabalur(R.T.O)"]
    },
    "Tiruchirapalli": {
        "Srirangam": ["Lalgudi(U.O)","Musiri(U.O)","Srirangam(R.T.O)","Thuraiyur(U.O)"],
        "Tiruchirapalli(East)": ["Thiruverumbur(U.O)","Tiruchirapalli(East)(R.T.O)"],
        "Tiruchirapalli(West)": ["Manapparai(U.O)","Tiruchirapalli(West)(R.T.O)"]
    }
 },
 "Tanjore":{
    "Thanjavur": {
        "Thanjavur": ["Pattukottai(U.O)","Thanjavur(R.T.O)"],
        "Kumbakonam": ["Kumbakonam(R.T.O)"]
    },
  "Thiruvarur": {
        "Thiruvarur": ["Thiruvarur(R.T.O)","Mannargudi(U.O)","Thiruthuraipoondi(U.O)"]
    },
    "Nagapattinam": {
        "Nagapattinam":["Nagapattinam(R.T.O)"],
        "Mayiladudurai":["Mayiladudurai(R.T.O)","Sirkali(U.O)"]
    },
    "Pudukkottai": {
        "Pudukkottai":["Pudukkottai(R.T.O)","Illuppur(U.O)","Aranthangi(U.O)"]
    }
 }, 
 "Tirunelveli":{
    "Tuticorin": {
        "Tuticorin": ["Tuticorin(R.T.O)","Tiruchendur(U.O)","Kovilpatti(U.O)"]
    },
    "Tirunelveli": {
        "Tirunelveli": ["Tirunelveli(R.T.O)","Vallioor(U.O)"],
        "Tenkasi": ["Ambasamuthiram(U.O)","Tenkasi(R.T.O)"],
        "Sankarankoil": ["Sankarankoil(R.T.O)"]
    },
    "Kanyakumari": {
        "Nagercoil":["Nagercoil(R.T.O)"],
        "Marthandam":["Marthandam(R.T.O)"]
    }
 },
 "Virudhunagar":{
    "Virudhunagar": {
        "Srivilliputhur": ["Srivilliputhur(R.T.O)"],
    "Sivakasi": ["Sivakasi(R.T.O)"],
        "Virudhunagar": ["Aruppukottai(U.O)","Sivakasi(U.O)","Virudhunagar(R.T.O)"]
    },
    "Sivagangai": {
        "Sivagangai": ["Karaikudi(U.O)","Sivangangai(R.T.O)"]
    },
    "Ramanathapuram": {
        "Ramanathapuram": ["Ramanathapuram(R.T.O)","Paramakudi(U.O)"]
    }
 },
 "Villupuram":{
    "Villupuram": {
        "Tindivanam": ["Gingee(U.O)","Tindivanam(R.T.O)"],
    "Ulundurpet":["Ulundurpet(R.T.O)","Kallakurichi(U.O)"],
        "Villupuram": ["Villupuram(R.T.O)"],
    "Vaniyambadi": ["Vaniyambadi(R.T.O)"],
  },
    "Tiruvannamalai": {
        "Tiruvannamalai": ["Arani(U.O)","Cheyyar(U.O)","Tiruvannamalai(R.T.O)"]
    },
    "Cuddalore": {
        "Cuddalore":["Cuddalore(R.T.O)","Panruti(U.O)"],
        "Chidambaram":["Chidambaram(R.T.O)","Vriddhachalam(U.O)","Neyveli(U.O)"]
    }
 },
 "Vellore":{
    "Krishnagiri": {
        "Krishnagiri":["Krishnagiri(R.T.O)"],
        "Hosur":["Hosur(R.T.O)"]
    },
    "Vellore": {
        "Ranipet": ["Arakonam(U.O)","Ranipet(R.T.O)"],
        "Vellore": ["Gudiyatham(U.O)","Vellore(R.T.O)"],
        "Vaniyambadi": ["Thirupattur(U.O)","Ambur(U.O)","Vaniyambadi(R.T.O)"]
    }
 },
 "Salem":{
    "Dharmapuri": {
        "Dharmapuri":["Dharmapuri(R.T.O)","Harur(U.O)","Palacode(U.O)"]
    },
    "Salem": {
        "Attur":["Attur(R.T.O)","Valapadi(U.O)"],
        "Salem(East)": ["Salem(East)(R.T.O)"],
        "Salem(South)": ["Salem(South)(R.T.O)"],
        "Salem(West)": ["Omalur(U.O)","Salem(West)(R.T.O)"],
        "Sangari": ["Mettur(U.O)","Sangari(R.T.O)"]
    }
 },
 "Erode":{
    "Erode": {
        "Perundurai":["Perundurai(R.T.O)"],
        "Gobichettipalayam":["Gobichettipalayam(R.T.O)","Bhavani(U.O)","Sathyamangalam(U.O)"],
        "Erode(East)":["Erode(East)(R.T.O)"],
        "Erode(West)":["Erode(West)(R.T.O)"]
    },
    "Namakkal": {
        "Namakkal(North)":["Namakkal(North)(R.T.O)","Rasipuram(U.O)"],
        "Namakkal(South)":["Namakkal(South)(R.T.O)","Paramathi(U.O)"],
        "Tiruchencode":["Tiruchencode(R.T.O)"]
    }
 },
 "Chennai(North)":{
     "Tiruvallur": {
        "Ambattur": ["Ambattur(R.T.O)"],
        "Poonamalle": ["Poonamalle(R.T.O)"],
        "Redhills": ["Gumidipoondi(U.O)","Redhills(R.T.O)"],
        "Tiruvallur": ["Tiruvallur(R.T.O)","Thiruthani(U.O)"]
    },
    "Chennai": {
        "Chennai(Central)":["Chennai(Central)(R.T.O)"],
        "Chennai(North-West)":["Chennai(North-West)(R.T.O)"],
        "Chennai(North-East)":["Chennai(North-East)(R.T.O)"],
        "Chennai(East)":["Chennai(East)(R.T.O)"],
    "Chennai(North)":["Chennai(North)(R.T.O)"]
    }
 },
 "Chennai(South)":{
    "Kancheepuram": {
        "Kancheepuram":["Kancheepuram(R.T.O)","Sriperumbudur(U.O)"],
        "Chengalpattu":["Chengalpattu(R.T.O)","Madurantakam(U.O)"],
        "Tambaram":["Tambaram(R.T.O)"],
        "Meenambakkam":["Meenambakkam(R.T.O)"],
        "Kundrathur":["Kundrathur(R.T.O)"]
    },
    "Chennai": {
        "Chennai(South-East)":["Chennai(South-East)(R.T.O)"],
        "Chennai(South-West)":["Chennai(South-West)(R.T.O)"],
        "Chennai(South)":["Chennai(South)(R.T.O)"],
        "Chennai(West)":["Chennai(West)(R.T.O)"],
        "Sholinganallur":["Sholinganallur(R.T.O)"]
    }
 },
 "Madurai":{
    "Dindigul": {
        "Dindigul":["Dindigul(R.T.O)","Palani(U.O)","Batalagundu(U.O)","Vadasandur(U.O)","Ottanchatram(U.O)"]
    },
    "Madurai": {
        "Madurai(Central)":["Madurai(Central)(R.T.O)"],
        "Madurai(North)":["Madurai(North)(R.T.O)","Melur(U.O)","Vadipatti(U.O)"],
        "Madurai(South)":["Madurai(South)(R.T.O)","Thirumangalam(U.O)","Usilampatti(U.O)"]
    },
    "Theni": {
        "Theni": ["Theni(R.T.O)","Uthamapalayam(U.O)"]
    }
 },
 "Coimbatore":{
    "Coimbatore": {
        "Mettupalayam":["Mettupalayam(R.T.O)"],
        "Coimbatore(South)":["Coimbatore(South)(R.T.O)","Sulur(U.O)"],
        "Coimbatore(west)":["Coimbatore(West)(R.T.O)"],
        "Coimbatore(North)":["Coimbatore(North)(R.T.O)"],
        "Coimbatore(Central)":["Coimbatore(Central)(R.T.O)"],
        "Pollachi":["Pollachi(R.T.O)","Valparai(U.O)"]
    },
    "Tiruppur": {
        "Dharapuram": ["Dharapuram(R.T.O)","Udumalpet(U.O)"],
        "Tiruppur(North)": ["Avinashi(U.O)","Tiruppur(North)(R.T.O)"],
        "Tiruppur(South)": ["Kangayam(U.O)","Tiruppur(South)(R.T.O)"]
    },
    "Nilgiris": {
        "Ooty":["Gudalur(U.O)","Ooty(R.T.O)"]
    }
 }
}

window.onload = function () {
    var zone = document.getElementById("zone"),
        dis = document.getElementById("dis"),
        rto = document.getElementById("rto"),
        unit = document.getElementById("unit");
    for (var zone1 in stateObject) {
        zone.options[zone.options.length] = new Option(zone1, zone1);
    }
    zone.onchange = function () {
        dis.length = 1;
    rto.length = 1; // remove all options bar first
        unit.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        for (var dis1 in stateObject[this.value]) {
            dis.options[dis.options.length] = new Option(dis1, dis1);
        }
    }
    zone.onchange();
  dis.onchange = function () {
    rto.length = 1; // remove all options bar first
        unit.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        for (var rto1 in stateObject[zone.value][this.value]) {
            rto.options[rto.options.length] = new Option(rto1, rto1);
        }
    }
  // reset in case page is reloaded
  dis.onchange();
    rto.onchange = function () {
        unit.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        var unit1 = stateObject[zone.value][dis.value][this.value];
        for (var i = 0; i < unit1.length; i++) {
            unit.options[unit.options.length] = new Option(unit1[i], unit1[i]);
        }
    }
}


/*$(document).ready(function(){
    $('#ln1').change(function(){
        if(this.checked)
            $('#ldd1').show();
        else
            $('#ldd1').hide();

    });
});


$(document).ready(function(){
    $('#ln2').change(function(){
        if(this.checked)
            $('#ldd2').show();
        else
            $('#ldd2').hide();

    });
});

$(document).ready(function(){
    $('#ln3').change(function(){
        if(this.checked)
            $('#ldd3').show();
        else
            $('#ldd3').hide();

    });
});


$(document).ready(function(){
    $('#ln4').change(function(){
        if(this.checked)
            $('#ldd4').show();
        else
            $('#ldd4').hide();

    });
});
*/

$(document).ready(function(){
    $(".f").keyup(function(){
          var val1 = +$("#fmal").val();
          var val2 = +$("#ffem").val();
      var val3 = +$("#fchild").val();
          $("#ftot").val(val1+val2+val3);
   });
});

$(document).ready(function(){
    $(".fo").keyup(function(){
          var val1 = +$("#imal").val();
          var val2 = +$("#ifem").val();
      var val3 = +$("#ichild").val();
          $("#itot").val(val1+val2+val3);
   });
});
$(document).ready(function(){
    $('#fat1').change(function(){
        if(this.checked)
            $('#ioo').show();
        else
            $('#ioo').hide();

    });
});
$(document).ready(function(){
    $('#inj1').change(function(){
        if(this.checked)
            $('#io').show();
        else
            $('#io').hide();

    });
});


$(document).ready(function(){
    $('#ch2').change(function(){
        if(this.checked)
            $('#chh2').hide();
      
        else
            $('#chh2').show();
    

    });
});

$(document).ready(function(){
    $('#ch2').change(function(){
        if(this.checked)
            $('#fv2').hide();
      
        else
            $('#fv2').show();
    

    });
});

$(document).ready(function(){
    $('#ch2').change(function(){
        if(this.checked)
            $('#inv2').hide();
      
        else
            $('#inv2').show();
    

    });
});

$(document).ready(function(){
    $('#ch3').change(function(){
        if(this.checked)
            $('#chh3').hide();
       
        else
            $('#chh3').show();
     
    });
});

$(document).ready(function(){
    $('#ch3').change(function(){
        if(this.checked)
            $('#fv3').hide();
      
        else
            $('#fv3').show();
    

    });
});

$(document).ready(function(){
    $('#ch3').change(function(){
        if(this.checked)
            $('#inv3').hide();
      
        else
            $('#inv3').show();
    

    });
});



$(document).ready(function(){
    $('#ch4').change(function(){
        if(this.checked)
            $('#chh4').hide();
      
        else
            $('#chh4').show();
    

    });
});

$(document).ready(function(){
    $('#ch4').change(function(){
        if(this.checked)
            $('#fv4').hide();
      
        else
            $('#fv4').show();
    

    });
});

$(document).ready(function(){
    $('#ch4').change(function(){
        if(this.checked)
            $('#inv4').hide();
      
        else
            $('#inv4').show();
    

    });
});



/*$(document).ready(function(){
    $('#ins1').change(function(){
        if(this.checked)
            $('#insur1').show();
        else
            $('#insur1').hide();

    });
});

$(document).ready(function(){
    $('#ins2').change(function(){
        if(this.checked)
            $('#insur2').show();
        else
            $('#insur2').hide();

    });
});

$(document).ready(function(){
    $('#ins3').change(function(){
        if(this.checked)
            $('#insur3').show();
        else
            $('#insur3').hide();

    });
});

$(document).ready(function(){
    $('#ins4').change(function(){
        if(this.checked)
            $('#insur4').show();
        else
            $('#insur4').hide();

    });
});

*/


$(document).ready(function(){
    $('#fat2').change(function(){
        if(this.checked)
            $('#ioo2').show();
        else
            $('#ioo2').hide();

    });
});
$(document).ready(function(){
    $('#inj2').change(function(){
        if(this.checked)
            $('#io2').show();
        else
            $('#io2').hide();

    });
});

$(document).ready(function(){
    $('#fat3').change(function(){
        if(this.checked)
            $('#ioo3').show();
        else
            $('#ioo3').hide();

    });
});
$(document).ready(function(){
    $('#inj3').change(function(){
        if(this.checked)
            $('#io3').show();
        else
            $('#io3').hide();

    });
});

$(document).ready(function(){
    $('#fat4').change(function(){
        if(this.checked)
            $('#ioo4').show();
        else
            $('#ioo4').hide();

    });
});
$(document).ready(function(){
    $('#inj4').change(function(){
        if(this.checked)
            $('#io4').show();
        else
            $('#io4').hide();

    });
});



$(document).ready(function(){
    $('#opch1').change(function(){
        if(this.checked)
    {
            $('#opch11').show();
            $('#opini').hide();
    }
        else{
            $('#opch11').hide();
            $('#opini').show();
    }

    });
});

$(document).ready(function(){
    $('#opch2').change(function(){
        if(this.checked)
    {
            $('#opch12').show();
            $('#opini2').hide();
    }
        else{
            $('#opch12').hide();
            $('#opini2').show();
    }

    });
});

$(document).ready(function(){
    $('#opch3').change(function(){
        if(this.checked)
    {
            $('#opch13').show();
            $('#opini3').hide();
    }
        else{
            $('#opch13').hide();
            $('#opini3').show();
    }

    });
});

$(document).ready(function(){
    $('#opch4').change(function(){
        if(this.checked)
    {
            $('#opch14').show();
            $('#opini4').hide();
    }
        else{
            $('#opch14').hide();
            $('#opini4').show();
    }

    });
});




$(document).ready(function(){
    $(".f2").keyup(function(){
          var val1 = +$("#fmal2").val();
          var val2 = +$("#ffem2").val();
      var val3 = +$("#fchild2").val();
          $("#ftot2").val(val1+val2+val3);
   });
});

$(document).ready(function(){
    $(".fo2").keyup(function(){
          var val1 = +$("#imal2").val();
          var val2 = +$("#ifem2").val();
      var val3 = +$("#ichild2").val();
          $("#itot2").val(val1+val2+val3);
   });
});


$(document).ready(function(){
    $(".f3").keyup(function(){
          var val1 = +$("#fmal3").val();
          var val2 = +$("#ffem3").val();
      var val3 = +$("#fchild3").val();
          $("#ftot3").val(val1+val2+val3);
   });
});

$(document).ready(function(){
    $(".fo3").keyup(function(){
          var val1 = +$("#imal3").val();
          var val2 = +$("#ifem3").val();
      var val3 = +$("#ichild3").val();
          $("#itot3").val(val1+val2+val3);
   });
});



$(document).ready(function(){
    $(".f4").keyup(function(){
          var val1 = +$("#fmal4").val();
          var val2 = +$("#ffem4").val();
      var val3 = +$("#fchild4").val();
          $("#ftot4").val(val1+val2+val3);
   });
});

$(document).ready(function(){
    $(".fo4").keyup(function(){
          var val1 = +$("#imal4").val();
          var val2 = +$("#ifem4").val();
      var val3 = +$("#ichild4").val();
          $("#itot4").val(val1+val2+val3);
   });
});



$(document).ready(function(){
$('#novi').on('change', function() {
      if ( this.value == '1')
      {
        $("#fv1").show();
        $("#inv1").show();
        $("#fv2").hide();
        $("#inv2").hide();
        $("#fv3").hide();
        $("#inv3").hide();
        $("#fv4").hide();
        $("#inv4").hide();
       
      }
       else if(this.value=='2')
      {
        $("#fv1").show();
        $("#inv1").show();
        $("#fv2").show();
        $("#inv2").show();
        $('#reg2').show();
        $("#fv3").hide();
        $("#inv3").hide();
        $("#fv4").hide();
        $("#inv4").hide();

      }
       else if(this.value=='3')
      {
        $("#fv1").show();
        $("#inv1").show();
        $("#fv2").show();
        $("#inv2").show();
        $('#reg2').show();
        $("#fv3").show();
        $("#inv3").show();
        $('#reg3').show();
        $("#fv4").hide();
        $("#inv4").hide();

      }
        else if(this.value=='4')
      {
        $("#fv1").show();
        $("#inv1").show();
        $("#fv2").show();
        $("#inv2").show();
        $('#reg2').show();
        $("#fv3").show();
        $("#inv3").show();
        $('#reg3').show();
        $("#fv4").show();
        $("#inv4").show();
        $('#reg4').show();

      }
});
});


$(document).ready(function(){
$('#ldd3').hide();
$('#ldd4').hide();
$('#mech1').hide();
$('#mech2').hide();
$('#mech3').hide();
$('#mech4').hide();
   $('#ldd2').hide();
    $("#v1").show();
       $("#tpoth1").hide();
        $("#v2").hide();
        $("#v3").hide();
        $("#v4").hide();
        $("#fv2").hide();
        $("#inv2").hide();
        $("#fv3").hide();
        $("#inv3").hide();
        $("#fv3").hide();
     $("#chh2").show();
             $("#chh3").show();
             $("#chh4").show();
        $("#dspeed1").hide();
        $("#inv4").hide();
        $("#fv4").hide();

       $("#ioth1").hide();


        $("#dspeoth1").hide();

        $("#dspeed2").hide();

        $("#dspeoth2").hide();
        $("#dspeed3").hide();

        $("#dspeoth3").hide();
        $("#dspeed4").hide();

        $("#dspeoth4").hide();


        $("#dabs1").hide();

        $("#daboth1").hide();

       $("#tyoth1").hide();

      
$("#tyoth2").hide();
$("#tyoth3").hide();
$("#tyoth4").hide();


        $("#dabs2").hide();

        $("#daboth2").hide();
            $("#tpoth2").hide();
        $("#dabs3").hide();

        $("#daboth3").hide();
            $("#tpoth3").hide();
        $("#dabs4").hide();

        $("#daboth4").hide();
            $("#tpoth4").hide();

 $("#dse1").hide();
 $("#dhe1").hide();
 $("#dfu1").hide();
 $("#dru1").hide();
 $("#dlp1").hide();
 
 
 $("#dse2").hide();
 $("#dhe2").hide();
 $("#dfu2").hide();
 $("#dru2").hide();
 $("#dlp2").hide();
 
 $("#dse3").hide();
 $("#dhe3").hide();
 $("#dfu3").hide();
 $("#dru3").hide();
 $("#dlp3").hide();
 
 $("#dse4").hide();
 $("#dhe4").hide();
 $("#dfu4").hide();
 $("#dru4").hide();
 $("#dlp4").hide();
 
 
 
 
 
       $("#insur1").hide();
       
       $("#insur2").hide();
       
       $("#insur3").hide();
       
       $("#insur4").hide();
      
       $("#rtcroth1").hide();
       $("#rtcfoth1").hide();      
             $("#rtceoth1").hide();
              $("#rtcsoth1").hide();
     
       $("#rtcroth1y").hide();
       $("#rtcfoth1y").hide();       
             $("#rtceoth1y").hide();
              $("#rtcsoth1y").hide();
        $("#stee11").hide();
          $("#rtcroth1z").hide();
       $("#rtcfoth1z").hide();       
             $("#rtceoth1z").hide();
              $("#rtcsoth1z").hide();
     
      $("#rtcroth2").hide();
       $("#rtcfoth2").hide();      
             $("#rtceoth2").hide();
              $("#rtcsoth2").hide();
     
       $("#rtcroth2y").hide();
       $("#rtcfoth2y").hide();       
             $("#rtceoth2y").hide();
              $("#rtcsoth2y").hide();
         $("#stee12").hide();
          $("#rtcroth2z").hide();
       $("#rtcfoth2z").hide();       
             $("#rtceoth2z").hide();
              $("#rtcsoth2z").hide();
     
     
       $("#rtcroth3").hide();
       $("#rtcfoth3").hide();      
             $("#rtceoth3").hide();
              $("#rtcsothy").hide();
     
       $("#rtcroth3y").hide();
       $("#rtcfoth3y").hide();       
             $("#rtceoth3y").hide();
              $("#rtcsoth3y").hide();
        $("#stee13").hide();
          $("#rtcroth3z").hide();
       $("#rtcfoth3z").hide();       
             $("#rtceoth3z").hide();
              $("#rtcsoth3z").hide();
     
     $("#rtcroth4").hide();
       $("#rtcfoth4").hide();      
             $("#rtceoth4").hide();
              $("#rtcsoth4").hide();
     
          $("#rtcroth4y").hide();
       $("#rtcfoth4y").hide();       
             $("#rtceoth4y").hide();
              $("#rtcsoth4y").hide();
        $("#stee14").hide();
        
          $("#rtcroth4z").hide();
       $("#rtcfoth4z").hide();       
             $("#rtceoth4z").hide();
              $("#rtcsoth4z").hide();

    
    
    
    
    
    
    

      
  
  

          $("#coth").hide();


 $("#io").hide();
$("#ioo").hide();
        $("#io2").hide();
        $("#ioo2").hide();
        $("#io3").hide();
        $("#ioo3").hide();
        $("#io4").hide();
        $("#ioo4").hide();
  $("#noth").hide();
  $("#jcoth").hide();
   $("#ntoth1").hide();
  $("#joth").hide();
 $("#roth").hide();
  $("#rnoth").hide();
  $("#loth").hide();
  $("#cloth").hide();
  $("#coth").hide();
  $("#moth1").hide();
  $("#moth2").hide();
  $("#moth3").hide();
  $("#moth4").hide();

  $("#lcloth1").hide();
  $("#lcloth2").hide();
  $("#lcloth3").hide();
  $("#lcloth4").hide();

$("#fsoth").hide();

  $("#cloth1").hide();
  $("#cloth2").hide();
   $("#cloth3").hide();
   $("#cloth4").hide();  
  


   $("#vdoth1").hide();
$("#dinoth1").hide();
  $("#dinoth2").hide();
  $("#dinoth3").hide();
  $("#dinoth4").hide();
  
  $("#deoth1").hide();
 $("#vdoth2").hide();
    $("#deoth2").hide();
$("#vdoth3").hide();
    $("#deoth3").hide();
$("#vdoth4").hide();
    $("#deoth4").hide();
 
$("#ldd1").hide();

 $("#fsoth2").hide();
  $("#fpoth2").hide();
 $("#faoth2").hide();
 $("#fsoth3").hide();
  $("#fpoth3").hide();
 $("#faoth3").hide();
$("#fsoth4").hide();
            $('#opch11').hide();
       $('#opch12').hide();
        $('#opch13').hide();
         $('#opch14').hide();
  $("#fpoth4").hide();
 $("#faoth4").hide();
     $("#fsoth").hide();
  $("#fpoth").hide();
 $("#faoth").hide();

$("#isoth2").hide();
      $("#ipoth2").hide();
 $("#iaoth2").hide();

$("#isoth3").hide();
      $("#ipoth3").hide();
 $("#iaoth3").hide();

$("#isoth4").hide();
      $("#ipoth4").hide();
 $("#iaoth4").hide();


 $("#isoth").hide();
      $("#ipoth").hide();
 $("#iaoth").hide();
 $("#trans1").show();
             $("#nontrans1").hide();
 $("#tt1").show();
  $("#dst1").hide();
                 $("#toth1").hide();
 $("#dmof1").hide(); $("#dtow1").hide();

    //To be Entered
    var novit1='';
    var ipc1='';
    if(ipc1=='304A'||ipc1=='279,304A'||ipc1=='279,337,304A'||ipc1=='Others')
    {
      if(novit1=='1'||novit1==1)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").hide();
          $("#inv2").hide();
          $("#fv3").hide();
          $("#inv3").hide();
          $("#fv4").hide();
          $("#inv4").hide();
        }
        else if(novit1=='2'||novit1==2)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").show();
          $("#inv2").show();
          $("#fv3").hide();
          $("#inv3").hide();
          $("#fv4").hide();
          $("#inv4").hide();
        }
        else if(novit1=='3'||novit1==3)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").show();
          $("#inv2").show();
          $("#fv3").show();
          $("#inv3").show();
          $("#fv4").hide();
          $("#inv4").hide();
        }
        else if(novit1=='4'||novit1==4)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").show();
          $("#inv2").show();
          $("#fv3").show();
          $("#inv3").show();
          $("#fv4").show();
          $("#inv4").show();
        }
        else
        {
          $("#fv1").hide();
          $("#inv1").hide();
          $("#fv2").hide();
          $("#inv2").hide();
          $("#fv3").hide();
          $("#inv3").hide();
          $("#fv4").hide();
          $("#inv4").hide();
        }
    }
    else if(ipc1=='279')
    {
          $("#fv1").hide();
          $("#inv1").hide();
          $("#fv2").hide();
          $("#inv2").hide();
          $("#fv3").hide();
          $("#inv3").hide();
          $("#fv4").hide();
          $("#inv4").hide();
    }
    else
    {
      if(novit1=='1'||novit1==1)
        {
          $("#inv1").show();
          $("#inv2").hide();
          $("#inv3").hide();
          $("#inv4").hide();
          $("#fv1").hide();
          $("#fv2").hide();
          $("#fv3").hide();
          $("#fv4").hide();
        }
        else if(novit1=='2'||novit1==2)
        {
          $("#inv1").show();
          $("#inv2").show();
          $("#inv3").hide();
          $("#inv4").hide();
          $("#fv1").hide();
          $("#fv2").hide();
          $("#fv3").hide();
          $("#fv4").hide();
        }
        else if(novit1=='3'||novit1==3)
        {
          $("#inv1").show();
          $("#inv2").show();
          $("#inv3").show();
          $("#inv4").hide();
          $("#fv1").hide();
          $("#fv2").hide();
          $("#fv3").hide();
          $("#fv4").hide();
        }
        else if(novit1=='4'||novit1==4)
        {
          $("#inv1").show();
          $("#inv2").show();
          $("#inv3").show();
          $("#inv4").show();
          $("#fv1").hide();
          $("#fv2").hide();
          $("#fv3").hide();
          $("#fv4").hide();
        }
        else
        {
          $("#fv1").hide();
          $("#inv1").hide();
          $("#fv2").hide();
          $("#inv2").hide();
          $("#fv3").hide();
          $("#inv3").hide();
          $("#fv4").hide();
          $("#inv4").hide();
        }
    }
    if(novit1=='1'||novit1==1)
    {
      $("#v1").show();
      $("#v2").hide();
      $("#v3").hide();
      $("#v4").hide();
    }
    else if(novit1=='2'||novit1==2)
    {
      $("#v1").show();
      $("#v2").show();
      $("#v3").hide();
      $("#v4").hide();
    }
    else if(novit1=='3'||novit1==3)
    {
      $("#v1").show();
      $("#v2").show();
      $("#v3").show(); 
      $("#v4").hide(); 
    }
    else if(novit1=='4'||novit1==4)
    {
      $("#v1").show();
      $("#v2").show();
      $("#v3").show(); 
      $("#v4").show(); 
    }
    else
    {
      $("#v1").hide();
      $("#v2").hide();
      $("#v3").hide();
      $("#v4").hide();
    }
        
    /////

    $('#novi').on('change', function() {
      if ( this.value == '1')
      {
        $("#v1").show();
        $("#v2").hide();
        $("#v3").hide();
        $("#v4").hide();
      }
      else if(this.value=='2')
      {
        $("#v1").show();
        $("#v2").show();
        $("#v3").hide();
        $("#v4").hide();
 $("#trans2").show();
            $("#nontrans2").hide();
 $("#dst2").hide();
            $("#toth2").hide();
 $("#dmof2").hide(); $("#dtow2").hide();
$("#ntoth2").hide();
      
      }
     else if(this.value=='3')
      {
        $("#v1").show();
        $("#v2").show();
        $("#v3").show(); 
        $("#v4").hide(); 
      
 $("#trans2").show();
             $("#nontrans2").hide();
 $("#dst2").hide();
                 $("#toth2").hide();
 $("#dmof2").hide(); $("#dtow2").hide();
$("#ntoth2").hide();

$("#trans3").show();
             $("#nontrans3").hide();
 $("#dst3").hide();
                 $("#toth3").hide();
 $("#dmof3").hide(); $("#dtow3").hide();
$("#ntoth3").hide();
 
      }
      else
      {
        $("#v1").show();
        $("#v2").show();
        $("#v3").show(); 
        $("#v4").show(); 
      
 $("#trans2").show();
             $("#nontrans2").hide();
 $("#dst2").hide();
                 $("#toth2").hide();
 $("#dmof2").hide(); $("#dtow2").hide();
$("#ntoth2").hide();

$("#trans3").show();
             $("#nontrans3").hide();
 $("#dst3").hide();
                 $("#toth3").hide();
 $("#dmof3").hide(); $("#dtow3").hide();
$("#ntoth3").hide();

$("#trans4").show();
             $("#nontrans4").hide();
 $("#dst4").hide();
                 $("#toth4").hide();
 $("#dmof4").hide(); $("#dtow4").hide();
$("#ntoth4").hide();
 
      }    

     
    });
});

$(document).ready(function(){
    $('#ipc').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ioth1").show();
    
            }
            else 
            {
            $("#ioth1").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#ins1').on('change', function() {
            if ( this.value == 'Available')
            {
             $('#insur1').show();
    
            }
            else 
            {
            $('#insur1').hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#ins2').on('change', function() {
            if ( this.value == 'Available')
            {
             $('#insur2').show();
    
            }
            else 
            {
            $('#insur2').hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#ins3').on('change', function() {
            if ( this.value == 'Available')
            {
             $('#insur3').show();
    
            }
            else 
            {
            $('#insur3').hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ins4').on('change', function() {
            if ( this.value == 'Available')
            {
             $('#insur4').show();
    
            }
            else 
            {
            $('#insur4').hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#l1').on('change', function() {
            if ( this.value == 'Produced')
            {
             $('#ldd1').show();
    
            }
            else 
            {
            $('#ldd1').hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#l2').on('change', function() {
            if ( this.value == 'Produced')
            {
             $('#ldd2').show();
    
            }
            else 
            {
            $('#ldd2').hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#l3').on('change', function() {
            if ( this.value == 'Produced')
            {
             $('#ldd3').show();
    
            }
            else 
            {
            $('#ldd3').hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#l4').on('change', function() {
            if ( this.value == 'Produced')
            {
             $('#ldd4').show();
    
            }
            else 
            {
            $('#ldd4').hide();
          
            }
      
          });
});
     
  $(document).ready(function(){
    $('#ipc').on('change', function() {
            if ( this.value == '279')
            {
             $("#noa").hide();
    
            }
            else 
            {
            $("#noa").show();
          
            }
      
          });
});       


$(document).ready(function(){
    $('#ipc').on('change', function() {
    var novit='';
            if ( this.value == '304A'||this.value == '279,304A'||this.value == '279,337,304A'||this.value == 'Others')
            {
        if(novit=='1'||novit==1)
        {
          $("#fv1").show();
          $("#inv1").show();
        }
        else if(novit=='2'||novit==2)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").show();
          $("#inv2").show();
        }
        else if(novit=='3'||novit==3)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").show();
          $("#inv2").show();
          $("#fv3").show();
          $("#inv3").show();
        }
        else if(novit=='4'||novit==4)
        {
          $("#fv1").show();
          $("#inv1").show();
          $("#fv2").show();
          $("#inv2").show();
          $("#fv3").show();
          $("#inv3").show();
          $("#fv4").show();
          $("#inv4").show();
        }
            }
      else if(this.value == '279')
      {
          $("#inv1").hide();
          $("#fv1").hide();
          $("#inv2").hide();
          $("#fv2").hide();
          $("#inv3").hide();
          $("#fv3").hide();
          $("#inv4").hide();
          $("#fv4").hide();
      }
            else 
            {
        if(novit=='1'||novit==1)
        {
          $("#inv1").show();
          $("#fv1").hide();
        }
        else if(novit=='2'||novit==2)
        {
          $("#inv1").show();
          $("#fv1").hide();
          $("#inv2").show();
          $("#fv2").hide();
        }
        else if(novit=='3'||novit==3)
        {
          $("#inv1").show();
          $("#fv1").hide();
          $("#inv2").show();
          $("#fv2").hide();
          $("#inv3").show();
          $("#fv3").hide();
        }
        else if(novit=='4'||novit==4)
        {
          $("#inv1").show();
          $("#fv1").hide();
          $("#inv2").show();
          $("#fv2").hide();
          $("#inv3").show();
          $("#fv3").hide();
          $("#inv4").show();
          $("#fv4").hide();
        }
            }
      
          });
});       

/*$(document).ready(function(){
    $('#din2').on('change', function() {
            if ( this.value == 'Fatal')
            {
             $("#fv2").show();
             $("#inv2").show();
            }
            else 
            {
            $("#inv2").show();
           $("#fv2").hide();
            }
      
          });
});       


$(document).ready(function(){
    $('#din3').on('change', function() {
            if ( this.value == 'Fatal')
            {
             $("#fv3").show();
             $("#inv3").show();
            }
            else 
            {
            $("#inv3").show();
           $("#fv3").hide();
            }
      
          });
});    

$(document).ready(function(){
    $('#din4').on('change', function() {
            if ( this.value == 'Fatal')
            {
             $("#fv4").show();
             $("#inv4").show();
            }
            else 
            {
            $("#inv4").show();
           $("#fv4").hide();
            }
      
          });
});    

*/



 /*$(document).ready(function(){
    $('#noa').on('change', function() {
            if ( this.value == 'Fatal')
            {
             $("#fv1").hide();
       $("#fv2").hide();
       $("#fv3").hide();
       $("#fv4").hide();
    
            }
            else 
            {
            $("#fv1").show();
       $("#fv2").show();
       $("#fv3").show();
       $("#fv4").show();
    
          
            }
      
          });
}); */      






$(document).ready(function(){
    $('#noa').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#noth").show();
    
            }
            else 
            {
            $("#noth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ctype').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#coth").show();
    
            }
            else 
            {
            $("#coth").hide();
          
            }
      
          });


    $('#noa').on('keydown', function() {
            if ( this.value == 'Fatal')
            {
             $("#alert").show();   
            }
            else 
            {
            $("#alert").hide();
          
            }
});
    $('#noa').on('change', function() {
            if ( this.value == 'Fatal')
            {
             $("#alert").show();   
            }
            else 
            {
            $("#alert").hide();
          
            }
});
});




$(document).ready(function(){
    $('#jcon').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#jcoth").show();
    
            }
            else 
            {
            $("#jcoth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#jtype').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#joth").show();
    
            }
            else 
            {
            $("#joth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#rcat').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#roth").show();
    
            }
            else 
            {
            $("#roth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#rnar').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#rnoth").show();
    
            }
            else 
            {
            $("#rnoth").hide();
          
            }
      
          });
});
$(document).ready(function(){
    $('#lcon').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#loth").show();
    
            }
            else 
            {
            $("#loth").hide();
          
            }
      
          });
});
$(document).ready(function(){
    $('#cli').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#cloth").show();
    
            }
            else 
            {
            $("#cloth").hide();
          
            }
      
          });
});



$(document).ready(function(){
    $('#man1').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#vdoth1").show();
    
            }
            else 
            {
            $("#vdoth1").hide();
          
            }
      
          });
});
$(document).ready(function(){
    $('#din1').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#dinoth1").show();
    
            }
            else 
            {
            $("#dinoth1").hide();
          
            }
      
          });
});
$(document).ready(function(){
    $('#derr1').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#deoth1").show();
    
            }
            else 
            {
            $("#deoth1").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#man2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#vdoth2").show();
    
            }
            else 
            {
            $("#vdoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#man3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#vdoth3").show();
    
            }
            else 
            {
            $("#vdoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#man4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#vdoth4").show();
    
            }
            else 
            {
            $("#vdoth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#ma1').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#moth1").show();
    
            }
            else 
            {
            $("#moth1").hide();
          
            }
      
          });
});
$(document).ready(function(){
    $('#ma2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#moth2").show();
    
            }
            else 
            {
            $("#moth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ma3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#moth3").show();
    
            }
            else 
            {
            $("#moth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ma4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#moth4").show();
    
            }
            else 
            {
            $("#moth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#cl1').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#lcloth1").show();
    
            }
            else 
            {
            $("#lcloth1").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#cl2').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#lcloth2").show();
    
            }
            else 
            {
            $("#lcloth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#cl3').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#lcloth3").show();
    
            }
            else 
            {
            $("#lcloth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#cl4').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#lcloth4").show();
    
            }
            else 
            {
            $("#lcloth4").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#din2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#dinoth2").show();
    
            }
            else 
            {
            $("#dinoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#din3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#dinoth3").show();
    
            }
            else 
            {
            $("#dinoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#din4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#dinoth4").show();
    
            }
            else 
            {
            $("#dinoth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#derr2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#deoth2").show();
    
            }
            else 
            {
            $("#deoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#derr3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#deoth3").show();
    
            }
            else 
            {
            $("#deoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#derr4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#deoth4").show();
    
            }
            else 
            {
            $("#deoth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#man3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#vdoth3").show();
    
            }
            else 
            {
            $("#vdoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#man4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#vdoth4").show();
    
            }
            else 
            {
            $("#vdoth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#fspos').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fsoth").show();
    
            }
            else 
            {
            $("#fsoth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fpac').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fpoth").show();
    
            }
            else 
            {
            $("#fpoth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fap').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#faoth").show();
    
            }
            else 
            {
            $("#faoth").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#fspos2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fsoth2").show();
    
            }
            else 
            {
            $("#fsoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fspos3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fsoth3").show();
    
            }
            else 
            {
            $("#fsoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fspos4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fsoth4").show();
    
            }
            else 
            {
            $("#fsoth4").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fpac2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fpoth2").show();
    
            }
            else 
            {
            $("#fpoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fpac3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fpoth3").show();
    
            }
            else 
            {
            $("#fpoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fpac4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#fpoth4").show();
    
            }
            else 
            {
            $("#fpoth4").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fap2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#faoth2").show();
    
            }
            else 
            {
            $("#faoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fap3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#faoth3").show();
    
            }
            else 
            {
            $("#faoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#fap4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#faoth4").show();
    
            }
            else 
            {
            $("#faoth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#ispos').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#isoth").show();
    
            }
            else 
            {
            $("#isoth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ipac').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ipoth").show();
    
            }
            else 
            {
            $("#ipoth").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#iap').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#iaoth").show();
    
            }
            else 
            {
            $("#iaoth").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#ispos2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#isoth2").show();
    
            }
            else 
            {
            $("#isoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ispos3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#isoth3").show();
    
            }
            else 
            {
            $("#isoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ispos4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#isoth4").show();
    
            }
            else 
            {
            $("#isoth4").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ipac2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ipoth2").show();
    
            }
            else 
            {
            $("#ipoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ipac3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ipoth3").show();
    
            }
            else 
            {
            $("#ipoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#ipac4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ipoth4").show();
    
            }
            else 
            {
            $("#ipoth4").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#iap2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#iaoth2").show();
    
            }
            else 
            {
            $("#iaoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#iap3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#iaoth3").show();
    
            }
            else 
            {
            $("#iaoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#iap4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#iaoth4").show();
    
            }
            else 
            {
            $("#iaoth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#vp').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#tpoth1").show();
    
            }
            else 
            {
            $("#tpoth1").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#tp2').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#tpoth2").show();
    
            }
            else 
            {
            $("#tpoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#tp3').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#tpoth3").show();
    
            }
            else 
            {
            $("#tpoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#tp4').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#tpoth4").show();
    
            }
            else 
            {
            $("#tpoth4").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#rtc1').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#rtcroth1y").show();
       $("#rtcfoth1y").show();       
             $("#rtceoth1y").show();
              $("#rtcsoth1y").show();
        
         $("#rtcroth1").hide();
       $("#rtcfoth1").hide();      
             $("#rtceoth1").hide();
              $("#rtcsoth1").hide();
        
         $("#rtcroth1z").hide();
       $("#rtcfoth1z").hide();       
             $("#rtceoth1z").hide();
              $("#rtcsoth1z").hide();
        
            }
            else if ( this.value == 'No')
            {
      
       $("#rtcroth1").show();
       $("#rtcfoth1").show();      
             $("#rtceoth1").show();
              $("#rtcsoth1").show();
        
         $("#rtcroth1y").hide();
       $("#rtcfoth1y").hide();       
             $("#rtceoth1y").hide();
              $("#rtcsoth1y").hide();
        $("#stee11").hide();
          $("#rtcroth1z").hide();
       $("#rtcfoth1z").hide();       
             $("#rtceoth1z").hide();
              $("#rtcsoth1z").hide();
        
      }
      else{
            
            $("#rtcroth1z").show();
       $("#rtcfoth1z").show();       
             $("#rtceoth1z").show();
              $("#rtcsoth1z").show();
       
         $("#rtcroth1y").hide();
       $("#rtcfoth1y").hide();       
             $("#rtceoth1y").hide();
              $("#rtcsoth1y").hide();
       $("#stee11").hide();
     $("#rtcroth1").hide();
       $("#rtcfoth1").hide();      
             $("#rtceoth1").hide();
              $("#rtcsoth1").hide();
    
    
          }
      
      
    

      
      
});


});



$(document).ready(function(){
    $('#rtc2').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#rtcroth2y").show();
       $("#rtcfoth2y").show();       
             $("#rtceoth2y").show();
              $("#rtcsoth2y").show();
        
         $("#rtcroth2").hide();
       $("#rtcfoth2").hide();      
             $("#rtceoth2").hide();
              $("#rtcsoth2").hide();
        
         $("#rtcroth2z").hide();
       $("#rtcfoth2z").hide();       
             $("#rtceoth2z").hide();
              $("#rtcsoth2z").hide();
        
            }
            else if ( this.value == 'No')
            {
      
       $("#rtcroth2").show();
       $("#rtcfoth2").show();      
             $("#rtceoth2").show();
              $("#rtcsoth2").show();
        
         $("#rtcroth2y").hide();
       $("#rtcfoth2y").hide();       
             $("#rtceoth2y").hide();
              $("#rtcsoth2y").hide();
         $("#stee12").hide();
          $("#rtcroth2z").hide();
       $("#rtcfoth2z").hide();       
             $("#rtceoth2z").hide();
              $("#rtcsoth2z").hide();
        
      }
      else{
            
            $("#rtcroth2z").show();
       $("#rtcfoth2z").show();       
             $("#rtceoth2z").show();
              $("#rtcsoth2z").show();
       
         $("#rtcroth2y").hide();
       $("#rtcfoth2y").hide();       
             $("#rtceoth2y").hide();
              $("#rtcsoth2y").hide();
      $("#stee12").hide();
     $("#rtcroth2").hide();
       $("#rtcfoth2").hide();      
             $("#rtceoth2").hide();
              $("#rtcsoth2").hide();
    
    
          }
          });
});

$(document).ready(function(){
    $('#rtc3').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#rtcroth3y").show();
       $("#rtcfoth3y").show();       
             $("#rtceoth3y").show();
              $("#rtcsoth3y").show();
        
         $("#rtcroth3").hide();
       $("#rtcfoth3").hide();      
             $("#rtceoth3").hide();
              $("#rtcsoth3").hide();
        
         $("#rtcroth3z").hide();
       $("#rtcfoth3z").hide();       
             $("#rtceoth3z").hide();
              $("#rtcsoth3z").hide();
        
            }
            else if ( this.value == 'No')
            {
      
       $("#rtcroth3").show();
       $("#rtcfoth3").show();      
             $("#rtceoth3").show();
              $("#rtcsoth3").show();
        
         $("#rtcroth3y").hide();
       $("#rtcfoth3y").hide();       
             $("#rtceoth3y").hide();
              $("#rtcsoth3y").hide();
        $("#stee13").hide();
          $("#rtcroth3z").hide();
       $("#rtcfoth3z").hide();       
             $("#rtceoth3z").hide();
              $("#rtcsoth3z").hide();
        
      }
      else{
            
            $("#rtcroth3z").show();
       $("#rtcfoth3z").show();       
             $("#rtceoth3z").show();
              $("#rtcsoth3z").show();
       
         $("#rtcroth3y").hide();
       $("#rtcfoth3y").hide();       
             $("#rtceoth3y").hide();
              $("#rtcsoth3y").hide();
      $("#stee13").hide();
     $("#rtcroth2").hide();
       $("#rtcfoth3").hide();      
             $("#rtceoth3").hide();
              $("#rtcsoth3").hide();
    
    
          }
      
          });
});

$(document).ready(function(){
    $('#rtc4').on('change', function() {
            if ( this.value == 'Yes')
            {
             $("#rtcroth4y").show();
       $("#rtcfoth4y").show();       
             $("#rtceoth4y").show();
              $("#rtcsoth4y").show();
        
         $("#rtcroth4").hide();
       $("#rtcfoth4").hide();      
             $("#rtceoth4").hide();
              $("#rtcsoth4").hide();
        
         $("#rtcroth4z").hide();
       $("#rtcfoth4z").hide();       
             $("#rtceoth4z").hide();
              $("#rtcsoth4z").hide();
        
            }
            else if ( this.value == 'No')
            {
      
       $("#rtcroth4").show();
       $("#rtcfoth4").show();      
             $("#rtceoth4").show();
              $("#rtcsoth4").show();
        
         $("#rtcroth4y").hide();
       $("#rtcfoth4y").hide();       
             $("#rtceoth4y").hide();
              $("#rtcsoth4y").hide();
        $("#stee4").hide();
        
          $("#rtcroth4z").hide();
       $("#rtcfoth4z").hide();       
             $("#rtceoth4z").hide();
              $("#rtcsoth4z").hide();
        
      }
      else{
            
            $("#rtcroth4z").show();
       $("#rtcfoth4z").show();       
             $("#rtceoth4z").show();
              $("#rtcsoth4z").show();
       
         $("#rtcroth4y").hide();
       $("#rtcfoth4y").hide();       
             $("#rtceoth4y").hide();
              $("#rtcsoth4y").hide();
        $("#stee4").hide();
      
     $("#rtcroth4").hide();
       $("#rtcfoth4").hide();      
             $("#rtceoth4").hide();
              $("#rtcsoth4").hide();
    
    
          }
      
          });
});



$(document).ready(function(){
    $('#rtcsoth11y').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#stee11").show();
    
            }
            else 
            {
            $("#stee11").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#rtcsoth21y').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#stee12").show();
    
            }
            else 
            {
            $("#stee12").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#rtcsoth31y').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#stee13").show();
    
            }
            else 
            {
            $("#stee13").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#rtcsoth41y').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#stee14").show();
    
            }
            else 
            {
            $("#stee14").hide();
          
            }
      
          });
});




$(document).ready(function(){
    $('#class1').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#cloth1").show();
    
            }
            else 
            {
            $("#cloth1").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#class2').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#cloth2").show();
    
            }
            else 
            {
            $("#cloth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#class3').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#cloth3").show();
    
            }
            else 
            {
            $("#cloth3").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#class4').on('change', function() {
            if ( this.value == 'Motor Vehicle of Specified Description/Others')
            {
             $("#cloth4").show();
    
            }
            else 
            {
            $("#cloth4").hide();
          
            }
      
          });
});


$(document).ready(function(){
    $('#cot1').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#tyoth1").show();
    
            }
            else 
            {
            $("#tyoth1").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#cot2').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#tyoth2").show();
    
            }
            else 
            {
            $("#tyoth2").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#cot3').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#tyoth3").show();
    
            }
            else 
            {
            $("#tyoth3").hide();
          
            }
      
          });
});

$(document).ready(function(){
    $('#cot4').on('change', function() {
            if ( this.value == 'Defects')
            {
             $("#tyoth4").show();
    
            }
            else 
            {
            $("#tyoth4").hide();
          
            }
      
          });
});



$(document).ready(function(){
    $('#op1').on('change', function() {
            if ( this.value == 'Not Due to Mechanical Defect')
            {
             
       $("#mech1").hide();
    
            }
            else 
            {
            $("#mech1").show();
          
            }
      
          });
});



$(document).ready(function(){
    $('#op2').on('change', function() {
            if ( this.value == 'Not Due to Mechanical Defect')
            {
             $("#mech2").hide();
    
            }
            else 
            {
            $("#mech2").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#op3').on('change', function() {
            if ( this.value == 'Not Due to Mechanical Defect')
            {
             $("#mech3").hide();
    
            }
            else 
            {
            $("#mech3").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#op4').on('change', function() {
            if ( this.value == 'Not Due to Mechanical Defect')
            {
             $("#mech4").hide();
    
            }
            else 
            {
            $("#mech4").show();
          
            }
      
          });
});
//SAFETY STD COMPONENTS SCRIPT
$(document).ready(function(){
    $('#tt1').on('change', function() {
            if ( this.value=='Auto Rickshaw'||this.value == 'Share Auto')
           
            {
             $("#dse1").hide();
             $("#dhe1").hide();
            }
            else 
            {
             $("#dse1").show();
             $("#dhe1").hide();
            }
      
          });
});


$(document).ready(function(){
    $('#tt1').on('change', function() {
            if ( this.value=='Aurticulated Vehicle'||this.value == 'Goods Carriage'||this.value == 'Hazardous Nature Carriage')
           
            {
             $("#dfu1").show();
             $("#dru1").show();
       $("#dlp1").show();
            }
            else 
            {
             $("#dfu1").hide();
             $("#dru1").hide();
       $("#dlp1").hide();
            }
      
          });
});




$(document).ready(function(){
    $('#ntt1').on('change', function() {
            if ( this.value=='Battery Operated Vehicle'||this.value == 'Car'||this.value == 'Jeep'||this.value == 'Others')
           
            {
             $("#dse1").show();
             $("#dhe1").hide();
            }
            else if ( this.value=='Moped'||this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear'||this.value == 'Scooter')
            {
             $("#dse1").hide();
             $("#dhe1").show();
            }
      else 
            {
         $("#dse1").hide();
             $("#dhe1").hide();
      }
      
          });
});


//V2

$(document).ready(function(){
    $('#tt2').on('change', function() {
            if ( this.value=='Auto Rickshaw'||this.value == 'Share Auto')
           
            {
             $("#dse2").hide();
             $("#dhe2").hide();
            }
            else 
            {
             $("#dse2").show();
             $("#dhe2").hide();
            }
      
          });
});


$(document).ready(function(){
    $('#tt2').on('change', function() {
            if ( this.value=='Aurticulated Vehicle'||this.value == 'Goods Carriage'||this.value == 'Hazardous Nature Carriage')
           
            {
             $("#dfu2").show();
             $("#dru2").show();
       $("#dlp2").show();
            }
            else 
            {
             $("#dfu2").hide();
             $("#dru2").hide();
       $("#dlp2").hide();
            }
      
          });
});




$(document).ready(function(){
    $('#ntt2').on('change', function() {
            if ( this.value=='Battery Operated Vehicle'||this.value == 'Car'||this.value == 'Jeep'||this.value == 'Others')
           
            {
             $("#dse2").show();
             $("#dhe2").hide();
            }
            else if ( this.value=='Moped'||this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear'||this.value == 'Scooter')
            {
             $("#dse2").hide();
             $("#dhe2").show();
            }
      else 
            {
         $("#dse2").hide();
             $("#dhe2").hide();
      }
      
          });
});


//V3

$(document).ready(function(){
    $('#tt3').on('change', function() {
            if ( this.value=='Auto Rickshaw'||this.value == 'Share Auto')
           
            {
             $("#dse3").hide();
             $("#dhe3").hide();
            }
            else 
            {
             $("#dse3").show();
             $("#dhe3").hide();
            }
      
          });
});


$(document).ready(function(){
    $('#tt3').on('change', function() {
            if ( this.value=='Aurticulated Vehicle'||this.value == 'Goods Carriage'||this.value == 'Hazardous Nature Carriage')
           
            {
             $("#dfu3").show();
             $("#dru3").show();
       $("#dlp3").show();
            }
            else 
            {
             $("#dfu3").hide();
             $("#dru3").hide();
       $("#dlp3").hide();
            }
      
          });
});




$(document).ready(function(){
    $('#ntt3').on('change', function() {
            if ( this.value=='Battery Operated Vehicle'||this.value == 'Car'||this.value == 'Jeep'||this.value == 'Others')
           
            {
             $("#dse3").show();
             $("#dhe3").hide();
            }
            else if ( this.value=='Moped'||this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear'||this.value == 'Scooter')
            {
             $("#dse3").hide();
             $("#dhe3").show();
            }
      else 
            {
         $("#dse3").hide();
             $("#dhe3").hide();
      }
      
          });
});


//V4
$(document).ready(function(){
    $('#tt4').on('change', function() {
            if ( this.value=='Auto Rickshaw'||this.value == 'Share Auto')
           
            {
             $("#dse4").hide();
             $("#dhe4").hide();
            }
            else 
            {
             $("#dse4").show();
             $("#dhe4").hide();
            }
      
          });
});


$(document).ready(function(){
    $('#tt4').on('change', function() {
            if ( this.value=='Aurticulated Vehicle'||this.value == 'Goods Carriage'||this.value == 'Hazardous Nature Carriage')
           
            {
             $("#dfu4").show();
             $("#dru4").show();
       $("#dlp4").show();
            }
            else 
            {
             $("#dfu4").hide();
             $("#dru4").hide();
       $("#dlp4").hide();
            }
      
          });
});




$(document).ready(function(){
    $('#ntt4').on('change', function() {
            if ( this.value=='Battery Operated Vehicle'||this.value == 'Car'||this.value == 'Jeep'||this.value == 'Others')
           
            {
             $("#dse4").show();
             $("#dhe4").hide();
            }
            else if ( this.value=='Moped'||this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear'||this.value == 'Scooter')
            {
             $("#dse4").hide();
             $("#dhe4").show();
            }
      else 
            {
         $("#dse4").hide();
             $("#dhe4").hide();
      }
      
          });
});







$(document).ready(function(){
    $('#rcp1').on('change', function() {
            if ( this.value=='No')
           
            {
             $("#oname1").val('RC Not Produced');
             $("#oaddress1").val('RC Not Produced');
            }
            else if ( this.value=='Yes')
            {
             $("#oname1").val('');
             $("#oaddress1").val('');
            }
      
          });
});

$(document).ready(function(){
    $('#rcp2').on('change', function() {
            if ( this.value=='No')
           
            {
             $("#oname2").val('RC Not Produced');
             $("#oaddress2").val('RC Not Produced');
            }
            else if ( this.value=='Yes')
            {
             $("#oname2").val('');
             $("#oaddress2").val('');
            }
      
          });
});

$(document).ready(function(){
    $('#rcp3').on('change', function() {
            if ( this.value=='No')
           
            {
             $("#oname3").val('RC Not Produced');
             $("#oaddress3").val('RC Not Produced');
            }
            else if ( this.value=='Yes')
            {
             $("#oname3").val('');
             $("#oaddress3").val('');
            }
      
          });
});

$(document).ready(function(){
    $('#rcp4').on('change', function() {
            if ( this.value=='No')
           
            {
             $("#oname4").val('RC Not Produced');
             $("#oaddress4").val('RC Not Produced');
            }
            else if ( this.value=='Yes')
            {
             $("#oname4").val('');
             $("#oaddress4").val('');
            }
      
          });
});
/*
$(document).ready(function(){
    $('#rcp1').on('change', function() {
            if ( this.value=='No')
           
            {
             $("#oname1").val('RC Not Produced');
             $("#oaddress1").val('RC Not Produced');
       $(document).ready(function(){
             $('#type1').on('change', function() {
            if ( this.value=='Non - Transport')
      {
      $("#rc1").val('RC Not Produced'); 
      }
        
            });
      });
            else 
            {
             $("#oname1").show();
             $("#oaddress1").show();
            }
      
          });
});


*/














$(document).ready(function(){
    $('#tt1').on('change', function() {
            if ( this.value=='Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Meter Taxi')
            {
             $("#dspeed1").hide();
    
            }
            else 
            {
            $("#dspeed1").show();

             $(document).ready(function(){
             $('#speed1').on('change', function() {
             if ( this.value == 'No')
               {
              $("#dspeoth1").show();
    
              }
              else 
              {
              $("#dspeoth1").hide();
            
              }
      
              });
              });
           }
      
          });
});

$(document).ready(function(){
    $('#tt1').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Maxi Cab'||this.value == 'Meter Taxi')
            {
             $("#dabs1").hide();
    
            }
            else 
            {
            $("#dabs1").show();

             $(document).ready(function(){
             $('#abs1').on('change', function() {
             if ( this.value == 'No')
               {
              $("#daboth1").show();
    
              }
              else 
              {
              $("#daboth1").hide();
            
              }
      
              });
              });
          
           }
      
          });
});


$(document).ready(function(){
    $('#tt2').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Meter Taxi')
            {
             $("#dspeed2").hide();
    
            }
            else 
            {
            $("#dspeed2").show();
            $("#dspeoth2").show();
             $(document).ready(function(){
             $('#speed2').on('change', function() {
             if ( this.value == 'No')
               {
              $("#dspeoth2").show();
    
              }
              else 
              {
              $("#dspeoth2").hide();
            
              }
      
              });
              });
          
           }
      
          });
});



$(document).ready(function(){
    $('#tt3').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Meter Taxi')
            {
             $("#dspeed3").hide();
    
            }
            else 
            {
            $("#dspeed3").show();

             $(document).ready(function(){
             $('#speed3').on('change', function() {
             if ( this.value == 'No')
               {
              $("#dspeoth3").show();
    
              }
              else 
              {
              $("#dspeoth3").hide();
            
              }
      
              });
              });
          
           }
      
          });
});



$(document).ready(function(){
    $('#tt4').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Meter Taxi')
            {
             $("#dspeed4").hide();
    
            }
            else 
            {
            $("#dspeed4").show();

             $(document).ready(function(){
             $('#speed4').on('change', function() {
             if ( this.value == 'No')
               {
              $("#dspeoth4").show();
    
              }
              else 
              {
              $("#dspeoth4").hide();
            
              }
      
              });
              });
          
           }
      
          });
});







$(document).ready(function(){
    $('#tt2').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Maxi Cab'||this.value == 'Meter Taxi')
            {
             $("#dabs2").hide();
    
            }
            else 
            {
            $("#dabs2").show();

             $(document).ready(function(){
             $('#abs2').on('change', function() {
             if ( this.value == 'No')
               {
              $("#daboth2").show();
    
              }
              else 
              {
              $("#daboth2").hide();
            
              }
      
              });
              });
          
           }
      
          });
});



$(document).ready(function(){
    $('#tt3').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Maxi Cab'||this.value == 'Meter Taxi')
            {
             $("#dabs3").hide();
    
            }
            else 
            {
            $("#dabs3").show();

             $(document).ready(function(){
             $('#abs3').on('change', function() {
             if ( this.value == 'No')
               {
              $("#daboth3").show();
    
              }
              else 
              {
              $("#daboth3").hide();
            
              }
      
              });
              });
          
           }
      
          });
});

$(document).ready(function(){
    $('#tt4').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'Auto Rickshaw'||this.value == 'Call Taxi'||this.value == 'Share Auto'||this.value == 'Tourist Taxi'||this.value == 'Maxi Cab'||this.value == 'Meter Taxi')
            {
             $("#dabs4").hide();
    
            }
            else 
            {
            $("#dabs4").show();

             $(document).ready(function(){
             $('#abs4').on('change', function() {
             if ( this.value == 'No')
               {
              $("#daboth4").show();
    
              }
              else 
              {
              $("#daboth4").hide();
            
              }
      
              });
              });
          
           }
      
          });
});

$(document).ready(function(){
               $('#tow1').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv1").val('Scheme');
         }  
         else 
         {
           $("#pv1").val('');
         }           
          });
               $('#mof1').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv1").val('Scheme');
         }         
         else 
         {
           $("#pv1").val('');
         }             
          });
               $('#tow2').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv2").val('Scheme');
         }  
         else 
         {
           $("#pv2").val('');
         }           
          });
               $('#mof2').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv2").val('Scheme');
         }         
         else 
         {
           $("#pv2").val('');
         }             
          });
               $('#tow3').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv3").val('Scheme');
         }  
         else 
         {
           $("#pv3").val('');
         }           
          });
               $('#mof3').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv3").val('Scheme');
         }         
         else 
         {
           $("#pv3").val('');
         }             
          });
               $('#tow4').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv4").val('Scheme');
         }  
         else 
         {
           $("#pv4").val('');
         }           
          });
               $('#mof4').on('change', function() {
               if ( this.value == 'STU')
               {
           $("#pv4").val('Scheme');
         }         
         else 
         {
           $("#pv4").val('');
         }             
          });
     });
   
$(document).ready(function(){
    $('#type1').on('change', function() {
            if ( this.value == 'Transport')
            {
             $("#trans1").show();
       
             $("#nontrans1").hide();

               
    
            }
          
            else
            {
             $("#nontrans1").show();

             $("#trans1").hide();


              $(document).ready(function(){
              $('#ntt1').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ntoth1").show();
    
            }
            else 
            {
            $("#ntoth1").hide();
          
            }
      
                 });
           });
         }
      
          });
});


$(document).ready(function(){
    $('#type2').on('change', function() {
            if ( this.value == 'Transport')
            {
             $("#trans2").show();
  

           $("#nontrans2").hide();
               
            }
          
            else
            {
             $("#nontrans2").show();

             $("#trans2").hide();





              $(document).ready(function(){
              $('#ntt2').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ntoth2").show();
    
            }
            else 
            {
            $("#ntoth2").hide();
          
            }
      
                 });
           });
         }
      
          });
});



$(document).ready(function(){
    $('#type3').on('change', function() {
            if ( this.value == 'Transport')
            {
             $("#trans3").show();
  

           $("#nontrans3").hide();
               
            }
          
            else
            {
             $("#nontrans3").show();

             $("#trans3").hide();

              $(document).ready(function(){
              $('#ntt3').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ntoth3").show();
    
            }
            else 
            {
            $("#ntoth3").hide();
          
            }
      
                 });
           });
         }
      
          });
});


$(document).ready(function(){
    $('#type4').on('change', function() {
            if ( this.value == 'Transport')
            {
             $("#trans4").show();
  

           $("#nontrans4").hide();
               
            }
          
            else
            {
             $("#nontrans4").show();

             $("#trans4").hide();

              $(document).ready(function(){
              $('#ntt4').on('change', function() {
            if ( this.value == 'Others')
            {
             $("#ntoth4").show();
    
            }
            else 
            {
            $("#ntoth4").hide();
          
            }
      
                 });
           });
         }
      
          });
});
//New Script
$(document).ready(function(){
  
               $('#tt1').on('change', function() {
                 $("#perv1").show();
         $("#pv1").val('');
               if ( this.value == 'Stage Carriage'||this.value == 'Stage Carriage Spare')
               {
                $("#perv1").show();
               $("#dst1").show();
               $("#toth1").hide();

                  $("#dmof1").show();  
                        $(document).ready(function(){
                        $('#st1').on('change', function() {
                        if ( this.value == 'Mofussil')
                         {
                        $("#dmof1").show();
                        $("#dtow1").hide();
             $("#pv1").val('');
                         }
                       else if ( this.value == 'Town')
                        {
                         $("#dmof1").hide();
                         $("#dtow1").show();
             $("#pv1").val('');
                         }
                       else if ( this.value=='STU PCG Mofussil')
                        {
                         $("#dmof1").hide();
                         $("#dtow1").hide();
             $("#pv1").val('Scheme');
                         }
                       else if ( this.value=='STU PCG Town')
                        {
                         $("#dmof1").hide();
                         $("#dtow1").hide();
             $("#pv1").val('Scheme');
                         }
                       else 
                        {
                         $("#dmof1").hide();
                         $("#dtow1").hide();
             $("#pv1").val('');
                         }
                    });
                });
               }
         else if(this.value=='Ambulance'||this.value=='LMGV(NCP)')
         {
                 $("#perv1").hide();
                 $("#pv1").val('');
         }          
               else if( this.value=='Others')
               {
                 $("#perv1").show();
                 $("#dst1").hide();
                 $("#dmof1").hide();
                 $("#dtow1").hide();
                 $("#toth1").show();

               }
            else 
               {
                 $("#perv1").show();
                 $("#dst1").hide();
                 $("#dmof1").hide();
                 $("#dtow1").hide();
                 $("#toth1").hide();

               }      
          });
               $('#tt2').on('change', function() {
                 $("#perv2").show();
         $("#pv2").val('');
               if ( this.value == 'Stage Carriage'||this.value == 'Stage Carriage Spare')
               {
                 $("#perv2").show();
               $("#dst2").show();
                 $("#toth2").hide();
                   $("#dmof2").show();
                        $(document).ready(function(){
                        $('#st2').on('change', function() {
                        if ( this.value == 'Mofussil')
                         {
                        $("#dmof2").show();
                        $("#dtow2").hide();
             $("#pv2").val('');
                         }
         
                       else if(this.value == 'Town')
                        {
                         $("#dmof2").hide();
                         $("#dtow2").show();
             $("#pv2").val('');
                         }
                       else if ( this.value=='STU PCG Mofussil')
                        {
                         $("#dmof2").hide();
                         $("#dtow2").hide();
             $("#pv2").val('Scheme');
                         }
                       else if ( this.value=='STU PCG Town')
                        {
                         $("#dmof2").hide();
                         $("#dtow2").hide();
             $("#pv2").val('Scheme');
                         }
                     else 
                        {
                         $("#dmof2").hide();
                         $("#dtow2").hide();
             $("#pv2").val('');
                         }
                    });
                  });
               }
          
         else if(this.value=='Ambulance'||this.value=='LMGV(NCP)')
         {
                 $("#perv2").hide();
                 $("#pv2").val('');
         }          
               else if( this.value=='Others')
               {
                 $("#perv2").show();
                 $("#dst2").hide();
                 $("#dmof2").hide();
                 $("#dtow2").hide();
                 $("#toth2").show();

               }
            else 
               {
                 $("#perv2").show();
                 $("#dst2").hide();
                 $("#dmof2").hide();
                 $("#dtow2").hide();
                 $("#toth2").hide();

               }
      
          });
               $('#tt3').on('change', function() {
                 $("#perv3").show();
         $("#pv3").val('');
               if ( this.value == 'Stage Carriage'||this.value == 'Stage Carriage Spare')
               {
                 $("#perv3").show();
               $("#dst3").show();
                 $("#toth3").hide();
                   $("#dmof3").show();
                        $(document).ready(function(){
                        $('#st3').on('change', function() {
                        if ( this.value == 'Mofussil')
                         {
                        $("#dmof3").show();
                        $("#dtow3").hide();
            $("#pv3").val('');
                         }
         
                       else if(this.value == 'Town')
                        {
                         $("#dmof3").hide();
                         $("#dtow3").show();
            $("#pv3").val('');
                         }
             else if ( this.value=='STU PCG Mofussil')
                        {
                         $("#dmof3").hide();
                         $("#dtow3").hide();
             $("#pv3").val('Scheme');
                         }
                       else if ( this.value=='STU PCG Town')
                        {
                         $("#dmof3").hide();
                         $("#dtow3").hide();
             $("#pv3").val('Scheme');
                         }
                     else 
                        {
                         $("#dmof3").hide();
                         $("#dtow3").hide();
            $("#pv3").val('');
                         }
                    });
                  });
               }
          
         else if(this.value=='Ambulance'||this.value=='LMGV(NCP)')
         {
                 $("#perv3").hide();
                 $("#pv3").val('');
         }         
               else if( this.value=='Others')
               {
                 $("#perv3").show();
                 $("#dst3").hide();
                 $("#dmof3").hide();
                 $("#dtow3").hide();
                 $("#toth3").show();

               }
            else 
               {
                 $("#perv3").show();
                 $("#dst3").hide();
                 $("#dmof3").hide();
                 $("#dtow3").hide();
                 $("#toth3").hide();

               }
      
          });
      
               $('#tt4').on('change', function() {
                 $("#perv3").show();
         $("#pv4").val('');
               if ( this.value == 'Stage Carriage'||this.value == 'Stage Carriage Spare')
               {
                 $("#perv3").show();
               $("#dst4").show();
                 $("#toth4").hide();
                   $("#dmof4").show();
                        $(document).ready(function(){
                        $('#st4').on('change', function() {
                        if ( this.value == 'Mofussil')
                         {
                        $("#dmof4").show();
                        $("#dtow4").hide();
             $("#pv4").val('');
                         }
         
                       else if(this.value == 'Town')
                        {
                         $("#dmof4").hide();
                         $("#dtow4").show();
             $("#pv4").val('');
                         }
                       else if ( this.value=='STU PCG Mofussil')
                        {
                         $("#dmof4").hide();
                         $("#dtow4").hide();
             $("#pv4").val('Scheme');
                         }
                       else if ( this.value=='STU PCG Town')
                        {
                         $("#dmof4").hide();
                         $("#dtow4").hide();
             $("#pv4").val('Scheme');
                         }
                     else 
                        {
                         $("#dmof4").hide();
                         $("#dtow4").hide();
             $("#pv4").val('');
                         }
                    });
                  });
               }
         else if(this.value=='Ambulance'||this.value=='LMGV(NCP)')
         {
                 $("#perv4").hide();
                 $("#pv4").val('');
         }         
          
               else if( this.value=='Others')
               {
                 $("#perv3").show();
                 $("#dst4").hide();
                 $("#dmof4").hide();
                 $("#dtow4").hide();
                 $("#toth4").show();

               }
            else 
               {
                 $("#perv3").show();
                 $("#dst4").hide();
                 $("#dmof4").hide();
                 $("#dtow4").hide();
                 $("#toth4").hide();

               }
      
          });
     });

   
   


/*$(document).ready(function(){
               $('#class1').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc1').on('change', function() {
                        if ( this.value == 'Yes')
                         {
                        $("#rtcfoth1y").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   $(document).ready(function(){
               $('#class1').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc1').on('change', function() {
                        if ( this.value == 'No')
                         {
                        $("#rtcfoth1").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   
    $(document).ready(function(){
               $('#class1').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc1').on('change', function() {
                        if ( this.value == 'Others')
                         {
                        $("#rtcfoth1z").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });
   
  

$(document).ready(function(){
               $('#class2').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc2').on('change', function() {
                        if ( this.value == 'Yes')
                         {
                        $("#rtcfoth2y").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   $(document).ready(function(){
               $('#class2').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc2').on('change', function() {
                        if ( this.value == 'No')
                         {
                        $("#rtcfoth2").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   
    $(document).ready(function(){
               $('#class2').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc2').on('change', function() {
                        if ( this.value == 'Others')
                         {
                        $("#rtcfoth2z").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });
   
   

$(document).ready(function(){
               $('#class3').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc3').on('change', function() {
                        if ( this.value == 'Yes')
                         {
                        $("#rtcfoth3y").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   $(document).ready(function(){
               $('#class3').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc3').on('change', function() {
                        if ( this.value == 'No')
                         {
                        $("#rtcfoth3").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   
    $(document).ready(function(){
               $('#class3').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc3').on('change', function() {
                        if ( this.value == 'Others')
                         {
                        $("#rtcfoth3z").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });
   
   


$(document).ready(function(){
               $('#class4').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc4').on('change', function() {
                        if ( this.value == 'Yes')
                         {
                        $("#rtcfoth4y").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   $(document).ready(function(){
               $('#class4').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc4').on('change', function() {
                        if ( this.value == 'No')
                         {
                        $("#rtcfoth4").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });

   
    $(document).ready(function(){
               $('#class4').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $(document).ready(function(){
                        $('#rtc4').on('change', function() {
                        if ( this.value == 'Others')
                         {
                        $("#rtcfoth4z").hide();
             }
  
                    
      
                    });
                  });
               }
          
              
            
          });
     });
  */ 
   

 $(document).ready(function(){
               $('#class1').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $("#isb").hide();
            $("#fsb").hide();
            $("#iair").hide();
            $("#air1").hide();
            $("#ih").show();
            $("#fh").show();
             }
  
                    else{
            $("#isb").show();
            $("#fsb").show();
            $("#iair").show();
            $("#air1").show();
            $("#ih").hide();
            $("#fh").hide();
          }
      
                    });
                  });
              
          
              
            
    $(document).ready(function(){
               $('#class2').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $("#isb2").hide();
            $("#fsb2").hide();
            $("#iair2").hide();
            $("#air2").hide();
            $("#ih2").show();
            $("#fh2").show();
             }
  
                    else{
            $("#isb2").show();
            $("#fsb2").show();
            $("#iair2").show();
            $("#air2").show();
            $("#ih2").hide();
            $("#fh2").hide();
          }
      
                    });
                  });
              
          
                  
$(document).ready(function(){
               $('#class3').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $("#isb3").hide();
            $("#fsb3").hide();
            $("#iair3").hide();
            $("#air3").hide();
            $("#ih3").show();
            $("#fh3").show();
             }
  
                    else{
            $("#isb3").show();
            $("#fsb3").show();
            $("#iair3").show();
            $("#air3").show();
            $("#ih3").hide();
            $("#fh3").hide();
          }
      
                    });
                  });
              
          
              
$(document).ready(function(){
               $('#class4').on('change', function() {
               if ( this.value == 'Motor Cycle with Gear'||this.value == 'Motor Cycle without Gear')
               {
                        $("#isb4").hide();
            $("#fsb4").hide();
            $("#iair4").hide();
            $("#air4").hide();
            $("#ih4").show();
            $("#fh4").show();
             }
  
                    else{
            $("#isb4").show();
            $("#fsb4").show();
            $("#iair4").show();
            $("#air4").show();
            $("#ih4").hide();
            $("#fh4").hide();
          }
      
                    });
                  });

$(document).ready(function(){
    $('#tt2').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'LMGV(NCP)')
            {
             $("#pv2").hide();
    
            }
            else 
            {
            $("#pv2").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#tt3').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'LMGV(NCP)')
            {
             $("#pv3").hide();
    
            }
            else 
            {
            $("#pv3").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#tt4').on('change', function() {
            if ( this.value == 'Ambulance'||this.value == 'LMGV(NCP)')
            {
             $("#pv4").hide();
    
            }
            else 
            {
            $("#pv4").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#class1').on('change', function() {
            if ( this.value == 'Light Motor Vehicle Trans'||this.value == 'Medium Goods Vehicle'||this.value == 'Medium Passenger'||this.value == 'Heavy Transport Vehicle'||this.value == 'Hazardous Vehicle')
            {
             $("#b1").hide();
    
            }
            else 
            {
            $("#b1").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#class2').on('change', function() {
            if ( this.value == 'Light Motor Vehicle Trans'||this.value == 'Medium Goods Vehicle'||this.value == 'Medium Passenger'||this.value == 'Heavy Transport Vehicle'||this.value == 'Hazardous Vehicle')
            {
             $("#b2").hide();
    
            }
            else 
            {
            $("#b2").show();
          
            }
      
          });
});


$(document).ready(function(){
    $('#class3').on('change', function() {
            if ( this.value == 'Light Motor Vehicle Trans'||this.value == 'Medium Goods Vehicle'||this.value == 'Medium Passenger'||this.value == 'Heavy Transport Vehicle'||this.value == 'Hazardous Vehicle')
            {
             $("#b3").hide();
    
            }
            else 
            {
            $("#b3").show();
          
            }
      
          });
});


$(document).ready(function(){
    $('#class4').on('change', function() {
            if ( this.value == 'Light Motor Vehicle Trans'||this.value == 'Medium Goods Vehicle'||this.value == 'Medium Passenger'||this.value == 'Heavy Transport Vehicle'||this.value == 'Hazardous Vehicle')
            {
             $("#b4").hide();
    
            }
            else 
            {
            $("#b4").show();
          
            }
      
          });
});

$(document).ready(function(){
    $('#type1').on('change', function() {
            if ( this.value == 'Non - Transport')
            {
             $("#d11").hide();
      
    
            }
            else 
            {
            $("#d11").show();
      
          
            }
      
          });
});


$(document).ready(function(){
    $('#type2').on('change', function() {
            if ( this.value == 'Non - Transport')
            {
             $("#d12").hide();
      
    
            }
            else 
            {
            $("#d12").show();
      
            }
      
          });
});


$(document).ready(function(){
    $('#type3').on('change', function() {
            if ( this.value == 'Non - Transport')
            {
             $("#d13").hide();
      
    
            }
            else 
            {
            $("#d13").show();
       
          
            }
      
          });
});


$(document).ready(function(){
    $('#type4').on('change', function() {
            if ( this.value == 'Non - Transport')
            {
             $("#d14").hide();
      
    
            }
            else 
            {
            $("#d14").show();
      
            }
      
          });
});


$(document).ready(function(){
    $('#cl1').on('change', function() {
            if ( this.value == 'Motor Cycle without Gear'||this.value == 'Motor Cycle with Gear'||this.value == 'Invalid Carriage'||this.value == 'Invalid Carriage mc'||this.value == 'Light Motor Vehicle NT')
            {
             $("#b1").hide();
    
            }
            else 
            {
            $("#b1").show();
          
            }
      
          });
});
    
  $(document).ready(function(){
    $('#cl2').on('change', function() {
            if ( this.value == 'Motor Cycle without Gear'||this.value == 'Motor Cycle with Gear'||this.value == 'Invalid Carriage'||this.value == 'Invalid Carriage mc'||this.value == 'Light Motor Vehicle NT')
            {
             $("#b2").hide();
    
            }
            else 
            {
            $("#b2").show();
          
            }
      
          });
});
    
  $(document).ready(function(){
    $('#cl3').on('change', function() {
            if ( this.value == 'Motor Cycle without Gear'||this.value == 'Motor Cycle with Gear'||this.value == 'Invalid Carriage'||this.value == 'Invalid Carriage mc'||this.value == 'Light Motor Vehicle NT')
            {
             $("#b3").hide();
    
            }
            else 
            {
            $("#b3").show();
          
            }
      
          });
});
    
  $(document).ready(function(){
    $('#cl4').on('change', function() {
            if ( this.value == 'Motor Cycle without Gear'||this.value == 'Motor Cycle with Gear'||this.value == 'Invalid Carriage'||this.value == 'Invalid Carriage mc'||this.value == 'Light Motor Vehicle NT')
            {
             $("#b4").hide();
    
            }
            else 
            {
            $("#b4").show();
          
            }
      
          });
});
    
</script>


<form class="form-horizontal" method="POST" action="ed.php" name="myForm" onsubmit=" " enctype="multipart/form-data" >
<fieldset>
<!-- Form Name -->
<br><br><br><br><br><br>
<p><font color="#00cc99"><center><b>***Kindly follow the instructions for successful data entry</b></center></font></p>
<p><font color="#00cc99"><b><center>***Kindly avoid the use of special characters.</center></b></font></p>

<h3>Basic Details </h3>

<div class="form-group">
  <label class="col-md-4 control-label" for="zone">Zone</label>
  <div class="col-md-6">
        <select name="zone" id="zone" class="form-control" required>
                  <option value="<?php echo $zone;?>" selected="selected"></option>
        </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dis">District</label>
  <div class="col-md-6">
        <select name="dis" id="dis" class="form-control" required>
                  <option value="<?php echo $dis;?>" selected="selected"></option>
        </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="rto">Regional Transport Office</label>
  <div class="col-md-6">
    <select name="rto" id="rto" class="form-control" required>
        <option value="<?php echo $rto;?>" selected="selected"></option>
    </select>  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="unit">RTO/Unit Office</label>
  <div class="col-md-6">
    <select name="unit" id="unit" class="form-control" required>
        <option value="<?php echo $unit;?>" selected="selected"></option>
    </select>  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="psta">Police Station</label>  
  <div class="col-md-6">
  <input id="psta" name="psta" placeholder="" class="form-control input-md" type="text" style="text-transform:uppercase" value="<?php echo $psta;?>" required>
  </div>
</div>


<!--<h3>Police Details </h3>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cno">Crime No.</label>  
  <div class="col-md-6">
  <input id="cno" name="cno" placeholder="_ _ _ _/YY" class="form-control input-md" value="<?php echo $cno;?>" type="text" value="<?php echo $cno;?>" required>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lo">Place of Accident</label>  
  <div class="col-md-6">
  <input id="lo" name="lo" value="<?php echo $placeofaccident;?>" placeholder="" class="form-control input-md" type="text" required>
    
  </div>
</div>

<center><a style="color:red;text-size:20px" onclick="openWindow()">Click here to Find Map Co-ordinates</h4></a></center>
<p><font color="#00cc99"><b><center>***Kindly follow the screenshots specified in the HOME page to plot latitude and longitude values</center></b></font></p>

<!-- Text input-->
<div class="form-group"><br>
  <label class="col-md-4 control-label" for="lati">Latitude(Near by value)</label>  
  <div class="col-md-6">
  <input id="lati" name="lati" placeholder="" value="<?php echo $latitude;?>" class="form-control input-md" type="text" onkeypress="return isNumberKey(event)" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="longi">Longitude(Near by value)</label>  
  <div class="col-md-6">
  <input id="longi" name="longi" placeholder="" class="form-control input-md" value="<?php echo $longitude;?>" type="text" onkeypress="return isNumberKey(event)"  required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ipc">IPC Section</label>
  <div class="col-md-6">
    <select id="ipc" name="ipc" class="form-control" value="<?php echo $ipc;?>"  required>
    <option value="">Select the value</option>
      <option value="" selected="selected"></option>
      <option value="279">279</option>
      <option value="279,337">279,337</option>
      <option value="279,337,338">279,337,338</option>
      <option value="304A">304A</option>
      <option value="279,304A">279,304A</option>

     <option value="279,337,304A">279,337,304A</option>

      <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="ioth1" id="ioth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label"  for="ioth1">Others</label>  
  <div class="col-md-6">
  <input id="ioth1" name="ioth1" placeholder="" value="<?php echo $ioth1;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!--<div id="alert">
<center><p style="color:red;text-size:20px">Please Upload an image for this case in following page</p></center>
</div>-->


<div class="form-group" id="noa">
  <label class="col-md-4 control-label" for="noa">Nature of Accident</label>
  <div class="col-md-6">
    <select id="noa" name="noa" class="form-control" value="<?php echo $natureofaccident;?>" required>
    <option value="">Select the value</option>
      <option value="" selected="selected"></option>
       <option value="Fatal">Fatal</option>
      <option value="Grievous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
    <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="noth" id="noth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ioth2">Others</label>  
  <div class="col-md-6">
  <input id="ioth2" name="ioth2" placeholder="" value="<?php echo $ioth2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




<!--<h3>Accident Details </h3>-->



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adate">Accident Date</label>  
  <div class="col-md-6">
  <input id="adate" name="adate" value="<?php echo $accidentdate;?>" placeholder="yyyy-mm-dd" class="form-control input-md" type="date" required>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="at">Accident Time</label>  
  <div class="col-md-6">
  <input id="at" name="at" placeholder="hh:mm" value="<?php echo $accidenttime;?>" class="at form-control input-md" type="Time" onclick="validateForm4()" required>
  </div>
  <div class="col-md-1">
  <p><b>Hours(24hrs format)</b></p>
  </div>
</div>






<div class="form-group">
  <label class="col-md-4 control-label" for="novi">Number of Vehicles involved</label>
  <div class="col-md-6">
    <select id="novi" name="novi" class="form-control" value="<?php echo $numberofvehiclesinvolved;?>" onclick="validateForm5()" required>
<option value="">Select the value</option>
      <option value="" selected="selected"></option>
      <option value="1">1</option>
      <option value="2">2</option>
     
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="image">Upload image</label>
  <div class="col-md-6">
  <input type="file" name="image" id="image" class="form-control input-md">
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ctype">Collision Type</label>
  <div class="col-md-6">
    <select id="ctype" name="ctype" value="<?php echo $collisiontype;?>" class="form-control" required>
     <option value="">Select the value</option>
      <option value="Head on">Head on</option>
      <option value="Hit from Rear">Hit from Rear</option>
      <option value="Hit from Side">Hit from Side</option>
    <option value="Side Swap">Side Swap</option>
    <option value="Ran off Road">Ran off Road</option>
    <option value="Hit Object in Road">Hit Object in Road</option>
      <option value="Hit Object Off Road">Hit Object Off Road</option>
      <option value="Hit Parked Vehicles">Hit Parked Vehicles</option>
    <option value="Hit Pedestrain">Hit Pedestrain</option>
    <option value="Hit Animal">Hit Animal</option>
    <option value="Hit Tree">Hit Tree</option>
    <option value="Skidding">Skidding</option>
    <option value="Self Hit">Self Hit</option>
    <option value="Overturning - Collision">Overturning - Collision</option>
    <option value="Overturning - No Collision">Overturning - No Collision</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>


<div class="coth" id="coth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label"  for="coth">Others</label>  
  <div class="col-md-6">
  <input id="coth" name="coth" placeholder="" value="<?php echo $coth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="jtype">Junction Type</label>
  <div class="col-md-6">
    <select id="jtype" name="jtype" class="form-control" value="<?php echo $junctiontype;?>" required>
        <option value="">Select the value</option>

     <option value="T Bend">T Bend</option>
      <option value="Y Bend">Y Intersection</option>
      <option value="Bridge">Bridge</option>
    <option value="Flyover">Flyover</option>
    <option value="Rail Crossing Manned">Rail Crossing Manned</option>
    <option value="Rail Crossing Unmanned">Rail Crossing Unmanned</option>
          <option value="Not a Junction">Not a Junction</option>
       <option value="X Junction">X Junction</option>
      <option value="4 Road">4 Road</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="joth" id="joth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="joth">Others</label>  
  <div class="col-md-6">
  <input id="joth" name="joth" placeholder="" value="<?php echo $joth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="jcon">Junction Control</label>
  <div class="col-md-6">
    <select id="jcon" name="jcon" class="form-control" value="<?php echo $junctioncontrol;?>" required>
    <option value="">Select the value</option>
      <option value="Not a Junction">Not a Junction</option>
      <option value="Police Officer">Police Officer</option>
      <option value="Traffic Signals">Traffic Signals</option>
    <option value="Flashing Signals">Flashing Signals</option>
    <option value="STOP Sign">STOP Sign</option>
    <option value="Uncontrolled">Uncontrolled</option>
          <option value="GIVEWAY Sign">GIVEWAY Sign</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="jcoth" id="jcoth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jcoth">Others</label>  
  <div class="col-md-6">
  <input id="jcoth" name="jcoth" placeholder="" value="<?php echo $jcoth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="rcat">Road Category</label>
  <div class="col-md-6">
    <select id="rcat" name="rcat" class="form-control" value="<?php echo $roadcategory;?>" required>
 <option value="">Select the value</option>
      <option value="Express Highway">Express Highway</option>
      <option value="National Highway">National Highway</option>
      <option value="State Highway">State Highway</option>
    <option value="MDR">MDR</option>
    <option value="ODR">ODR</option>
    <option value="VDR">VDR</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="roth" id="roth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="roth">Others</label>  
  <div class="col-md-6">
  <input id="roth" name="roth" placeholder="" value="<?php echo $roth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label" for="rnar">Road Narrowing</label>
  <div class="col-md-6">
    <select id="rnar" name="rnar" class="form-control" value="<?php echo $roadnarrowing;?>" required>
<option value="">Select the value</option>
       <option value="None">None</option>
      <option value="One - Way Bridge">One - Way Bridge</option>
      <option value="Two - Way Bridge">Two - Way Bridge</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="rnoth" id="rnoth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rnoth">Others</label>  
  <div class="col-md-6">
  <input id="rnoth" name="rnoth" placeholder="" value="<?php echo $rnoth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="lcon">Light Conditions</label>
  <div class="col-md-6">
    <select id="lcon" name="lcon" value="<?php echo $lightconditions;?>" class="form-control" required>
     <option value="">Select the value</option>
   <option value="Daylight">Daylight</option>
      <option value="Darkness - No Street Lights">Darkness - No Street Lights</option>
      <option value="Darkness - with Street Lights">Darkness - with Street Lights</option>
    <option value="Twilight">Twilight</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="loth" id="loth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="loth">Others</label>  
  <div class="col-md-6">
  <input id="loth" name="loth" placeholder="" value="<?php echo $loth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="ctype">Climate</label>
  <div class="col-md-6">
    <select id="cli" name="cli" class="form-control" value="<?php echo $climate;?>" required>
  <option value="">Select the value</option>
      <option value="Fine">Fine</option>
      <option value="Mist/Fog">Mist/Fog</option>
      <option value="Cloudy">Cloudy</option>
    <option value="Light Rain">Light Rain</option>
    <option value="Heavy Rain">Heavy Rain</option>
    <option value="Smoke Dust">Smoke Dust</option>
      <option value="Strong Wind">Strong Wind</option>
      <option value="Very Hot">Very Hot</option>
    <option value="Very Cold">Very Cold</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="cloth" id="cloth">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cloth">Others</label>  
  <div class="col-md-6">
  <input id="cloth" name="cloth" placeholder="" value="<?php echo $cloth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>







<div class="v1" id="v1">

<h3>Vehicle 1 Details </h3>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reg1">Temporary Registration Number/ Registration Number/ Unregistered(Engine no. & chassis no.)</label>  
  <div class="col-md-6">
  <input id="reg1" name="reg1" value="" placeholder="" value="<?php echo $regno;?>" class="form-control input-md" type="text" style="text-transform:uppercase" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="rcp1">RC Produced</label>
  <div class="col-md-6">
    <select id="rcp1" name="rcp1" value="<?php echo $rcproduced;?>" class="form-control">
     <option value="">Select the value</option>
   <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
</div>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="make1">Make</label>  
  <div class="col-md-6">
  <input id="make1" name="make1" value="<?php echo $make;?>" placeholder="" class="form-control input-md" type="text" style="text-transform:uppercase" onclick="validateForm6()">
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="classi1">Model/Maker's Classification</label>  
  <div class="col-md-6">
  <input id="classi1" name="classi1" placeholder="" value="<?php echo $model;?>" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>








<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oname1">Vehicle Owner Name</label>  
  <div class="col-md-6">
  <input id="oname1" name="oname1" placeholder="" value="<?php echo $vehicleowner;?>" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oaddress1">Vehicle Owner Address</label>  
  <div class="col-md-6">
  <input id="oaddress1" name="oaddress1" placeholder="" value="<?php echo $owneraddress;?>" class="form-control input-md" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="type1">Type</label>
  <div class="col-md-6">
    <select id="type1" name="type1" value="<?php echo $type;?>" class="form-control">
     <option value="">Select the value</option>
   <option value="Transport">Transport</option>
      <option value="Non - Transport">Non - Transport</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="class1">Class</label>
  <div class="col-md-6">
    <select id="class1" name="class1" value="<?php echo $class;?>" class="form-control" >
      <option value="">Select the value</option>
    <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
     <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>


<div class="cloth1" id="cloth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cloth1">Others</label>  
  <div class="col-md-6">
  <input id="cloth1" name="cloth1" placeholder="" value="<?php echo $cloth1;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




<div class="trans1"  id="trans1">
<div class="form-group">
  <label class="col-md-4 control-label" for="tt1">Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="tt1" name="tt1" value="<?php echo $transportvehicletype;?>" class="form-control">
     <option value="">Select the value</option>
   <option value="Ambulance">Ambulance</option>
      <option value="Aurticulated Vehicle">Aurticulated Vehicle</option>
      <option value="Auto Rickshaw">Auto Rickshaw</option>
    <option value="Call Taxi">Call Taxi</option>
    <option value="Educational Institution Vehicle">Educational Institution Vehicle</option>
    <option value="Goods Carriage">Goods Carriage</option>
      <option value="Hazardous Nature Carriage">Hazardous Nature Carriage</option>
    <option value="LMGV(NCP)">LMGV(NCP)</option>
      <option value="Maxi Cab">Maxi Cab</option>
    <option value="Meter Taxi">Meter Taxi</option>
    <option value="Mini Bus">Mini Bus</option>
    <option value="Omni Bus">Omni Bus</option>
    <option value="Private Service Vehicle">Private Service Vehicle</option>
    <option value="Share Auto">Share Auto</option>
    <option value="School Bus">School Bus</option>
      <option value="Stage Carriage">Stage Carriage</option>
    <option value="Stage Carriage Spare">Stage Carriage Spare</option>
      <option value="Tourist Taxi">Tourist Taxi</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="toth1" id="toth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="toth1">Others</label>  
  <div class="col-md-6">
  <input id="toth1" name="toth1" placeholder="" value="<?php echo $toth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="dst1" id="dst1">
<div class="form-group">
  <label class="col-md-4 control-label" for="st1">Stage Carriage Type</label>
  <div class="col-md-6">
    <select id="st1" name="st1" value="<?php echo $stagecarrier;?>" class="form-control">
      <option value="">Select the value</option>
    <option value="Mofussil">Mofussil</option>
       <option value="Town">Town</option>
       <option value="STU PCG Mofussil">STU PCG Mofussil</option>
       <option value="STU PCG Town">STU PCG Town</option>
    </select>
  </div>
</div>
</div>

<div class="dmof1" id="dmof1">
<div class="form-group">
  <label class="col-md-4 control-label"  for="mof1">Mofussil Type</label>
  <div class="col-md-6">
    <select id="mof1" name="mof1" value="<?php echo $mofussil;?>" class="form-control">
 <option value="">Select the value</option>
      <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>

<div class="dtow1" id="dtow1">
<div class="form-group">
  <label class="col-md-4 control-label" for="tow1">Town Type</label>
  <div class="col-md-6">
    <select id="tow1" name="tow1" value="<?php echo $towntype;?>" class="form-control">
 <option value="">Select the value</option>
      <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>




<!-- Text input-->

<div class="form-group" id="perv1">
  <label class="col-md-4 control-label" for="pv1">Permit Validity</label>  
  <div class="col-md-6">
  <input id="pv1" name="pv1" placeholder="dd-mm-yyyy" value="<?php echo $permitvalidity;?>" class="form-control input-md" type="Date">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fit1">Fitness Certificate issued date</label>  
  <div class="col-md-6">
  <input id="fit1" name="fit1" placeholder="dd-mm-yyyy" value="<?php echo $fitnesscertificateissueddate;?>" class="form-control input-md" type="Date" onclick="validateForm7()">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="ft1">Fitness Certificate Validity</label>  
  <div class="col-md-6">
  <input id="ft1" name="ft1" placeholder="dd-mm-yyyy" value="<?php echo $fitnesscertificatevalidity;?>" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pct1">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pct1" name="pct1" placeholder="dd-mm-yyyy" value="<?php echo $pollutioncertificatevalidity;?>" class="form-control input-md" type="Date">
  </div>
</div>





</div>



<div class="nontrans1" id="nontrans1">

<div class="form-group">
  <label class="col-md-4 control-label" for="ntt1">Non - Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="ntt1" name="ntt1" value="<?php echo $nontransport;?>" class="form-control">
<option value="">Select the value</option>
     <option value="Agriculture Tractor">Agriculture Tractor</option>
      <option value="Animal Drawn Vehicle">Animal Drawn Vehicle</option>
      <option value="Battery Operated Vehicle">Battery Operated Vehicle </option>
    <option value="Bicycle">Bicycle</option>
    <option value="Car">Car</option>
    <option value="Hand Drawn Vehicle">Hand Drawn Vehicle</option>
          <option value="Jeep">Jeep</option>
          <option value="Moped">Moped</option>
    <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
     <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
    <option value="Scooter">Scooter</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="ntoth1" id="ntoth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ntoth1">Others</label>  
  <div class="col-md-6">
  <input id="ntoth1" name="ntoth1" placeholder="" value="<?php echo $ntoth1;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rc1">RC Validity</label>  
  <div class="col-md-6">
  <input id="rc1" name="rc1" placeholder="dd-mm-yyyy" value="<?php echo $rcvalidity;?>" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pcnt1">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pcnt1" name="pcnt1" placeholder="dd-mm-yyyy" class="form-control input-md" value="<?php echo $pollutioncertificatevalid;?>" type="Date">
  </div>
</div>



</div>


<!--<div class="form-group" >
  <label class="col-md-4 control-label" for="ins1">Insurance Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ins1" name="ins1" value="1">    Available
  </div>
</div>-->

<div class="form-group">
  <label class="col-md-4 control-label" for="ins1">Insurance Availability</label>
  <div class="col-md-6">
    <select id="ins1" name="ins1" value="<?php echo $insuranceavailability;?>" class="form-control">
      <option value="Select Insurance Availability">--Select Insurance Availability--</option>
       <option value="Available">Produced</option>
      <option value="Not Available">Not Produced</option>
      <option value="Exempted">Exempted</option>
    </select>
  </div>
</div>




<div class="form-group" id="insur1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="iv1">Insurance Validity</label>  
  <div class="col-md-6">
  <input id="iv1" name="iv1" placeholder="dd-mm-yyyy" value="<?php echo $insurancevalidity;?>" class="form-control input-md" type="text" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ic1">Insurance Company name and address</label>  
  <div class="col-md-6">
  <input id="ic1" name="ic1" placeholder="" class="form-control input-md" value="<?php echo $insurancecompanydetail;?>" type="text" onclick="validateForm8()" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pn1">Policy Number</label>  
  <div class="col-md-6">
  <input id="pn1" name="pn1" placeholder=" " value="<?php echo $policynumber;?>" class="form-control input-md" type="text" >
  </div>
</div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="ma1">Manoeuvre</label>
  <div class="col-md-6">
    <select id="ma1" name="ma1" value="<?php echo $Manoeuvre;?>" class="form-control" >
      <option value="">Select the value</option>
    <option value="Turning Right">Turning Right</option>
      <option value="Turning Left">Turning Left</option>
      <option value="Making U Turn">Making U Turn</option>
    <option value="Temporarily held up">Temporarily held up</option>
    <option value="Parked">Parked</option>
    <option value="Sudden Stop">Sudden Stop</option>
      <option value="Sudden Start">Sudden Start</option>
      <option value="Overtaking From Left">Overtaking From Left</option>
    <option value="Starting From Near Side">Starting From Near Side</option>
    <option value="Starting From off-side">Starting From off-side</option>
    <option value="Reversing">Reversing</option>
    <option value="Over took on Curve">Over took on Curve</option>
           <option value="Others">Others</option>

    </select>
  </div>
</div>

<div class="moth1" id="moth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="moth1">Others</label>  
  <div class="col-md-6">
  <input id="moth1" name="moth1" placeholder="" value="<?php echo $moth1;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="man1">Vehicle Damage Level</label>
  <div class="col-md-6">
    <select id="man1" name="man1" value="<?php echo $vehicledamagelevel;?>" class="form-control">
<option value="">Select the value</option>
       <option value="No Damage">No Damage</option>
     <option value="Minor Damage">Minor Damage</option>
      <option value="Multiple Damage">Multiple Damage</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="vdoth1" id="vdoth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vdoth1">Others</label>  
  <div class="col-md-6">
  <input id="vdoth1" name="vdoth1" placeholder="" value="<?php echo $vdoth;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="vp">Trade Plate Availability</label>
  <div class="col-md-6">
    <select id="vp" name="vp" value="<?php echo $tradeplateavailability;?>" class="form-control">
        <option value="">Select the value</option>
      <option value="No">No</option>
       <option value="Yes">Yes</option>
      <option value="Not Applicable">Not Applicable</option>

      
    </select>
  </div>
</div>

<div class="tpoth1" id="tpoth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tpoth1">Reason</label>  
  <div class="col-md-6">
  <input id="tpoth1" name="tpoth1" placeholder="" value="<?php echo $reason;?>" class="form-control input-md" type="text">
    
  </div>
</div>
      
</div>





</div>



<h3>Driver 1 Details </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dname1">Driver Name</label>  
  <div class="col-md-6">
  <input id="dname1" name="dname1" placeholder="" value="<?php echo $drivername;?>" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="daddress1">Driver Address</label>  
  <div class="col-md-6">
  <input id="daddress1" name="daddress1" placeholder="" value="<?php echo $driveraddress;?>" class="form-control input-md" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="gen1">Gender</label>
  <div class="col-md-6">
    <select id="gen1" name="gen1" value="<?php echo $gender;?>" class="form-control">
  <option value="">Select the value</option>
     <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
    </select>
     <p><font color="#00cc99"><center><b>***Kindly enter the date of accident before giving date of birth of the driver</b></center></font></p>
   <p><font color="#ff471a"><center><b>***Directly type the value or by calendar pick year across year 2006(for driver date of birth)</b></center></font></p>
 
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="date1">Date of Birth</label>  
  <div class="col-md-6">
  <input type='date' name='date1' class="form-control input-md" value="<?php echo $dob;?>" id='date1' OnChange='getAge()'/>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="age1">Age</label>  
  <div class="col-md-6">
  <input type='text' name='age1' class="form-control input-md" value="<?php echo $age;?>" id='age1' readonly/>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="din1">Driver Injury</label>
  <div class="col-md-6">
    <select id="din1" name="din1" value="<?php echo $driverinjury;?>" class="form-control">
    <option value="">Select the value</option>
       <option value="Fatal">Fatal</option>
      <option value="Grievous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
     <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="dinoth1" id="dinoth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" value="<?php echo $dinoth1;?>" for="dinoth1">Others</label>  
  <div class="col-md-6">
  <input id="dinoth1" name="dinoth1" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="derr1">Driver Error</label>
  <div class="col-md-6">
    <select id="derr1" name="derr1" value="<?php echo $drivererror;?>" class="form-control">
<option value="">Select the value</option>
    <option value="Abandoning Vehicle">Abandoning Vehicle </option>
    <option value="Abrupt Brake">Abrupt Brake</option>
    <option value="Aggressive Driving">Aggressive Driving</option>
    <option value="Assault on Passengers">Assault on Passengers</option>
    <option value="Distance from Vehicle in Front">Distance from Vehicle in Front</option>   
    <option value="Drunken driving">Drunken driving</option>
    <option value="Fatal Accidents">Fatal Accidents</option>
    <option value="None">None</option>
    <option value="Others">Others</option>
    <option value="Overload by Goods">Overload by Goods</option>
    <option value="Projection of Loads">Projection of Loads</option>
    <option value="Restriction to Carriage of Dangerous Substances">Restriction to Carriage of Dangerous Substances</option>
    <option value="Speed Exceeding the Specified Limit">Speed Exceeding the Specified Limit</option>
    <option value="Use of cellphone">Use of cellphone</option>
    <option value="Used the Vehicle in Unsafe Condition">Used the Vehicle in Unsafe Condition</option>
    <option value="Violation of Road Regulations Rule">Violation of Road Regulations Rule</option>
      </select>
  </div>
</div>

<div class="deoth1" id="deoth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deoth1">Others</label>  
  <div class="col-md-6">
  <input id="deoth1" name="deoth1" placeholder="" value="<?php echo $deoth1;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

 

<!--<div class="form-group">
  <label class="col-md-4 control-label" for="ln1">License Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ln1" name="ln1" value="1">    Available
  </div>
</div>-->


<div class="form-group">
  <label class="col-md-4 control-label" for="l1">License Details</label>
  <div class="col-md-6">
    <select id="l1" name="l1" value="<?php echo $licensedetails;?>" class="form-control">
 <option value="Select License Availability">--Select License Availability--</option>
       <option value="Produced">Produced</option>
      <option value="Not Produced">Not Produced</option>
      <option value="Not Obtained">Not Obtained</option>
    </select>
  </div>
</div>



<div class = "ldd1" id="ldd1">
<h3>License Details(1) </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dl1">License Number</label>  
  <div class="col-md-6">
  <input id="dl1" name="dl1" placeholder="" value="<?php echo $licensenumber;?>" class="form-control input-md" type="text" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cl1">Class of vehicle</label>
  <div class="col-md-6">
   
    <select id="cl1" name="cl1" class="form-control" value="<?php echo $classofvehicle;?>" onclick="validateForm()">
      <option value="">Select the value</option>
    <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
    <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="lcloth1" id="lcloth1">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lcloth1">Others</label>  
  <div class="col-md-6">
  <input id="lcloth1" name="lcloth1" placeholder="" value="<?php echo $lcloth1;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<div class="form-group" id="b1">
  <label class="col-md-4 control-label" for="b1">Badge Number</label>  
  <div class="col-md-6">
  <input id="b1" name="b1" placeholder="" class="form-control input-md" value="<?php echo $badgenumber;?>" type="text" >
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dob">License Issued Date</label>  
  <div class="col-md-6">
 
  <input type='date' name='dob' placeholder='yyyy-mm-dd' value="<?php echo $licenseissueddate;?>" class="form-control input-md" id='dob' OnChange='getAge5()'/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dexp1">Driver Experience</label>  
  <div class="col-md-6">
  <input type='text' name='dexp1' class="form-control input-md" value="<?php echo $driverexperience;?>" id='dexp1'/>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dlv1">License Validity</label>  
  <div class="col-md-6">
  <input id="dlv1" name="dlv1" placeholder="dd-mm-yyyy" value="<?php echo $licensevalidity;?>" class="form-control input-md" type="Date">
  </div>
</div>

</div>






<div class="v2" id="v2">
<h3>Vehicle 2 Details </h3>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reg2">Temporary Registration Number/ Registration Number/ Unregistered(Engine no. & chassis no.)</label>  
  <div class="col-md-6">
  <input id="reg2" name="reg2" placeholder="" value="<?php echo $reg2;?>" class="form-control input-md" type="text" style="text-transform:uppercase">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="ch2"><font size="4" color="#DC143C">If Vehicle-2 Details not Available</font></label>  
  <div class="col-md-6">
  <input type="checkbox" id="ch2" name="ch2" value="1" onclick="validateForm6()">    
  </div>
</div>


<div class="chh2" id="chh2">

  

<div class="form-group">
  <label class="col-md-4 control-label" for="rcp2">RC Produced</label>
  <div class="col-md-6">
    <select id="rcp2" name="rcp2" value="<?php echo $rcproduced2;?>" class="form-control">
     <option value="">Select the value</option>
   <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="make2">Make</label>  
  <div class="col-md-6">
  <input id="make2" name="make2" placeholder="" value="<?php echo $make2;?>" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="classi2">Model/Maker's Classification</label>  
  <div class="col-md-6">
  <input id="classi2" name="classi2" placeholder="" value="<?php echo $model2;?>" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>





<!--<div class="form-group">
  <label class="col-md-4 control-label" for="speed2">Speed Governor</label>
  <div class="col-md-6">
    <select id="speed2" name="speed2" class="form-control">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="abs2">Anti-Braking System(ABS)</label>
  <div class="col-md-6">
    <select id="abs2" name="abs2" class="form-control">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
</div>-->



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oname2">Vehicle Owner Name</label>  
  <div class="col-md-6">
  <input id="oname2" name="oname2" placeholder="" value="<?php echo $vehicleowner2;?>" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oaddress2">Vehicle Owner Address</label>  
  <div class="col-md-6">
  <input id="oaddress2" name="oaddress2" placeholder="" value="<?php echo $owneraddress2;?>" class="form-control input-md" type="text">
  </div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label" for="type2">Type</label>
  <div class="col-md-6">
    <select id="type2" name="type2" value="<?php echo $type2;?>" class="form-control">
     <option value="">Select the value</option>
     <option value="Transport">Transport</option>
      <option value="Non - Transport">Non - Transport</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="class2">Class</label>
  <div class="col-md-6">
    <select id="class2" name="class2" value="<?php echo $class2;?>" class="form-control">
      <option value="">Select the value</option>
    <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
     <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="cloth2" id="cloth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" value="<?php echo $cloth2;?>" for="cloth2">Others</label>  
  <div class="col-md-6">
  <input id="cloth2" name="cloth2" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="trans2"  id="trans2">
<div class="form-group">
  <label class="col-md-4 control-label" for="tt2">Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="tt2" name="tt2" value="<?php echo $transportvehicletype2;?>" class="form-control">
      <option value="">Select the value</option>
      <option value="Ambulance">Ambulance</option>
      <option value="Aurticulated Vehicle">Aurticulated Vehicle</option>
      <option value="Auto Rickshaw">Auto Rickshaw</option>
    <option value="Call Taxi">Call Taxi</option>
    <option value="Educational Institution Vehicle">Educational Institution Vehicle</option>
    <option value="Goods Carriage">Goods Carriage</option>
      <option value="Hazardous Nature Carriage">Hazardous Nature Carriage</option>
      <option value="LMGV(NCP)">LMGV(NCP)</option>
    <option value="Maxi Cab">Maxi Cab</option>
    <option value="Meter Taxi">Meter Taxi</option>
    <option value="Mini Bus">Mini Bus</option>
    <option value="Omni Bus">Omni Bus</option>
    <option value="Private Service Vehicle">Private Service Vehicle</option>
    <option value="Share Auto">Share Auto</option>
    <option value="School Bus">School Bus</option>
      <option value="Stage Carriage">Stage Carriage</option>
     <option value="Stage Carriage Spare">Stage Carriage Spare</option>
      <option value="Tourist Taxi">Tourist Taxi</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="toth2" id="toth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="toth2">Others</label>  
  <div class="col-md-6">
  <input id="toth2" name="toth2" placeholder="" value="<?php echo $toth2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="dst2" id="dst2">
<div class="form-group">
  <label class="col-md-4 control-label" for="st2">Stage Carriage Type</label>
  <div class="col-md-6">
    <select id="st2" name="st2" value="<?php echo $stagecarrier2;?>" class="form-control">
      <option value="">Select the value</option>
           <option value="Mofussil">Mofussil</option>
           <option value="Town">Town</option>
           <option value="STU PCG Mofussil">STU PCG Mofussil</option>
           <option value="STU PCG Town">STU PCG Town</option>
    </select>
  </div>
</div>
</div>

<div class="dmof2" id="dmof2">
<div class="form-group">
  <label class="col-md-4 control-label" for="mof2">Mofussil Type</label>
  <div class="col-md-6">
    <select id="mof2" name="mof2" value="<?php echo $mofussil2;?>" class="form-control">
<option value="">Select the value</option>
       <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>

<div class="dtow2" id="dtow2">
<div class="form-group">
  <label class="col-md-4 control-label" for="tow2">Town Type</label>
  <div class="col-md-6">
    <select id="tow2" name="tow2" value="<?php echo $towntype2;?>" class="form-control">
<option value="">Select the value</option>
       <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>



<!-- Text input-->
<div class="form-group" id="perv2" >
  <label class="col-md-4 control-label" for="pv2">Permit Validity</label>  
  <div class="col-md-6">
  <input id="pv2" name="pv2" placeholder="dd-mm-yyyy" value="<?php echo $permitvalidity2;?>" class="form-control input-md" type="Date">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fit2">Fitness Certificate issued date</label>  
  <div class="col-md-6">
  <input id="fit2" name="fit2" placeholder="dd-mm-yyyy" value="<?php echo $fitnesscertificateissueddate;?>" class="form-control input-md" type="Date" onclick="validateForm7()">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="ft2">Fitness Certificate Validity</label>  
  <div class="col-md-6">
  <input id="ft2" name="ft2" placeholder="dd-mm-yyyy" value="<?php echo $fitnesscertificatevalidity2;?>" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pct2">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pct2" name="pct2" placeholder="dd-mm-yyyy" value="<?php echo $pollutioncertificatevalidity2;?>" class="form-control input-md" type="Date">
  </div>
</div>




</div>


<div class="nontrans2" id="nontrans2">

<div class="form-group">
  <label class="col-md-4 control-label" for="ntt2">Non - Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="ntt2" name="ntt2" value="<?php echo $nontransport2;?>" class="form-control">
<option value="">Select the value</option>
     <option value="Agriculture Tractor">Agriculture Tractor</option>
      <option value="Animal Drawn Vehicle">Animal Drawn Vehicle</option>
      <option value="Battery Operated Vehicle">Battery Operated Vehicle </option>
    <option value="Bicycle">Bicycle</option>
    <option value="Car">Car</option>
    <option value="Hand Drawn Vehicle">Hand Drawn Vehicle</option>
          <option value="Jeep">Jeep</option>
          <option value="Moped">Moped</option>
    <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
     <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
    <option value="Scooter">Scooter</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="ntoth2" id="ntoth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ntoth2">Others</label>  
  <div class="col-md-6">
  <input id="ntoth2" name="ntoth2" value="<?php echo $ntoth2;?>" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rc2">RC Validity</label>  
  <div class="col-md-6">
  <input id="rc2" name="rc2" placeholder="dd-mm-yyyy" value="<?php echo $rcvalidity2;?>" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pcnt2">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pcnt2" name="pcnt2" placeholder="dd-mm-yyyy" value="<?php echo $pollutioncertificatevalidity2;?>" class="form-control input-md" type="text">
  </div>
</div>



</div>


<!--<div class="form-group" >
  <label class="col-md-4 control-label" for="ins2">Insurance Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ins2" name="ins2" value="1">    Available
  </div>
</div>-->


<div class="form-group">
  <label class="col-md-4 control-label" for="ins2">Insurance Availability</label>
  <div class="col-md-6">
    <select id="ins2" name="ins2" value="<?php echo $insuranceavailability2;?>" class="form-control">
 <option value="Select License Availability">--Select Insurance Availability--</option>
       <option value="Available">Produced</option>
      <option value="Not Available">Not Produced</option>
      <option value="Exempted">Exempted</option>
    </select>
  </div>
</div>




<div class="form-group" id="insur2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="iv2">Insurance Validity</label>  
  <div class="col-md-6">
  <input id="iv2" name="iv2" placeholder="dd-mm-yyyy" value="<?php echo $insurancevalidity2;?>" class="form-control input-md" type="text" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ic2"> Insurance Company name and address</label>  
  <div class="col-md-6">
  <input id="ic2" name="ic2" placeholder="" value="<?php echo $insurancecompanydetail2;?>" class="form-control input-md" type="text" onclick="validateForm8()" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pn2">Policy Number</label>  
  <div class="col-md-6">
  <input id="pn2" name="pn2" placeholder=" "value="<?php echo $policynumber2;?>" class="form-control input-md" type="text" >
  </div>
</div>
</div>







<div class="form-group">
  <label class="col-md-4 control-label" for="ma2">Manoeuvre</label>
  <div class="col-md-6">
    <select id="ma2" name="ma2" value="<?php echo $manoeuvre2;?>" class="form-control" >
     <option value="">Select the value</option>
   <option value="Turning Right">Turning Right</option>
      <option value="Turning Left">Turning Left</option>
      <option value="Making U Turn">Making U Turn</option>
    <option value="Temporarily held up">Temporarily held up</option>
    <option value="Parked">Parked</option>
    <option value="Sudden Stop">Sudden Stop</option>
      <option value="Sudden Start">Sudden Start</option>
      <option value="Overtaking From Left">Overtaking From Left</option>
    <option value="Starting From Near Side">Starting From Near Side</option>
    <option value="Starting From off-side">Starting From off-side</option>
    <option value="Reversing">Reversing</option>
    <option value="Over took on Curve">Over took on Curve</option>
    <option value="Others">Others</option>

    </select>
  </div>
</div>

<div class="moth2" id="moth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="moth2">Others</label>  
  <div class="col-md-6">
  <input id="moth2" name="moth2" placeholder="" value="<?php echo $moth2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="man2">Vehicle Damage Level</label>
  <div class="col-md-6">
    <select id="man2" name="man2" value="<?php echo $vehicledamagelevel2;?>" class="form-control">
     <option value="">Select the value</option>
       <option value="Minor Damage">Minor Damage</option>
     <option value="No Damage">No Damage</option>
      <option value="Multiple Damage">Multiple Damage</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="vdoth2" id="vdoth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vdoth2">Others</label>  
  <div class="col-md-6">
  <input id="vdoth2" name="vdoth2" placeholder="" value="<?php echo $vdoth2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="tp2">Trade Plate Availability</label>
  <div class="col-md-6">
    <select id="tp2" name="tp2" value="<?php echo $tradeplateavailability2;?>" class="form-control">
    <option value="">Select the value</option>
  <option value="No">No</option>
       <option value="Yes">Yes</option>
     <option value="Not Applicable">Not Applicable</option>

      
    </select>
  </div>
</div>

<div class="tpoth2" id="tpoth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tpoth2">Reason</label>  
  <div class="col-md-6">
  <input id="tpoth2" name="tpoth2" placeholder="" value="<?php echo $reason2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




</div>

<h3>Driver 2 Details </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dname2">Driver Name</label>  
  <div class="col-md-6">
  <input id="dname2" name="dname2" placeholder="" value="<?php echo $drivername2;?>" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="daddress2">Driver Address</label>  
  <div class="col-md-6">
  <input id="daddress2" name="daddress2" placeholder="" value="<?php echo $driveraddress2;?>" class="form-control input-md" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="gen2">Gender</label>
  <div class="col-md-6">
    <select id="gen2" name="gen2" value="<?php echo $gender2;?>" class="form-control">
     <option value="">Select the value</option>
    <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
    </select>
    <p><font color="#00cc99"><center><b>***Kindly enter the date of accident before giving date of birth of the driver</b></center></font></p>
   <p><font color="#ff471a"><center><b>***Directly type the value or by calendar pick year across year 2006(for driver date of birth)</b></center></font></p>
 
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="date2">Date of Birth</label>  
  <div class="col-md-6">
  <input type='Date' name='date2' value="<?php echo $dob2;?>" class="form-control input-md" id='date2' OnChange='getAge2()'/>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="age2">Age</label>  
  <div class="col-md-6">
  <input type='text' name='age2' value="<?php echo $age2;?>" class="form-control input-md" id='age2'/>
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="din2">Driver Injury</label>
  <div class="col-md-6">
    <select id="din2" name="din2" value="<?php echo $driverinjury2;?>" class="form-control">
<option value="">Select the value</option>
       <option value="Fatal">Fatal</option>
      <option value="Greivous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
     <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="dinoth2" id="dinoth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" value="<?php echo $dinoth2;?>" for="dinoth2">Others</label>  
  <div class="col-md-6">
  <input id="dinoth2" name="dinoth2" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="derr2">Driver Error</label>
  <div class="col-md-6">
    <select id="derr2" name="derr2" value="<?php echo $drivererror2;?>" class="form-control">
<option value="">Select the value</option>
     <option value="Abandoning Vehicle">Abandoning Vehicle </option>
     <option value="Abrupt Brake">Abrupt Brake</option>
     <option value="Aggressive Driving">Aggressive Driving</option>
     <option value="Assault on Passengers">Assault on Passengers</option>
     <option value="Distance from Vehicle in Front">Distance from Vehicle in Front</option>   
     <option value="Drunken driving">Drunken driving</option>
     <option value="Fatal Accidents">Fatal Accidents</option>
     <option value="None">None</option>
     <option value="Others">Others</option>
     <option value="Overload by Goods">Overload by Goods</option>
     <option value="Projection of Loads">Projection of Loads</option>
     <option value="Restriction to Carriage of Dangerous Substances">Restriction to Carriage of Dangerous Substances</option>
     <option value="Speed Exceeding the Specified Limit">Speed Exceeding the Specified Limit</option>
     <option value="Use of cellphone">Use of cellphone</option>
     <option value="Used the Vehicle in Unsafe Condition">Used the Vehicle in Unsafe Condition</option>
     <option value="Violation of Road Regulations Rule">Violation of Road Regulations Rule</option>
    </select>
  </div>
</div>
<div class="deoth2" id="deoth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deoth2">Others</label>  
  <div class="col-md-6">
  <input id="deoth2" name="deoth2" placeholder="" value="<?php echo $deoth2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!--<div class="form-group">
  <label class="col-md-4 control-label" for="ln2">License Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ln2" name="ln2" value="1">    Available
  </div>
</div>-->

<div class="form-group">
  <label class="col-md-4 control-label" for="l2">License Details</label>
  <div class="col-md-6">
    <select id="l2" name="l2" value="<?php echo $licensedetails2;?>" class="form-control">
 <option value="Select License Availability">--Select License Availability--</option>
       <option value="Produced">Produced</option>
      <option value="Not Produced">Not Produced</option>
      <option value="Not Obtained">Not Obtained</option>
    </select>
  </div>
</div>


<div class = "ldd2" id="ldd2">
<h3>License Details(2) </h3>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dl2">License Number</label>  
  <div class="col-md-6">
  <input id="dl2" name="dl2" placeholder="" value="<?php echo $licensenumber2;?>" class="form-control input-md" type="text">
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="cl2">Class of vehicle</label>
  <div class="col-md-6">
    <select id="cl2" name="cl2" value="<?php echo $classofvehicle2;?>" class="form-control" onclick="validateForm9()">
<option value="">Select the value</option>
<option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
     <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="lcloth2" id="lcloth2">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lcloth2">Others</label>  
  <div class="col-md-6">
  <input id="lcloth2" name="lcloth2" placeholder="" value="<?php echo $lcloth2;?>" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<div class="form-group" id="b2">
  <label class="col-md-4 control-label" for="b2">Badge Number</label>  
  <div class="col-md-6">
  <input id="b2" name="b2" placeholder="" value="<?php echo $badgenumber2;?>" class="form-control input-md" type="text" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dob2">License Issued Date</label>  
  <div class="col-md-6">
 
  <input type='Date' name='dob2' placeholder='yyyy-mm-dd' value="<?php echo $licenseissueddate2;?>" class="form-control input-md" id='dob2' OnChange='getAge6()'/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dexp2">Driver Experience</label>  
  <div class="col-md-6">
  <input type='text' name='dexp2' value="<?php echo $driverexperience2;?>" class="form-control input-md" id='dexp2'/>
  </div>
</div>







<div class="form-group">
  <label class="col-md-4 control-label" for="dlv2">License Validity</label>  
  <div class="col-md-6">
  <input id="dlv2" name="dlv2" placeholder="dd-mm-yyyy" value="<?php echo $licensevalidity2;?>" class="form-control input-md" type="Date">
  </div>
</div>
</div>

</div>

</div>

<div class="v3" id="v3">

<h3>Vehicle 3 Details </h3>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reg3">Temporary Registration Number/ Registration Number/ Unregistered(Engine no. & chassis no.)</label>  
  <div class="col-md-6">
  <input id="reg3" name="reg3" placeholder="" value="" class="form-control input-md" type="text" style="text-transform:uppercase">
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="ch3"><font size="4" color="#DC143C">If Vehicle-3 Details not Available</font></label>  
  <div class="col-md-6">
  <input type="checkbox" id="ch3" name="ch3" value="1" onclick="validateForm6()">    
  </div>
</div>





<div class="chh3" id="chh3">

<div class="form-group">
  <label class="col-md-4 control-label" for="itime3">Inspection Time for Vehicle 3</label>  
  <div class="col-md-6">
  <input id="itime3" name="itime3" placeholder="hh:mm" class="itime3 form-control input-md" type="text">
  <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="timedropper.js"></script>
<script>$( "#itime3" ).timeDropper();</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </div>
  <div class="col-md-1">
  <p><b>Hours(24hrs format)</b></p>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="rcp3">RC Produced</label>
  <div class="col-md-6">
    <select id="rcp3" name="rcp3" class="form-control">
     <option value="">Select the value</option>
   <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="make3">Make</label>  
  <div class="col-md-6">
  <input id="make3" name="make3" placeholder="" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="classi3">Model/Maker's Classification</label>  
  <div class="col-md-6">
  <input id="classi3" name="classi3" placeholder="" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oname3">Vehicle Owner Name</label>  
  <div class="col-md-6">
  <input id="oname3" name="oname3" placeholder="" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oaddress3">Vehicle Owner Address</label>  
  <div class="col-md-6">
  <input id="oaddress3" name="oaddress3" placeholder="" class="form-control input-md" type="text">
  </div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label" for="type3">Type</label>
  <div class="col-md-6">
    <select id="type3" name="type3" class="form-control">
     <option value="">Select the value</option>
     <option value="Transport">Transport</option>
      <option value="Non - Transport">Non - Transport</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="class3">Class</label>
  <div class="col-md-6">
    <select id="class3" name="class3" class="form-control">
     <option value="">Select the value</option>
   <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
    <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="cloth3" id="cloth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cloth3">Others</label>  
  <div class="col-md-6">
  <input id="cloth3" name="cloth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




<div class="trans3"  id="trans3">
<div class="form-group">
  <label class="col-md-4 control-label" for="tt3">Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="tt3" name="tt3" class="form-control">
      <option value="">Select the value</option>
      <option value="Ambulance">Ambulance</option>
      <option value="Aurticulated Vehicle">Aurticulated Vehicle</option>
      <option value="Auto Rickshaw">Auto Rickshaw</option>
    <option value="Call Taxi">Call Taxi</option>
    <option value="Educational Institution Vehicle">Educational Institution Vehicle</option>
    <option value="Goods Carriage">Goods Carriage</option>
      <option value="Hazardous Nature Carriage">Hazardous Nature Carriage</option>
      <option value="LMGV(NCP)">LMGV(NCP)</option>
    <option value="Maxi Cab">Maxi Cab</option>
    <option value="Meter Taxi">Meter Taxi</option>
    <option value="Mini Bus">Mini Bus</option>
    <option value="Omni Bus">Omni Bus</option>
    <option value="Private Service Vehicle">Private Service Vehicle</option>
    <option value="Share Auto">Share Auto</option>
    <option value="School Bus">School Bus</option>
      <option value="Stage Carriage">Stage Carriage</option>
     <option value="Stage Carriage Spare">Stage Carriage Spare</option>
      <option value="Tourist Taxi">Tourist Taxi</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="toth3" id="toth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="toth3">Others</label>  
  <div class="col-md-6">
  <input id="toth3" name="toth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="dst3" id="dst3">
<div class="form-group">
  <label class="col-md-4 control-label" for="st3">Stage Carriage Type</label>
  <div class="col-md-6">
    <select id="st3" name="st3" class="form-control">
      <option value="">Select the value</option>
           <option value="Mofussil">Mofussil</option>
           <option value="Town">Town</option>
           <option value="STU PCG Mofussil">STU PCG Mofussil</option>
           <option value="STU PCG Town">STU PCG Town</option>
    </select>
  </div>
</div>
</div>

<div class="dmof3" id="dmof3">
<div class="form-group">
  <label class="col-md-4 control-label" for="mof3">Mofussil Type</label>
  <div class="col-md-6">
    <select id="mof3" name="mof3" class="form-control">
<option value="">Select the value</option>
       <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>

<div class="dtow3" id="dtow3">
<div class="form-group">
  <label class="col-md-4 control-label" for="tow3">Town Type</label>
  <div class="col-md-6">
    <select id="tow3" name="tow3" class="form-control">
    <option value="">Select the value</option>
       <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>



<!-- Text input-->
<div class="form-group" id="perv3">
  <label class="col-md-4 control-label" for="pv3">Permit Validity</label>  
  <div class="col-md-6">
  <input id="pv3" name="pv3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fit3">Fitness Certificate issued date</label>  
  <div class="col-md-6">
  <input id="fit3" name="fit3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date" onclick="validateForm7()">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="ft3">Fitness Certificate Validity</label>  
  <div class="col-md-6">
  <input id="ft3" name="ft3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pct3">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pct3" name="pct3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>



</div>


<div class="nontrans3" id="nontrans3">

<div class="form-group">
  <label class="col-md-4 control-label" for="ntt3">Non - Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="ntt3" name="ntt3" class="form-control">
      
     <option value="Agriculture Tractor">Agriculture Tractor</option>
      <option value="Animal Drawn Vehicle">Animal Drawn Vehicle</option>
      <option value="Battery Operated Vehicle">Battery Operated Vehicle </option>
    <option value="Bicycle">Bicycle</option>
    <option value="Car">Car</option>
    <option value="Hand Drawn Vehicle">Hand Drawn Vehicle</option>
          <option value="Jeep">Jeep</option>
          <option value="Moped">Moped</option>
    <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
     <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
    <option value="Scooter">Scooter</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="ntoth3" id="ntoth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ntoth3">Others</label>  
  <div class="col-md-6">
  <input id="ntoth3" name="ntoth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rc3">RC Validity</label>  
  <div class="col-md-6">
  <input id="rc3" name="rc3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pcnt3">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pcnt3" name="pcnt3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>




</div>


<!--<div class="form-group" >
  <label class="col-md-4 control-label" for="ins3">Insurance Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ins3" name="ins3" value="1">    Available
  </div>
</div>-->

<div class="form-group">
  <label class="col-md-4 control-label" for="ins3">Insurance Availability</label>
  <div class="col-md-6">
    <select id="ins3" name="ins3" class="form-control">
 <option value="Select License Availability">--Select Insurance Availability--</option>
       <option value="Available">Produced</option>
      <option value="Not Available">Not Produced</option>
      <option value="Exempted">Exempted</option>
    </select>
  </div>
</div>



<div class="form-group" id="insur3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="iv3">Insurance Validity</label>  
  <div class="col-md-6">
  <input id="iv3" name="iv3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ic3"> Insurance Company name and address</label>  
  <div class="col-md-6">
  <input id="ic3" name="ic3" placeholder="" class="form-control input-md" type="text" onclick="validateForm8()" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pn3">Policy Number</label>  
  <div class="col-md-6">
  <input id="pn3" name="pn3" placeholder=" " class="form-control input-md" type="text" >
  </div>
</div>
</div>







<div class="form-group">
  <label class="col-md-4 control-label" for="ma3">Manoeuvre</label>
  <div class="col-md-6">
    <select id="ma3" name="ma3" class="form-control" >
      <option value="">Select the value</option>
    <option value="Turning Right">Turning Right</option>
      <option value="Turning Left">Turning Left</option>
      <option value="Making U Turn">Making U Turn</option>
    <option value="Temporarily held up">Temporarily held up</option>
    <option value="Parked">Parked</option>
    <option value="Sudden Stop">Sudden Stop</option>
      <option value="Sudden Start">Sudden Start</option>
      <option value="Overtaking From Left">Overtaking From Left</option>
    <option value="Starting From Near Side">Starting From Near Side</option>
    <option value="Starting From off-side">Starting From off-side</option>
    <option value="Reversing">Reversing</option>
    <option value="Over took on Curve">Over took on Curve</option>
    <option value="Others">Others</option>

    </select>
  </div>
</div>

<div class="moth3" id="moth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="moth3">Others</label>  
  <div class="col-md-6">
  <input id="moth3" name="moth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="man3">Vehicle Damage Level</label>
  <div class="col-md-6">
    <select id="man3" name="man3" class="form-control">
     <option value="">Select the value</option>
     <option value="No Damage">No Damage</option>
       <option value="Minor Damage">Minor Damage</option>

      <option value="Multiple Damage">Multiple Damage</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="vdoth3" id="vdoth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vdoth3">Others</label>  
  <div class="col-md-6">
  <input id="vdoth3" name="vdoth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="tp3">Trade Plate Availability</label>
  <div class="col-md-6">
    <select id="tp3" name="tp3" class="form-control">
<option value="">Select the value</option>
<option value="No">No</option>
       <option value="Yes">Yes</option>
     <option value="Not Applicable">Not Applicable</option>

      
    </select>
  </div>
</div>

<div class="tpoth3" id="tpoth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tpoth3">Reason</label>  
  <div class="col-md-6">
  <input id="tpoth3" name="tpoth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>




</div>

<h3>Driver 3 Details </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dname3">Driver Name</label>  
  <div class="col-md-6">
  <input id="dname3" name="dname3" placeholder="" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="daddress3">Driver Address</label>  
  <div class="col-md-6">
  <input id="daddress3" name="daddress3" placeholder="" class="form-control input-md" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="gen3">Gender</label>
  <div class="col-md-6">
    <select id="gen3" name="gen3" class="form-control">
     <option value="">Select the value</option>
   <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
    </select>
    <p><font color="#00cc99"><center><b>***Kindly enter the date of accident before giving date of birth of the driver</b></center></font></p>
   <p><font color="#ff471a"><center><b>***Directly type the value or by calendar pick year across year 2006(for driver date of birth)</b></center></font></p>
 
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="date3">Date of Birth</label>  
  <div class="col-md-6">
  <input type='Date' name='date3' class="form-control input-md" id='date3' OnChange='getAge3()'/>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="age3">Age</label>  
  <div class="col-md-6">
  <input type='text' name='age3' class="form-control input-md" id='age3'/>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="din3">Driver Injury</label>
  <div class="col-md-6">
    <select id="din3" name="din3" class="form-control">
    <option value="">Select the value</option>
       <option value="Fatal">Fatal</option>
      <option value="Greivous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
     <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="dinoth3" id="dinoth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dinoth3">Others</label>  
  <div class="col-md-6">
  <input id="dinoth3" name="dinoth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="derr3">Driver Error</label>
  <div class="col-md-6">
    <select id="derr3" name="derr3" class="form-control">
  <option value="">Select the value</option>
     <option value="Abandoning Vehicle">Abandoning Vehicle </option>
     <option value="Abrupt Brake">Abrupt Brake</option>
     <option value="Aggressive Driving">Aggressive Driving</option>
     <option value="Assault on Passengers">Assault on Passengers</option>
     <option value="Distance from Vehicle in Front">Distance from Vehicle in Front</option>   
     <option value="Drunken driving">Drunken driving</option>
     <option value="Fatal Accidents">Fatal Accidents</option>
     <option value="None">None</option>
     <option value="Others">Others</option>
     <option value="Overload by Goods">Overload by Goods</option>
     <option value="Projection of Loads">Projection of Loads</option>
     <option value="Restriction to Carriage of Dangerous Substances">Restriction to Carriage of Dangerous Substances</option>
     <option value="Speed Exceeding the Specified Limit">Speed Exceeding the Specified Limit</option>
     <option value="Use of cellphone">Use of cellphone</option>
     <option value="Used the Vehicle in Unsafe Condition">Used the Vehicle in Unsafe Condition</option>
     <option value="Violation of Road Regulations Rule">Violation of Road Regulations Rule</option>
    </select>
  </div>
</div>
<div class="deoth3" id="deoth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deoth3">Others</label>  
  <div class="col-md-6">
  <input id="deoth3" name="deoth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!--<div class="form-group">
  <label class="col-md-4 control-label" for="ln3">License Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ln3" name="ln3" value="1">    Available
  </div>
</div>-->

<div class="form-group">
  <label class="col-md-4 control-label" for="l3">License Details</label>
  <div class="col-md-6">
    <select id="l3" name="l3" class="form-control">
 <option value="Select License Availability">--Select License Availability--</option>
       <option value="Produced">Produced</option>
      <option value="Not Produced">Not Produced</option>
     <option value="Not Obtained">Not Obtained</option>
    </select>
  </div>
</div>

<div class = "ldd3" id="ldd3">
<h3>License Details(3) </h3>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dl3">License Number</label>  
  <div class="col-md-6">
  <input id="dl3" name="dl3" placeholder="" class="form-control input-md" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="cl3">Class of vehicle</label>
  <div class="col-md-6">
    <select id="cl3" name="cl3" class="form-control" onclick="validateForm10()">
      <option value="">Select the value</option>
    <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
    <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="lcloth3" id="lcloth3">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lcloth3">Others</label>  
  <div class="col-md-6">
  <input id="lcloth3" name="lcloth3" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<div class="form-group" id="b3">
  <label class="col-md-4 control-label" for="b3">Badge Number</label>  
  <div class="col-md-6">
  <input id="b3" name="b3" placeholder="" class="form-control input-md" type="text" >
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dob3">License Issued Date</label>  
  <div class="col-md-6">
 
  <input type='Date' name='dob3' placeholder='yyyy-mm-dd' class="form-control input-md" id='dob3' OnChange='getAge7()'/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dexp3">Driver Experience</label>  
  <div class="col-md-6">
  <input type='text' name='dexp3' class="form-control input-md" id='dexp3'/>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dlv3">License Validity</label>  
  <div class="col-md-6">
  <input id="dlv3" name="dlv3" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>
</div>






<div class="v4" id="v4">

<h3>Vehicle 4 Details </h3>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reg4">Temporary Registration Number/ Registration Number/ Unregistered(Engine no. & chassis no.)</label>  
  <div class="col-md-6">
  <input id="reg4" name="reg4" value="" placeholder="" class="form-control input-md" type="text" style="text-transform:uppercase">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ch4"><font size="4" color="#DC143C">If Vehicle-4 Details not Available</font></label>  
  <div class="col-md-6">
  <input type="checkbox" id="ch4" name="ch4" value="1" onclick="validateForm6()">    
  </div>
</div>






<div class="chh4" id="chh4">


<div class="form-group">
  <label class="col-md-4 control-label" for="itime4">Inspection Time for Vehicle 4</label>  
  <div class="col-md-6">
  <input id="itime4" name="itime4" placeholder="hh:mm" class="itime4 form-control input-md" type="text">
  <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="timedropper.js"></script>
<script>$( "#itime4" ).timeDropper();</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </div>
  <div class="col-md-1">
  <p><b>Hours(24hrs format)</b></p>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="rcp4">RC Produced</label>
  <div class="col-md-6">
    <select id="rcp4" name="rcp4" class="form-control">
     <option value="">Select the value</option>
   <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
</div>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="make4">Make</label>  
  <div class="col-md-6">
  <input id="make4" name="make4" placeholder="" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="classi4">Model/Maker's Classification</label>  
  <div class="col-md-6">
  <input id="classi4" name="classi4" placeholder="" class="form-control input-md" style="text-transform:uppercase" type="text">
  </div>
</div>









<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oname4">Vehicle Owner Name</label>  
  <div class="col-md-6">
  <input id="oname4" name="oname4" placeholder="" class="form-control input-md" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="oaddress4">Vehicle Owner Address</label>  
  <div class="col-md-6">
  <input id="oaddress4" name="oaddress4" placeholder="" class="form-control input-md" type="text">
  </div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label" for="type4">Type</label>
  <div class="col-md-6">
    <select id="type4" name="type4" class="form-control">
     <option value="">Select the value</option>
     <option value="Transport">Transport</option>
      <option value="Non - Transport">Non - Transport</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="class4">Class</label>
  <div class="col-md-6">
    <select id="class4" name="class4" class="form-control">
     <option value="">Select the value</option>
   <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
    <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="cloth4" id="cloth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cloth4">Others</label>  
  <div class="col-md-6">
  <input id="cloth4" name="cloth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="trans4"  id="trans4">
<div class="form-group">
  <label class="col-md-4 control-label" for="tt4">Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="tt4" name="tt4" class="form-control">
      <option value="">Select the value</option>
      <option value="Ambulance">Ambulance</option>
      <option value="Aurticulated Vehicle">Aurticulated Vehicle</option>
      <option value="Auto Rickshaw">Auto Rickshaw</option>
    <option value="Call Taxi">Call Taxi</option>
    <option value="Educational Institution Vehicle">Educational Institution Vehicle</option>
    <option value="Goods Carriage">Goods Carriage</option>
      <option value="Hazardous Nature Carriage">Hazardous Nature Carriage</option>
      <option value="LMGV(NCP)">LMGV(NCP)</option>
    <option value="Maxi Cab">Maxi Cab</option>
    <option value="Meter Taxi">Meter Taxi</option>
    <option value="Mini Bus">Mini Bus</option>
    <option value="Omni Bus">Omni Bus</option>
    <option value="Private Service Vehicle">Private Service Vehicle</option>
    <option value="Share Auto">Share Auto</option>
    <option value="School Bus">School Bus</option>
      <option value="Stage Carriage">Stage Carriage</option>
     <option value="Stage Carriage Spare">Stage Carriage Spare</option>
      <option value="Tourist Taxi">Tourist Taxi</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="toth4" id="toth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="toth4">Others</label>  
  <div class="col-md-6">
  <input id="toth4" name="toth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="dst4" id="dst4">
<div class="form-group">
  <label class="col-md-4 control-label" for="st4">Stage Carriage Type</label>
  <div class="col-md-6">
    <select id="st4" name="st4" class="form-control">
      <option value="">Select the value</option>
           <option value="Mofussil">Mofussil</option>
           <option value="Town">Town</option>
           <option value="STU PCG Mofussil">STU PCG Mofussil</option>
           <option value="STU PCG Town">STU PCG Town</option>
    </select>
  </div>
</div>
</div>

<div class="dmof4" id="dmof4">
<div class="form-group">
  <label class="col-md-4 control-label" for="mof4">Mofussil Type</label>
  <div class="col-md-6">
    <select id="mof4" name="mof4" class="form-control">
<option value="">Select the value</option>
       <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>

<div class="dtow4" id="dtow4">
<div class="form-group">
  <label class="col-md-4 control-label" for="tow4">Town Type</label>
  <div class="col-md-6">
    <select id="tow4" name="tow4" class="form-control">
    <option value="">Select the value</option>
       <option value="STU">STU</option>
      <option value="Private">Private</option>
    </select>
  </div>
</div>
</div>



<!-- Text input-->
<div class="form-group" id="perv4">
  <label class="col-md-4 control-label" for="pv4">Permit Validity</label>  
  <div class="col-md-6">
  <input id="pv4" name="pv4" placeholder="dd-mm-yyyy" class="form-control input-md cont" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fit4">Fitness Certificate issued date</label>  
  <div class="col-md-6">
  <input id="fit4" name="fit4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date" onclick="validateForm7()">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ft4">Fitness Certificate Validity</label>  
  <div class="col-md-6">
  <input id="ft4" name="ft4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pct4">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pct4" name="pct4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>







</div>


<div class="nontrans4" id="nontrans4">

<div class="form-group">
  <label class="col-md-4 control-label" for="ntt4">Non - Transport Vehicle Type</label>
  <div class="col-md-6">
    <select id="ntt4" name="ntt4" class="form-control">
      <option value="">Select the value</option>
     <option value="Agriculture Tractor">Agriculture Tractor</option>
      <option value="Animal Drawn Vehicle">Animal Drawn Vehicle</option>
      <option value="Battery Operated Vehicle">Battery Operated Vehicle </option>
    <option value="Bicycle">Bicycle</option>
    <option value="Car">Car</option>
    <option value="Hand Drawn Vehicle">Hand Drawn Vehicle</option>
          <option value="Jeep">Jeep</option>
          <option value="Moped">Moped</option>
    <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
     <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
    <option value="Scooter">Scooter</option>
    <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="ntoth4" id="ntoth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ntoth4">Others</label>  
  <div class="col-md-6">
  <input id="ntoth4" name="ntoth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rc4">RC Validity</label>  
  <div class="col-md-6">
  <input id="rc4" name="rc4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pcnt4">Pollution Certificate Validity</label>  
  <div class="col-md-6">
  <input id="pcnt4" name="pcnt4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>


</div>


<!--<div class="form-group" >
  <label class="col-md-4 control-label" for="ins4">Insurance Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ins4" name="ins4" value="1">    Available
  </div>
</div>-->

<div class="form-group">
  <label class="col-md-4 control-label" for="ins4">Insurance Availability</label>
  <div class="col-md-6">
    <select id="ins4" name="ins4" class="form-control">
 <option value="Select License Availability">--Select Insurance Availability--</option>
       <option value="Available">Produced</option>
      <option value="Not Available">Not Produced</option>
      <option value="Exempted">Exempted</option>
    </select>
  </div>
</div>





<div class="form-group" id="insur4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="iv4">Insurance Validity</label>  
  <div class="col-md-6">
  <input id="iv4" name="iv4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ic4"> Insurance Company name and address</label>  
  <div class="col-md-6">
  <input id="ic4" name="ic4" placeholder="" class="form-control input-md" type="text" onclick="validateForm8()" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pn4">Policy Number</label>  
  <div class="col-md-6">
  <input id="pn4" name="pn4" placeholder=" " class="form-control input-md" type="text" >
  </div>
</div>
</div>







<div class="form-group">
  <label class="col-md-4 control-label" for="ma4">Manoeuvre</label>
  <div class="col-md-6">
    <select id="ma4" name="ma4" class="form-control" >
      <option value="">Select the value</option>
    <option value="Turning Right">Turning Right</option>
      <option value="Turning Left">Turning Left</option>
      <option value="Making U Turn">Making U Turn</option>
    <option value="Temporarily held up">Temporarily held up</option>
    <option value="Parked">Parked</option>
    <option value="Sudden Stop">Sudden Stop</option>
      <option value="Sudden Start">Sudden Start</option>
      <option value="Overtaking From Left">Overtaking From Left</option>
    <option value="Starting From Near Side">Starting From Near Side</option>
    <option value="Starting From off-side">Starting From off-side</option>
    <option value="Reversing">Reversing</option>
    <option value="Over took on Curve">Over took on Curve</option>
    <option value="Others">Others</option>

    </select>
  </div>
</div>

<div class="moth4" id="moth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="moth4">Others</label>  
  <div class="col-md-6">
  <input id="moth4" name="moth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="man4">Vehicle Damage Level</label>
  <div class="col-md-6">
    <select id="man4" name="man4" class="form-control">
<option value="">Select the value</option>
     <option value="Minor Damage">Minor Damage</option>

     <option value="No Damage">No Damage</option>
      <option value="Multiple Damage">Multiple Damage</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>

<div class="vdoth4" id="vdoth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vdoth4">Others</label>  
  <div class="col-md-6">
  <input id="vdoth4" name="vdoth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="tp4">Trade Plate Availability</label>
  <div class="col-md-6">
    <select id="tp4" name="tp4" class="form-control">
      <option value="">Select the value</option>
    <option value="No">No</option>
       <option value="Yes">Yes</option>
     <option value="Not Applicable">Not Applicable</option>

      
    </select>
  </div>
</div>

<div class="tpoth4" id="tpoth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tpoth4">Reason</label>  
  <div class="col-md-6">
  <input id="tpoth4" name="tpoth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>



</div>

<h3>Driver 4 Details </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dname4">Driver Name</label>  
  <div class="col-md-6">
  <input id="dname4" name="dname4" placeholder="" class="form-control input-md" type="text" >
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="daddress4">Driver Address</label>  
  <div class="col-md-6">
  <input id="daddress4" name="daddress4" placeholder="" class="form-control input-md" type="text">
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="gen4">Gender</label>
  <div class="col-md-6">
    <select id="gen4" name="gen4" class="form-control" >
      <option value="">Select the value</option>
    <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
    </select>
     <p><font color="#00cc99"><center><b>***Kindly enter the date of accident before giving date of birth of the driver</b></center></font></p>
   <p><font color="#ff471a"><center><b>***Directly type the value or by calendar pick year across year 2006(for driver date of birth)</b></center></font></p>
 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="date4">Date of Birth</label>  
  <div class="col-md-6">
  <input type='Date' name='date4' class="form-control input-md" id='date4' OnChange='getAge4()'/>
 
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="age4">Age</label>  
  <div class="col-md-6">
  <input type='text' name='age4' class="form-control input-md" id='age4'/>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="din4">Driver Injury</label>
  <div class="col-md-6">
    <select id="din4" name="din4" class="form-control" >
    <option value="">Select the value</option>
       <option value="Fatal">Fatal</option>
      <option value="Greivous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
     <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
    </select>
  </div>
</div>
<div class="dinoth4" id="dinoth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dinoth4">Others</label>  
  <div class="col-md-6">
  <input id="dinoth4" name="dinoth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="derr4">Driver Error</label>
  <div class="col-md-6">
    <select id="derr4" name="derr4" class="form-control" >
  
     <option value="Abandoning Vehicle">Abandoning Vehicle </option>
     <option value="Abrupt Brake">Abrupt Brake</option>
     <option value="Aggressive Driving">Aggressive Driving</option>
     <option value="Assault on Passengers">Assault on Passengers</option>
     <option value="Distance from Vehicle in Front">Distance from Vehicle in Front</option>   
     <option value="Drunken driving">Drunken driving</option>
     <option value="Fatal Accidents">Fatal Accidents</option>
     <option value="None">None</option>
     <option value="Others">Others</option>
     <option value="Overload by Goods">Overload by Goods</option>
     <option value="Projection of Loads">Projection of Loads</option>
     <option value="Restriction to Carriage of Dangerous Substances">Restriction to Carriage of Dangerous Substances</option>
     <option value="Speed Exceeding the Specified Limit">Speed Exceeding the Specified Limit</option>
     <option value="Use of cellphone">Use of cellphone</option>
     <option value="Used the Vehicle in Unsafe Condition">Used the Vehicle in Unsafe Condition</option>
     <option value="Violation of Road Regulations Rule">Violation of Road Regulations Rule</option>
    </select>
  </div>
</div>
<div class="deoth4" id="deoth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deoth4">Others</label>  
  <div class="col-md-6">
  <input id="deoth4" name="deoth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>
</div>

<!--<div class="form-group">
  <label class="col-md-4 control-label" for="ln4">License Details</label>  
  <div class="col-md-6">
  <input type="checkbox" id="ln4" name="ln4" value="1">    Available
  </div>
</div>-->

<div class="form-group">
  <label class="col-md-4 control-label" for="l4">License Details</label>
  <div class="col-md-6">
    <select id="l4" name="l4" class="form-control">
 <option value="Select License Availability">--Select License Availability--</option>
       <option value="Produced">Produced</option>
      <option value="Not Produced">Not Produced</option>
      <option value="Not Obtained">Not Obtained</option>n>
    </select>
  </div>
</div>


<div class = "ldd4" id="ldd4">
<h3>License Details(4) </h3>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dl4">License Number</label>  
  <div class="col-md-6">
  <input id="dl4" name="dl4" placeholder="" class="form-control input-md" type="text">
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="cl4">Class of vehicle</label>
  <div class="col-md-6">
    <select id="cl4" name="cl4" class="form-control" onclick="validateForm11()">
  <option value="">Select the value</option>
      <option value="Motor Cycle without Gear">Motor Cycle without Gear</option>
      <option value="Motor Cycle with Gear">Motor Cycle with Gear</option>
      <option value="Invalid Carriage">Invalid Carriage-LMV</option>
    <option value="Invalid Carriage mc">Invalid Carriage-Motor Cycle</option>
    <option value="Light Motor Vehicle NT">Light Motor Vehicle NT</option>
 <option value="Light Motor Vehicle Trans">Light Motor Vehicle Trans</option>
    <option value="Medium Goods Vehicle">Medium Goods Vehicle</option>
    <option value="Medium Passenger Vehicle">Medium Passenger Vehicle</option>
      <option value="Transport Vehicle">Transport Vehicle</option>
      <option value="Heavy Transport Vehicle">Heavy Transport Vehicle</option>
    <option value="Hazardous Vehicle">Hazardous Vehicle</option>
    <option value="Road Roller">Road Roller</option>
    <option value="Motor Vehicle of Specified Description/Others">Motor Vehicle of Specified Description/Others</option>
    </select>
  </div>
</div>

<div class="lcloth4" id="lcloth4">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lcloth4">Others</label>  
  <div class="col-md-6">
  <input id="lcloth4" name="lcloth4" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

</div>

<div class="form-group" id="b4">
  <label class="col-md-4 control-label" for="b4">Badge Number</label>  
  <div class="col-md-6">
  <input id="b4" name="b4" placeholder="" class="form-control input-md" type="text" >
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dob4">License Issued Date</label>  
  <div class="col-md-6">
 
  <input type='Date' name='dob4' placeholder='yyyy-mm-dd' class="form-control input-md" id='dob4' OnChange='getAge8()'/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dexp4">Driver Experience</label>  
  <div class="col-md-6">
  <input type='text' name='dexp4' class="form-control input-md" id='dexp4'/>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="dlv4">License Validity</label>  
  <div class="col-md-6">
  <input id="dlv4" name="dlv4" placeholder="dd-mm-yyyy" class="form-control input-md" type="Date">
  </div>
</div>
</div>

</div>
</div>





<div class="fv1" id="fv1">
<h3>Fatal Details for Vehicle-1 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fmal">Male</label>  
  <div class="col-md-6">
  <input id="fmal" name="fmal" placeholder="" value="<?php echo $male;?>" class="f" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ffem">Female</label>  
  <div class="col-md-6">
  <input id="ffem" name="ffem" placeholder="" class="f" value="<?php echo $female;?>" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fchild">Children</label>  
  <div class="col-md-6">
  <input id="fchild" name="fchild" placeholder="" value="<?php echo $children;?>" class="f" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ftot">Total</label>  
  <div class="col-md-6">
  <input id="ftot" name="ftot" placeholder="" class="f" disabled="disabled" type="text">
    
  </div>
</div>


</div>
</div>



<div class="fv2" id="fv2">
<h3>Fatal Details for Vehicle-2 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fmal2">Male</label>  
  <div class="col-md-6">
  <input id="fmal2" name="fmal2" placeholder="" value="<?php echo $male2;?>" class="f2" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ffem2">Female</label>  
  <div class="col-md-6">
  <input id="ffem2" name="ffem2" placeholder="" class="f2" value="<?php echo $female2;?>" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fchild2">Children</label>  
  <div class="col-md-6">
  <input id="fchild2" name="fchild2" placeholder="" class="f2" value="<?php echo $children2;?>" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ftot2">Total</label>  
  <div class="col-md-6">
  <input id="ftot2" name="ftot2" placeholder="" class="f2" disabled="disabled" type="text">
    
  </div>
</div>

</div>
</div>


<div class="fv3" id="fv3">
<h3>Fatal Details for Vehicle-3 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fmal3">Male</label>  
  <div class="col-md-6">
  <input id="fmal3" name="fmal3" placeholder="" class="f3" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ffem3">Female</label>  
  <div class="col-md-6">
  <input id="ffem3" name="ffem3" placeholder="" class="f3" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fchild3">Children</label>  
  <div class="col-md-6">
  <input id="fchild3" name="fchild3" placeholder="" class="f3" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ftot3">Total</label>  
  <div class="col-md-6">
  <input id="ftot3" name="ftot3" placeholder="" class="f3" disabled="disabled" type="text">
    
  </div>
</div>


</div>
</div>




<div class="fv4" id="fv4">
<h3>Fatal Details for Vehicle-4 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fmal4">Male</label>  
  <div class="col-md-6">
  <input id="fmal4" name="fmal4" placeholder="" class="f4" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ffem4">Female</label>  
  <div class="col-md-6">
  <input id="ffem4" name="ffem4" placeholder="" class="f4" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fchild4">Children</label>  
  <div class="col-md-6">
  <input id="fchild4" name="fchild4" placeholder="" class="f4" type="text" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ftot4">Total</label>  
  <div class="col-md-6">
  <input id="ftot4" name="ftot4" placeholder="" class="f4" disabled="disabled" type="text">
    
  </div>
</div>

</div>
</div>
</div>








<div class="inv1" id="inv1">

<h3>Injured Details for Vehicle-1 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imal">Male</label>  
  <div class="col-md-6">
  <input id="imal" name="imal" placeholder="" value="<?php echo $imal;?>" class="fo" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ifem">Female</label>  
  <div class="col-md-6">
  <input id="ifem" name="ifem" placeholder="" class="fo" value="<?php echo $ifem;?>" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ichild">Children</label>  
  <div class="col-md-6">
  <input id="ichild" name="ichild" placeholder="" value="<?php echo $ichildren;?>" class="fo" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="itot">Total</label>  
  <div class="col-md-6">
  <input id="itot" name="itot" placeholder="" class="fo" disabled="disabled" type="text">
    
  </div>
</div>

</div>
</div>
</div>


<div class="inv2" id="inv2">

<h3>Injured Details for Vehicle-2 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imal2">Male</label>  
  <div class="col-md-6">
  <input id="imal2" name="imal2" placeholder="" class="fo2" value="<?php echo $imal2;?>" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ifem2">Female</label>  
  <div class="col-md-6">
  <input id="ifem2" name="ifem2" placeholder="" class="fo2" value="<?php echo $ifem2;?>" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ichild2">Children</label>  
  <div class="col-md-6">
  <input id="ichild2" name="ichild2" placeholder="" value="<?php echo $ichildren2;?>" class="fo2" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="itot2">Total</label>  
  <div class="col-md-6">
  <input id="itot2" name="itot2" placeholder="" class="fo2" disabled="disabled" type="text">
    
  </div>
</div>

</div>
</div>
</div>


<div class="inv3" id="inv3">

<h3>Injured Details for Vehicle-3 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imal3">Male</label>  
  <div class="col-md-6">
  <input id="imal3" name="imal3" placeholder="" class="fo3" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ifem3">Female</label>  
  <div class="col-md-6">
  <input id="ifem3" name="ifem3" placeholder="" class="fo3" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ichild3">Children</label>  
  <div class="col-md-6">
  <input id="ichild3" name="ichild3" placeholder="" class="fo3" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="itot3">Total</label>  
  <div class="col-md-6">
  <input id="itot3" name="itot3" placeholder="" class="fo3" disabled="disabled" type="text">
    
  </div>
</div>

</div>
</div>
</div>



<div class="inv4" id="inv4">

<h3>Injured Details for Vehicle-4 </h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imal4">Male</label>  
  <div class="col-md-6">
  <input id="imal4" name="imal4" placeholder="" class="fo4" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ifem4">Female</label>  
  <div class="col-md-6">
  <input id="ifem4" name="ifem4" placeholder="" class="fo4" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ichild4">Children</label>  
  <div class="col-md-6">
  <input id="ichild4" name="ichild4" placeholder="" class="fo4" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="itot4">Total</label>  
  <div class="col-md-6">
  <input id="itot4" name="itot4" placeholder="" class="fo4" disabled="disabled" type="text">
    
  </div>
</div>

</div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="jcon">Status</label>
  <div class="col-md-6">
    <select id="status" name="status" value="<?php echo $status;?>" class="form-control" required>
    <option value="">Select the value</option>
      <option value="Not a Junction">Pending in Policestation</option>
      <option value="Police Officer">At Policestation</option>
    <option value="Others">Rejected at Policestation </option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-6">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</fieldset>
</form>
</form>