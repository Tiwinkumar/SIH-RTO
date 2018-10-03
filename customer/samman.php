<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['submit']))
{    
    $crimenumber = $_POST['crimenumber'];
$policestationname = $_POST['policestationname'];
$district = $_POST['district'];
$zone = $_POST['zone'];
$rto = $_POST['rto'];
$ipcsection = $_POST['ipcsection'];
$natureofaccident = $_POST['natureofaccident'];
$placeofaccident = $_POST['placeofaccident'];
$accidentdate = $_POST['accidentdate'];
$accidenttime = $_POST['accidenttime'];
$numberofvehicles = $_POST['numberofvehicles'];
$collisiontype = $_POST['collisiontype'];
$junctiontype = $_POST['junctiontype'];
$junctioncontrol = $_POST['junctioncontrol'];
$roadcategory = $_POST['roadcategory'];
$roadnarrowing = $_POST['roadnarrowing'];
$lightcondition = $_POST['lightcondition'];
$climate = $_POST['climate'];
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
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$driverinjury = $_POST['driverinjury'];
$drivererror = $_POST['drivererror'];
$drivinglicensedetails = $_POST['drivinglicensedetails'];
$licensenumber = $_POST['licensenumber'];
$numberofinjuredpersons = $_POST['numberofinjuredpersons'];
        
    
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
        $result = mysqli_query($mysqli, "UPDATE form SET policestationname='$policestationname' , district='$district' , zone='$zone' , rto='$rto' , ipcsection='$ipcsection', natureofaccident='$natureofaccident' , placeofaccident='$placeofaccident' , accidentdate='$accidentdate' , accidenttime='$accidenttime' , numberofvehicles='$numberofvehicles', collisiontype='$collisiontype' , junctiontype='$junctiontype', junctioncontrol='$junctioncontrol' , roadcategory='$roadcategory' , roadnarrowing='$roadnarrowing' , lightcondition='$lightcondition' , climate='climate' , vehiclenumber='$vehiclenumber',rcproduced='$rcproduced',make='$make',model='$model',ownername='$ownername',owneraddress='$owneraddress',type='$type' , class='$class', transportvehicletype='$transportvehicletype', permitvalidity='$permitvalidity' , pollutioncertificatevalidity='$pollutioncertificatevalidity' , insuranceavailability='$insuranceavailability' , insurancecompanyname='$insurancecompanyname' , insurancenumber='$insurancenumber' , manoeuvre='$manoeuvre' , vehicledamagelevel='$vehicledamagelevel' , tradeplateavailability='$tradeplateavailability' , roadtestcarried='$roadtestcarried', roadtestdescription='$roadtestdescription', conditionoftyres='$conditionoftyres' , frontwhitereflectortape='$frontwhitereflectortape', backwhitereflectortape='$backwhitereflectortape' , drivername='$drivername', driveraddress='$driveraddress' , gender='$gender' , dob='$dob',age='$age', mobilenumber='$mobilenumber', email='$email' , driverinjury='$driverinjury', drivererror='$drivererror', drivinglicensedetails='$drivinglicensedetails' , licensenumber='$licensenumber' , numberofinjuredpersons='$numberofinjuredpersons' WHERE crimenumber='$crimenumber'");
        
        //redirectig to the display page. In our case, it is index.php
        //header("Location: view.php");
   
}
?>
<?php
//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
//$result = mysqli_query($mysqli, "SELECT * FROM basic WHERE crimenumber='$crimenumber'");
 
//while($res = mysqli_fetch_array($result))
//{
   // $crimenumber = $res['crimenumber'];
//$policestationname = $res['policestationname'];
//$district = $res['district'];
//$zone = $res['zone'];
//$rto = $res['rto'];
//$ipcsection = $res['ipcsection'];
//$natureofaccident = $res['natureofaccident'];
//$placeofaccident = $res['placeofaccident'];
//$accidentdate = $res['accidentdate'];
//$accidenttime = $res['accidenttime'];
//$numberofvehicles = $res['numberofvehicles'];
//$collisiontype = $res['collisiontype'];
//$junctiontype = $res['junctiontype'];
//$junctioncontrol = $res['junctioncontrol'];
//$roadcategory = $res['roadcategory'];
//$roadnarrowing = $res['roadnarrowing'];
//$lightcondition = $res['lightcondition'];
//$climate = $res['climate'];
//$vehiclenumber = $res['vehiclenumber'];
//$rcproduced = $res['rcproduced'];
//$make = $res['make'];
//$model = $res['model'];
//$ownername = $res['ownername'];
//$owneraddress = $res['owneraddress'];
///$type = $res['type'];
//$class = $res['class'];
//$transportvehicletype = $res['transportvehicletype'];
//$permitvalidity = $res['permitvalidity'];
//$pollutioncertificatevalidity = $res['pollutioncertificatevalidity'];
//$insuranceavailability = $res['insuranceavailability'];
//$insurancecompanyname = $res['insurancecompanyname'];
//$insurancenumber = $res['insurancenumber'];
//$manoeuvre = $res['manoeuvre'];
//$vehicledamagelevel = $res['vehicledamagelevel'];
//$tradeplateavailability = $res['tradeplateavailability'];
//$roadtestcarried = $res['roadtestcarried'];
//$roadtestdescription = $res['roadtestdescription'];
//$conditionoftyres = $res['conditionoftyres'];
//$frontwhitereflectortape = $res['frontwhitereflectortape'];
//$backwhitereflectortape = $res['backwhitereflectortape'];
//$drivername = $res['drivername'];
//$driveraddress = $res['driveraddress'];
//$gender = $res['gender'];
//$dob = $res['dob'];
//$age = $res['age'];
//$mobilenumber = $res['mobilenumber'];
//$email = $res['email'];
//$driverinjury = $res['driverinjury'];
//$drivererror = $res['drivererror'];
//$drivinglicensedetails = $res['drivinglicensedetails'];
//$licensenumber = $res['licensenumber'];
//$numberofinjuredpersons = $res['numberofinjuredpersons'];

//}
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
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
<body>
 <div id="mydiv">
<div id="content">
  <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3>H4 </h3> 
   <h3>notice to show causes </h3> <br /> 
   <!--  <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number  </label>
    <input  name="crimenumber" id="crimenumber" value="<?php echo $crimenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Police Station Name</label>
    <input  name="policestationname" id="policestationname" value="<?php echo $policestationname;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>District</label>
    <input  name="district" id="district" class="form-control" value="<?php echo $district;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Zone</label>
    <input  name="zone" id="zone" class="form-control" value="<?php echo $zone;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>RTO</label>
    <input  name="rto" id="rto" class="form-control" value="<?php echo $rto;?>" placeholder="Enter Number">
    </div>
    
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>IPC Section</label>
    <input  name="ipcsection" id="ipcsection" class="form-control" value="<?php echo $ipcsection;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Nature of Accident</label>
     <select name='natureofaccident' id='natureofaccident' value="<?php echo $natureofaccident;?>" class="form-control">
      <option value="">Select the value</option>
      <option value="Minor H" selected="selected">Minor H</option>
       <option value="Fatal">Fatal</option>
      <option value="Grievous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
      <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Accident Date</label>
    <input  name="accidentdate" id="accidentdate" type="Date" class="form-control" value="<?php echo $accidentdate;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Accident Time</label>
    <input  name="accidenttime" id="accidenttime" type="Time" class="form-control" value="<?php echo $accidenttime;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Place of Accident</label>
    <input  name="placeofaccident" id="placeofaccident" class="form-control" value="<?php echo $placeofaccident;?>" placeholder="Enter Number">
    </div>
    <div>
     <label><i class="fa fa-user" aria-hidden="true"></i>Number of Vehicles</label>
     <select name='numberofvehicles' id='numberofvehicles' value="<?php echo $numberofvehicles;?>" class="form-control">
      <option value="">Select the value</option>
      <option value="2" selected="selected">2</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Collision Type</label>
     <select name='collisiontype' id='collisiontype' value="<?php echo $collisiontype;?>" class="form-control">
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
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Junction Type</label>
     <select name='junctiontype' id='junctiontype' value="<?php echo $junctiontype;?>" class="form-control">
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
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Junction Control</label>
     <select name='junctioncontrol' id='junctioncontrol' value="<?php echo $junctioncontrol;?>" class="form-control">
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
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Road Category</label>
     <select name='roadcategory' id='roadcategory' value="<?php echo $roadcategory;?>" class="form-control">
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
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Road Narrowing</label>
     <select name='roadnarrowing' id='roadnarrowing' value="<?php echo $roadnarrowing;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="None">None</option>
      <option value="One - Way Bridge">One - Way Bridge</option>
      <option value="Two - Way Bridge">Two - Way Bridge</option>
    <option value="Others">Others</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Light Condition</label>
     <select name='lightcondition' id='lightcondition' value="<?php echo $lightcondition;?>" class="form-control">
      <option value="">Select the value</option>
   <option value="Daylight">Daylight</option>
      <option value="Darkness - No Street Lights">Darkness - No Street Lights</option>
      <option value="Darkness - with Street Lights">Darkness - with Street Lights</option>
    <option value="Twilight">Twilight</option>
    <option value="Others">Others</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Climate</label>
     <select name='climate' id='climate' value="<?php echo $climate;?>" class="form-control">
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
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Vehicle Number</label>
    <input  name="vehiclenumber" id="vehiclenumber" class="form-control" value="<?php echo $vehiclenumber;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>RC Produced</label>
     <select name='rcproduced' id='rcproduced' value="<?php echo $rcproduced;?>" class="form-control">
      <option value="">Select the value</option>
   <option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Make</label>
    <input  name="make" id="make" class="form-control" value="<?php echo $make;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Model</label>
    <input  name="model" id="model" class="form-control" value="<?php echo $model;?>" placeholder="Enter Number">
    </div>-->
    <div>
    <label><i  aria-hidden="true"></i>PETITIONER<?php //echo $ownername;?></label></br>  
    <label><i  aria-hidden="true"></i>Owner Name :<?php //echo $ownername;?></label> 
    <div>
    <label><i  aria-hidden="true"></i>Owner Address : <?php //echo $owneraddress;?></label>
    </div>
    
    vs
   <!-- <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Type</label>
     <select name='type' id='type' value="<?php echo $type;?>" class="form-control">
       <option value="">Select the value</option>
   <option value="Transport">Transport</option>
      <option value="Non - Transport">Non - Transport</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Class</label>
     <select name='class' id='class' value="<?php echo $class;?>" class="form-control">
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
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Transport Vehicle Type</label>
     <select name='transportvehicletype' id='transportvehicletype' value="<?php echo $transportvehicletype;?>" class="form-control">
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
      <option value="Mofussil">Mofussil</option>
      <option value="STU">STU</option>
      <option value="Private">Private</option>
       <option value="Town">Town</option>
       <option value="STU PCG Mofussil">STU PCG Mofussil</option>
       <option value="STU PCG Town">STU PCG Town</option>
    <option value="Stage Carriage Spare">Stage Carriage Spare</option>
      <option value="Tourist Taxi">Tourist Taxi</option>
    <option value="Others">Others</option>
      </select>
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
     <select name='insuranceavailability' id='insuranceavailability' value="<?php echo $insuranceavailability;?>" class="form-control">
       <option value="Select Insurance Availability">--Select Insurance Availability--</option>
       <option value="Available">Produced</option>
      <option value="Not Available">Not Produced</option>
      <option value="Exempted">Exempted</option>
      </select>
    </div>-->
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Insurance Company Name : <?php //echo $insurancecompanyname;?></label>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Insurance Number : <?php //echo $insurancenumber;?></label>
    </div>
    
    <br>
    <br>
    <br>
      Whereas the above named has made application to this court that you are hereby warned to appear in this court in person or by a pleader duly instructed on the day ____ day  of  ____ at ____ o'clock in the forenoon to show cause aganist the application, failing wherein the said application will be heard and determined exparte.
  <br/>
   <br/>
    <br/>

    <br>
    <br>
    Given under my hand and the seal of the court, this
    <br/>
    <br/>

    <br>
    <br>
    <br>
    <br>
  by order
    <br/>
    <br/>
    <br/>
    <br/>
    <!--
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Manoeuvre</label>
     <select name='manoeuvre' id='manoeuvre' value="<?php echo $manoeuvre;?>" class="form-control">
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
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Vehicle Damage Level</label>
     <select name='vehicledamagelevel' id='vehicledamagelevel' value="<?php echo $vehicledamagelevel;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="No Damage">No Damage</option>
     <option value="Minor Damage">Minor Damage</option>
      <option value="Multiple Damage">Multiple Damage</option>
      <option value="Others">Others</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Trade Plate Availability</label>
     <select name='tradeplateavailability' id='tradeplateavailability' value="<?php echo $tradeplateavailability;?>" class="form-control">
      <option value="">Select the value</option>
      <option value="No">No</option>
       <option value="Yes">Yes</option>
      <option value="Not Applicable">Not Applicable</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Road test Carried</label>
     <select name='roadtestcarried' id='roadtestcarried' value="<?php echo $roadtestcarried;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="No">No</option>
     <option value="Yes">Yes</option>
       <option value="Others">Others</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Road Test Description</label>
    <input  name="roadtestdescription" id="roadtestdescription" value="<?php echo $roadtestdescription;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Condition of Tyres</label>
     <select name='conditionoftyres' id='conditionoftyres' value="<?php echo $conditionoftyres;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="Good Condition">Good Condition</option>
      <option value="Defects">Defects</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Fixation of Front White Reflector tape</label>
     <select name='frontwhitereflectortape' id='frontwhitereflectortape' value="<?php echo $frontwhitereflectortape;?>" class="form-control">
      <option value="">Select the value</option>
<option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Fixation of Rear Reflector tape</label>
     <select name='backwhitereflectortape' id='backwhitereflectortape' value="<?php echo $backwhitereflectortape;?>" class="form-control">
      <option value="">Select the value</option>
<option value="Yes">Yes</option>
      <option value="No">No</option>
      </select>
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
     <select name='gender' id='gender' value="<?php echo $gender;?>" class="form-control">
      <option value="">Select the value</option>
     <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Date of Birth</label>
    <input  name="dob" id="dob" class="form-control" value="<?php echo $dob;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Age</label>
    <input  name="age" id="age" class="form-control" value="<?php echo $age;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Mobile Number</label>
    <input  name="mobilenumber" id="mobilenumber" value="<?php echo $mobilenumber;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>E-mail</label>
    <input  name="email" id="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter Number">
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driver Injury</label>
     <select name='driverinjury' id='driverinjury' value="<?php echo $driverinjury;?>" class="form-control">
      <option value="">Select the value</option>
       <option value="Fatal">Fatal</option>
      <option value="Grievous">Grievous</option>
      <option value="Minor H">Minor Hospitalised</option>
      <option value="Minor NH">Minor Non-Hospitalised</option>
     <option value="No Injury">No Injury</option>
      <option value="Others">Others</option>
      </select>
    </div>
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driver Error</label>
     <select name='drivererror' id='drivererror' value="<?php echo $drivererror;?>" class="form-control">
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
     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Driving License Details</label>
     <select name='drivinglicensedetails' id='drivinglicensedetails' value="<?php echo $drivinglicensedetails;?>" class="form-control">
      <option value="Select License Availability">--Select License Availability--</option>
       <option value="Produced">Produced</option>
      <option value="Not Produced">Not Produced</option>
      <option value="Not Obtained">Not Obtained</option>
      </select>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Driving License Number</label>
    <input  name="licensenumber" id="licensenumber" class="form-control" value="<?php echo $licensenumber;?>" placeholder="Enter Number">
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Number of Injured Persons</label>
    <input  name="numberofinjuredpersons" id="numberofinjuredpersons" value="<?php echo $numberofinjuredpersons;?>" class="form-control" placeholder="Enter Number">
    </div>
    <div>
        <button class="btn btn-raised btn-unblock btn-danger" type="submit" name="submit" ><strong>SUBMIT &rarr;</strong></button>
    </div>
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div> -->  

  </form>
</div>
</div>
   <input type="button" value="Print Div" onclick="PrintElem('#mydiv')" /> 
</body>
</html>