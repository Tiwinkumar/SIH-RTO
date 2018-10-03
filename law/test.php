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
$status = $_POST['status'];
$la=$_POST['la'];


        
    
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
        //$result = mysqli_query($mysqli, "UPDATE lbasic SET psta='$policestationname' , dis='$district' , zone='$zone' , rto='$rto' , ipc='$ipcsection', natureofaccident='$natureofaccident' , placeofaccident='$placeofaccident' , accidentdate='$accidentdate' , accidenttime='$accidenttime' , numberofvehiclesinvolved='$numberofvehicles', collisiontype='$collisiontype' , junctiontype='$junctiontype', junctioncontrol='$junctioncontrol' , roadcategory='$roadcategory' , roadnarrowing='$roadnarrowing' , lightconditions='$lightcondition' , climate='climate', status='$status', la='$la' WHERE cno='$crimenumber' ");

    $sql = "INSERT INTO lbasic (psta,dis,zone,rto,ipc,natureofaccident,placeofaccident,accidentdate,accidenttime,numberofvehiclesinvolved,collisiontype,junctiontype,junctioncontrol,roadcategory,roadnarrowing,lightconditions,climate,status,la,cno) VALUES ('$policestationname', '$district', '$zone', '$rto', '$ipcsection', '$natureofaccident', '$placeofaccident', '$accidentdate', '$accidenttime', '$numberofvehicles', '$collisiontype', '$junctiontype', '$junctioncontrol', '$roadcategory', '$roadnarrowing', '$lightcondition', '$climate', '$status', '$la', '$crimenumber')";
            mysqli_query($mysqli, $sql);

        //redirectig to the display page. In our case, it is index.php
        header("Location: mono.php");
   
}
?>
<?php
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
             Basic Details
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
  <form method="POST" action="test.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3><center>FORM A.I.R</center> </h3>
<h3><u><center>Inspection Report of Motor Vehicles Involved in Accident</center></u></h3>
<h4><center>(Rule 378 of the Tamil Nadu Motor Vehicles Rules 1989)</center></h4>
    <h3><center>ACCIDENTAL DETAILS ENTERING FORM </center></h3> <br /> 
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number  </label>
    <input  name="crimenumber" id="crimenumber" value="<?php echo $crimenumber;?>" class="form-control" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Police Station Name</label>
    <input  name="policestationname" id="policestationname" value="<?php echo $policestationname;?>" class="form-control" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>District</label>
    <input  name="district" id="district" class="form-control" value="<?php echo $district;?>" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Zone</label>
    <input  name="zone" id="zone" class="form-control" value="<?php echo $zone;?>" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>RTO</label>
    <input  name="rto" id="rto" class="form-control" value="<?php echo $rto;?>" placeholder="Enter Number" readonly>
    </div>
    
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>IPC Section</label>
    <input  name="ipcsection" id="ipcsection" class="form-control" value="<?php echo $ipcsection;?>" placeholder="Enter Number" readonly>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Nature of Accident</label>
     <input name='natureofaccident' id='natureofaccident' value="<?php echo $natureofaccident;?>" class="form-control" readonly>
      </input>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Accident Date</label>
    <input  name="accidentdate" id="accidentdate" type="Date" class="form-control" value="<?php echo $accidentdate;?>" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Accident Time</label>
    <input  name="accidenttime" id="accidenttime" type="Time" class="form-control" value="<?php echo $accidenttime;?>" placeholder="Enter Number" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Place of Accident</label>
    <input  name="placeofaccident" id="placeofaccident" class="form-control" value="<?php echo $placeofaccident;?>" placeholder="Enter Number" readonly>
    </div>
    <div>
     <label><i class="fa fa-user" aria-hidden="true"></i>Number of Vehicles</label>
     <input name='numberofvehicles' id='numberofvehicles' value="<?php echo $numberofvehicles;?>" class="form-control" readonly>
   
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Collision Type</label>
     <input name='collisiontype' id='collisiontype' value="<?php echo $collisiontype;?>" class="form-control"readonly>

      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Junction Type</label>
     <input name='junctiontype' id='junctiontype' value="<?php echo $junctiontype;?>" class="form-control" readonly>
  
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Junction Control</label>
     <input name='junctioncontrol' id='junctioncontrol' value="<?php echo $junctioncontrol;?>" class="form-control" readonly>
     
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Road Category</label>
     <input name='roadcategory' id='roadcategory' value="<?php echo $roadcategory;?>" class="form-control" readonly>
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Road Narrowing</label>
     <input name='roadnarrowing' id='roadnarrowing' value="<?php echo $roadnarrowing;?>" readonly class="form-control" readonly>
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Light Condition</label>
     <input name='lightcondition' id='lightcondition' value="<?php echo $lightcondition;?>" class="form-control" readonly>
      
      </input>
    </div>
    <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Climate</label>
     <input name='climate' id='climate' value="<?php echo $climate;?>" class="form-control" readonly>
      </input>
    </div>
      <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Status</label>
     <input name='status' id='status' value="<?php echo $status;?>" class="form-control" readonly>

     <div >
     <label><i class="fa fa-user" aria-hidden="true"></i>Select a Lawyer </label>
     <select name='la' id='la' value="<?php echo $natureofaccident;?>" class="form-control">
      <option value="">Select the value</option>
      <option value="Obama" selected="selected">obama</option>
       <option value="Mark">mark</option>
      <option value="Balaji">Balaji</option>
      <option value="Rock">Rock</option>
      <option value="Jhon">Jhon</option>
      </select>
    </div>
     
      </input>
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