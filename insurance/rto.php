
<?php
include_once("connect.php");

//getting id from url
$crimenumber = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rto WHERE cno='$crimenumber'");
 
while($res = mysqli_fetch_array($result))
{
  $zone = $res['zone'];
$dis = $res['district'];
$rto = $res['rto'];
$unit = $res['unit'];
$psta = $res['policestation'];
$cno = $res['cno'];
$requestfrom = $res['requestform'];
$dateofrequest = $res['dateofrequest'];
$timeofrequest = $res['timeofrequest'];
$inspectiondate = $res['inspectiondate'];
$inspectiontime = $res['inspectiontime'];
$inspectionplace = $res['inspectionplace'];
$submittedby = $res['submittedby'];
$gpf = $res['gpf'];
$numberofvehiclesinvolved = $res['noofvehicleinvolved'];
$natureofaccident = $res['natureofaccident'];
$causeofaccident = $res['causeofaccident'];
$remedies = $res['remedies'];
$concerneddept = $res['concerneddept'];
$administrativeoffc = $res['administrativeoffc'];
$appxcost = $res['appxcost'];



}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
             RTO Login
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
    <h3>RTO DETAILS  FORM </h3> <br /> 
    <div>
    <label> Zone:  </label>
    <?php echo $zone;?>
    </div>
    <div>
    <label> District  </label>
    <?php echo $dis;?>
    </div>
    <div>
    <label>RTO</label>
    <?php echo $rto;?>
    </div>
    <div>
    <label>Unit</label>
    <?php echo $unit;?>
    </div>
    <div>
    <label>Police Station </label>
    <?php echo $psta;?>
    </div>
    
    <div>
    <label> Crime Number </label>
   <?php echo $cno;?>
    </div>

    <div>
    <label> Request From </label>
    <?php echo $requestfrom;?>
    </div>

    <div>
    <label> Date of Request </label>
    <?php echo $dateofrequest;?>
    </div>

    <div>
    <label> Time of Request </label>
   <?php echo $timeofrequest;?>
    </div>

    <div>
    <label> Inspection Date </label>
    <?php echo $inspectiondate;?>
    </div>

    <div>
    <label> Inspection Time </label>
    <?php echo $inspectiontime;?>
    </div>

    <div>
    <label> Inspection Place </label>
   <?php echo $inspectionplace;?>
    </div>
    <div>
    <label> Submitted by </label>
    <?php echo $submittedby;?>
    </div>

    <div>
    <label> GPF/CPS Number </label>
    <?php echo $gpf;?>
    </div>

    <div>
    <label> Number of Vehicles Involved </label>
    <?php echo $numberofvehiclesinvolved;?>
    </div>

        <div>
    <label> Nature of Accident </label>
    <?php echo $natureofaccident;?>
    </div>

    <div>
    <label> Cause of Accident </label>
    <?php echo $causeofaccident;?>
    </div>

    <div>
    <label> Remedies </label>
    <?php echo $remedies;?>
    </div>

    <div>
    <label> Concerned Department </label>
    <?php echo $concerneddept;?>
    </div>    

    <div>
    <label> Administrative Office </label>
    <?php echo $administrativeoffc;?>
    </div>

    <div>
    <label> Approximate Cost </label>
    <?php echo $appxcost;?>
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
$cno = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rtov1 WHERE cno='$cno' AND vh=1");
 
while($res = mysqli_fetch_array($result))
{

 $cno = $res['cno'];
$regno = $res['regno1'];
$roadtestcarried = $res['roadtestcarried'];
$efficiencyoffootbrake1 = $res['efficiencyoffootbrake1'];
$efficiencyofhandbrake1 = $res['efficiencyofhandbrake1'];
$evenornot1 = $res['evenornot1'];
$steering1 = $res['steering1'];
$conditionoftyres = $res['conditionoftyres'];
$descriptionofdefects = $res['descriptionofdefects'];
$frontreflectortape = $res['frontreflectortape'];
$rearreflectortape = $res['rearreflectortape'];
$opinion = $res['opinion'];
$skidmark = $res['skidmark'];
$descriptionofdamage = $res['descriptionofdamage'];
$checkreport = $res['checkreport'];


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
  <form method="POST" action="editrtov1.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3>Vehicle 1 DETAILS  FORM </h3> <br /> 
    <div>
    <label>Crime Number:</label>
    <?php echo $cno;?>
    </div>
    <div>
    <label>Registration Number:</label>
    <?php echo $regno;?>
    </div>
    <div>
    <label>Road Test Carried:</label>
    <?php echo $roadtestcarried;?>
    </div>
    <div>
    <label>Efficiency of Footbrake:</label>
    <?php echo $efficiencyoffootbrake1;?>
    </div>
    <div>
    <label>Efficiency of Handbrake:</label>
    <?php echo $efficiencyofhandbrake1;?>
    </div>
    
    <div>
    <label>Even or Not:</label>
   <?php echo $evenornot1;?>
    </div>

    <div>
    <label>Steering:</label>
    <?php echo $evenornot1;?>
    </div>

        <div>
    <label>Even or Not:</label>
   <?php echo $evenornot1;?>
    </div>

    <div>
    <label>Condition of Tyres:</label>
    <?php echo $conditionoftyres;?>
    </div>

    <div>
    <label>Description of Defects</label>
    <?php echo $descriptionofdefects;?>
    </div>

    <div>
    <label>Fixation of Front Reflectortape</label>
    <?php echo $frontreflectortape;?>
    </div>

        <div>
    <label>Fixation of Rear Reflectortape</label>
    <?php echo $rearreflectortape;?>
    </div>


    <div>
    <label>Opinion</label>
    <?php echo $opinion;?>
    </div>

    <div>
    <label>Skid Mark</label>
    <?php echo $skidmark;?>
    </div>

    <div>
    <label>Description of Damage</label>
    <?php echo $descriptionofdamage;?>
    </div>

    <div>
    <label>Checkreport</label>
    <?php echo $checkreport;?>
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
$cno = $_GET['crimenumber'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rtov1 WHERE cno='$cno' AND vh=2");
 
while($res = mysqli_fetch_array($result))
{

 $cno = $res['cno'];
$regno = $res['regno1'];
$roadtestcarried = $res['roadtestcarried'];
$efficiencyoffootbrake1 = $res['efficiencyoffootbrake1'];
$efficiencyofhandbrake1 = $res['efficiencyofhandbrake1'];
$evenornot1 = $res['evenornot1'];
$steering1 = $res['steering1'];
$conditionoftyres = $res['conditionoftyres'];
$descriptionofdefects = $res['descriptionofdefects'];
$frontreflectortape = $res['frontreflectortape'];
$rearreflectortape = $res['rearreflectortape'];
$opinion = $res['opinion'];
$skidmark = $res['skidmark'];
$descriptionofdamage = $res['descriptionofdamage'];
$checkreport = $res['checkreport'];


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
  <form method="POST" action="editrtov2.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3>Vehicle 1 DETAILS  FORM </h3> <br /> 
    <div>
    <label>Crime Number:</label>
    <?php echo $cno;?>
    </div>
    <div>
    <label>Registration Number:</label>
    <?php echo $regno;?>
    </div>
    <div>
    <label>Road Test Carried:</label>
    <?php echo $roadtestcarried;?>
    </div>
    <div>
    <label>Efficiency of Footbrake:</label>
    <?php echo $efficiencyoffootbrake1;?>
    </div>
    <div>
    <label>Efficiency of Handbrake:</label>
    <?php echo $efficiencyofhandbrake1;?>
    </div>
    
    <div>
    <label>Even or Not:</label>
   <?php echo $evenornot1;?>
    </div>

    <div>
    <label>Steering:</label>
    <?php echo $evenornot1;?>
    </div>

        <div>
    <label>Even or Not:</label>
   <?php echo $evenornot1;?>
    </div>

    <div>
    <label>Condition of Tyres:</label>
    <?php echo $conditionoftyres;?>
    </div>

    <div>
    <label>Description of Defects</label>
    <?php echo $descriptionofdefects;?>
    </div>

    <div>
    <label>Fixation of Front Reflectortape</label>
    <?php echo $frontreflectortape;?>
    </div>

        <div>
    <label>Fixation of Rear Reflectortape</label>
    <?php echo $rearreflectortape;?>
    </div>


    <div>
    <label>Opinion</label>
    <?php echo $opinion;?>
    </div>

    <div>
    <label>Skid Mark</label>
    <?php echo $skidmark;?>
    </div>

    <div>
    <label>Description of Damage</label>
    <?php echo $descriptionofdamage;?>
    </div>

    <div>
    <label>Checkreport</label>
    <?php echo $checkreport;?>
    </div>
    <div >
        <button class="btn btn-raised btn-unblock btn-danger"> logout </button>
    </div>    
  </form>
</div>
</body>
</html>