<?php
  $db = mysqli_connect("localhost", "root", "", "police");

// including the database connection file
 
 
//getting id from url
$crimenumber = $_GET['crimenumber'];

//selecting data associated with this particular id
$result = "INSERT INTO rtocopy SELECT * FROM rto WHERE cno='$crimenumber'";
//echo ("Success");
mysqli_query($db, $result); 

 
 ?>

<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['submit']))
{    
    $zone = $_POST['zone'];
$dis = $_POST['district'];
$rto = $_POST['rto'];
$unit = $_POST['unit'];
$psta = $_POST['policestation'];
$cno = $_POST['cno'];
$requestfrom = $_POST['requestfrom'];
$dateofrequest = $_POST['dateofrequest'];
$timeofrequest = $_POST['timeofrequest'];
$inspectiondate = $_POST['inspectiondate'];
$inspectiontime = $_POST['inspectiontime'];
$inspectionplace = $_POST['inspectionplace'];
$submittedby = $_POST['submittedby'];
$gpf = $_POST['gpf'];
$numberofvehiclesinvolved = $_POST['noofvehicleinvolved'];
$natureofaccident = $_POST['natureofaccident'];
$causeofaccident = $_POST['causeofaccident'];
$remedies = $_POST['remedies'];
$concerneddept = $_POST['concerneddept'];
$administrativeoffc = $_POST['administrativeoffc'];
$appxcost = $_POST['appxcost'];

        
    
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
        $result = mysqli_query($mysqli, "UPDATE rto SET zone='$zone' , district='$dis' , rto='$rto' , unit='$unit' , policestation='$psta', cno='$cno' , requestform='$requestfrom' , dateofrequest='$dateofrequest' , timeofrequest='$timeofrequest' , inspectiondate='$inspectiondate', inspectiontime='$inspectiontime' , inspectionplace='$inspectionplace', submittedby='$submittedby' , gpf='$gpf' , noofvehicleinvolved='$numberofvehiclesinvolved', natureofaccident='$causeofaccident' , remedies='remedies' , concerneddept='$concerneddept',administrativeoffc='$administrativeoffc',appxcost='$appxcost'   WHERE cno='$cno'");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: view.php");
   
}
?>
<?php
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
  <form method="POST" action="editrto.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3>RTO DETAILS EDITING FORM </h3> <br /> 
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Zone  </label>
    <input  name="zone" id="zone" value="<?php echo $zone;?>" class="form-control" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> District  </label>
    <input  name="district" id="district" value="<?php echo $dis;?>" class="form-control" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>RTO</label>
    <input  name="rto" id="rto" class="form-control" value="<?php echo $rto;?>" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Unit</label>
    <input  name="unit" id="unit" class="form-control" value="<?php echo $unit;?>" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Police Station </label>
    <input  name="policestation" id="policestation" class="form-control" value="<?php echo $psta;?>" readonly>
    </div>
    
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number </label>
    <input  name="cno" id="cno" class="form-control" value="<?php echo $cno;?>" readonly>
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Request From </label>
    <input  name="requestfrom" id="requestfrom" class="form-control" value="<?php echo $requestfrom;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Date of Request </label>
    <input  name="dateofrequest" id="dateofrequest" class="form-control" value="<?php echo $dateofrequest;?>" type="Date" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Time of Request </label>
    <input  name="timeofrequest" id="timeofrequest" class="form-control" value="<?php echo $timeofrequest;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Inspection Date </label>
    <input  name="inspectiondate" id="inspectiondate" class="form-control" value="<?php echo $inspectiondate;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Inspection Time </label>
    <input  name="inspectiontime" id="inspectiontime" class="form-control" value="<?php echo $inspectiontime;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Inspection Place </label>
    <input  name="inspectionplace" id="inspectionplace" class="form-control" value="<?php echo $inspectionplace;?>" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Submitted by </label>
    <input  name="submittedby" id="submittedby" class="form-control" value="<?php echo $submittedby;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> GPF/CPS Number </label>
    <input  name="gpf" id="gpf" class="form-control" value="<?php echo $gpf;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Number of Vehicles Involved </label>
    <input  name="noofvehicleinvolved" id="noofvehicleinvolved" class="form-control" value="<?php echo $numberofvehiclesinvolved;?>" >
    </div>

        <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Nature of Accident </label>
    <input  name="natureofaccident" id="natureofaccident" class="form-control" value="<?php echo $natureofaccident;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Cause of Accident </label>
    <input  name="causeofaccident" id="causeofaccident" class="form-control" value="<?php echo $causeofaccident;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Remedies </label>
    <input  name="remedies" id="remedies" class="form-control" value="<?php echo $remedies;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Concerned Department </label>
    <input  name="concerneddept" id="concerneddept" class="form-control" value="<?php echo $concerneddept;?>" >
    </div>    

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Administrative Office </label>
    <input  name="administrativeoffc" id="administrativeoffc" class="form-control" value="<?php echo $administrativeoffc;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Approximate Cost </label>
    <input  name="appxcost" id="appxcost" class="form-control" value="<?php echo $appxcost;?>" >
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