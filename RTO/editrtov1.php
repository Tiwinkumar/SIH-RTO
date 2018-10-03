<?php
  $db = mysqli_connect("localhost", "root", "", "police");

// including the database connection file
 
 
//getting id from url
$crimenumber = $_GET['crimenumber'];

//selecting data associated with this particular id
$result = "INSERT INTO rtov1copy SELECT * FROM rtov1 WHERE cno='$crimenumber' AND vh=1 ";
//echo ("Success");
mysqli_query($db, $result); 

 
 ?>
 <?php

// including the database connection file
include_once("connect.php");
 
if(isset($_POST['submit']))
{    
    $cno = $_POST['cno'];
$regno = $_POST['regno'];
$roadtestcarried = $_POST['roadtestcarried'];
$efficiencyoffootbrake1 = $_POST['efficiencyoffootbrake1'];
$efficiencyofhandbrake1 = $_POST['efficiencyofhandbrake1'];
$evenornot1 = $_POST['evenornot1'];
$steering1 = $_POST['steering1'];
$conditionoftyres = $_POST['conditionoftyres'];
$descriptionofdefects = $_POST['descriptionofdefects'];
$frontreflectortape = $_POST['frontreflectortape'];
$rearreflectortape = $_POST['rearreflectortape'];
$opinion = $_POST['opinion'];
$skidmark = $_POST['skidmark'];
$descriptionofdamage = $_POST['descriptionofdamage'];
$checkreport = $_POST['checkreport'];

    
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
        $result = mysqli_query($mysqli, "UPDATE rtov1 SET cno='$cno' , regno1='$regno' , roadtestcarried='$roadtestcarried' , efficiencyoffootbrake1='$efficiencyoffootbrake1' , efficiencyofhandbrake1='$efficiencyofhandbrake1', evenornot1='$evenornot1' , steering1='$steering1' , conditionoftyres='$conditionoftyres' , descriptionofdefects='descriptionofdefects' , frontreflectortape='$frontreflectortape',rearreflectortape='$rearreflectortape',opinion='$opinion',skidmark='$skidmark',descriptionofdamage='$descriptionofdamage',checkreport='$checkreport' WHERE cno='$cno' AND vh=1");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: view.php");
   
}
?>
<?php
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
    <h3>Vehicle 1 DETAILS Editing FORM </h3> <br /> 
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Crime Number  </label>
    <input  name="cno" id="cno" value="<?php echo $cno;?>" class="form-control" readonly>
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i> Registration Number</label>
    <input  name="regno" id="regno" value="<?php echo $regno;?>" class="form-control" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Road Test Carried</label>
    <input  name="roadtestcarried" id="roadtestcarried" class="form-control" value="<?php echo $roadtestcarried;?>" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Efficiency of Footbrake</label>
    <input  name="efficiencyoffootbrake1" id="efficiencyoffootbrake1" class="form-control" value="<?php echo $efficiencyoffootbrake1;?>" >
    </div>
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Efficiency of Handbrake</label>
    <input  name="efficiencyofhandbrake1" id="efficiencyofhandbrake1" class="form-control" value="<?php echo $efficiencyofhandbrake1;?>" >
    </div>
    
    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Even or Not</label>
    <input  name="evenornot1" id="evenornot1" class="form-control" value="<?php echo $evenornot1;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Steering</label>
    <input  name="steering1" id="steering1" class="form-control" value="<?php echo $evenornot1;?>" >
    </div>

        <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Even or Not</label>
    <input  name="evenornot1" id="evenornot1" class="form-control" value="<?php echo $evenornot1;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Condition of Tyres</label>
    <input  name="conditionoftyres" id="conditionoftyres" class="form-control" value="<?php echo $conditionoftyres;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Description of Defects</label>
    <input  name="descriptionofdefects" id="descriptionofdefects" class="form-control" value="<?php echo $descriptionofdefects;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Fixation of Front Reflectortape</label>
    <input  name="frontreflectortape" id="frontreflectortape" class="form-control" value="<?php echo $frontreflectortape;?>" >
    </div>

        <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Fixation of Rear Reflectortape</label>
    <input  name="rearreflectortape" id="rearreflectortape" class="form-control" value="<?php echo $rearreflectortape;?>" >
    </div>


    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Opinion</label>
    <input  name="opinion" id="opinion" class="form-control" value="<?php echo $opinion;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Skid Mark</label>
    <input  name="skidmark" id="skidmark" class="form-control" value="<?php echo $skidmark;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Description of Damage</label>
    <input  name="descriptionofdamage" id="descriptionofdamage" class="form-control" value="<?php echo $descriptionofdamage;?>" >
    </div>

    <div>
    <label><i class="fa fa-car" aria-hidden="true"></i>Checkreport</label>
    <input  name="checkreport" id="checkreport" class="form-control" value="<?php echo $checkreport;?>" >
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