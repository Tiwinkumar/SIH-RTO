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
$comment = $_POST['comment'];
$unit = $_POST['unit'];
$who = $_POST['who'];
$contact = $_POST['contact'];
$relation = $_POST['relation'];




        
    
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
       $sql = "INSERT INTO customer (cno,zone,district,rto,unit,psta,comment,who,contact,relation) VALUES ('$crimenumber', '$zone', '$district', '$rto', '$unit', '$policestationname', '$comment', '$who', '$contact', '$relation')";

    mysqli_query($mysqli, $sql);



        //redirectig to the display page. In our case, it is index.php
        header("Location: find.php");
   
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
$unit = $res['unit'];


}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
             Comment Section
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
  <form method="POST" action="comment.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3><center>FORM A.I.R</center> </h3>
<h3><u><center>Inspection Report of Motor Vehicles Involved in Accident</center></u></h3>
<h4><center>(Rule 378 of the Tamil Nadu Motor Vehicles Rules 1989)</center></h4>
    <h3><center>ACCIDENTAL DETAILS ENTERING FORM </center></h3> <br /> 
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number  </label>
    <input  name="crimenumber" id="crimenumber" value="<?php echo $crimenumber;?>" class="form-control"  readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Police Station Name</label>
    <input  name="policestationname" id="policestationname" value="<?php echo $policestationname;?>" class="form-control"  readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>District</label>
    <input  name="district" id="district" class="form-control" value="<?php echo $district;?>"  readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Zone</label>
    <input  name="zone" id="zone" class="form-control" value="<?php echo $zone;?>"  readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>RTO</label>
    <input  name="rto" id="rto" class="form-control" value="<?php echo $rto;?>"  readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Unit</label>
    <input  name="unit" id="unit" class="form-control" value="<?php echo $unit;?>"  readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Comment</label>
    <input  name="comment" id="comment" class="form-control"  placeholder="Enter query" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>By</label>
    <input  name="who" id="who" class="form-control"  placeholder="Enter your name" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Contact</label>
    <input  name="contact" id="contact" class="form-control"  placeholder="Enter Mob.no" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Relationship</label>
    <input  name="relation" id="relation" class="form-control"  placeholder="Enter relation" >
    </div>
    
    
    <div>
        <button class="btn btn-raised btn-unblock btn-danger" type="submit" name="submit" ><strong>SUBMIT &rarr;</strong></button>
    </div>
       
  </form>
</div>
</body>
</html>