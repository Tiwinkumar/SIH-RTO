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
$requestfrom = mysqli_real_escape_string($db, $_POST['rf']);
$dateofrequest = mysqli_real_escape_string($db, $_POST['dor']);
$timeofrequest = mysqli_real_escape_string($db, $_POST['tor']);
$inspectiondate = mysqli_real_escape_string($db, $_POST['idate']);
$inspectiontime = mysqli_real_escape_string($db, $_POST['itime']);
$inspectionplace = mysqli_real_escape_string($db, $_POST['iplace']);
$submittedby = mysqli_real_escape_string($db, $_POST['sub']);
$gpf = mysqli_real_escape_string($db, $_POST['gpf']);
$numberofvehiclesinvolved = mysqli_real_escape_string($db, $_POST['novi']);
$natureofaccident = mysqli_real_escape_string($db, $_POST['na']);
$causeofaccident = mysqli_real_escape_string($db, $_POST['coa']);
$remedies = mysqli_real_escape_string($db, $_POST['remi']);
$concerneddept = mysqli_real_escape_string($db, $_POST['cd']);
$administrativeoffc = mysqli_real_escape_string($db, $_POST['ao']);
$appxcost = mysqli_real_escape_string($db, $_POST['apc']);
$status = mysqli_real_escape_string($db, $_POST['status']);


$regno = mysqli_real_escape_string($db, $_POST['reg1']);
$vh1 = mysqli_real_escape_string($db, $_POST['vh1']);
$roadtestcarried = mysqli_real_escape_string($db, $_POST['rtc1']);
$efficiencyoffootbrake = mysqli_real_escape_string($db, $_POST['rtcroth11']);
$efficiencyofhandbrake = mysqli_real_escape_string($db, $_POST['rtcfoth11']);
$evenornot = mysqli_real_escape_string($db, $_POST['rtceoth11']);
$steering = mysqli_real_escape_string($db, $_POST['rtcsoth11']);
$conditionoftyres = mysqli_real_escape_string($db, $_POST['cot1']);
$descriptionofdefects = mysqli_real_escape_string($db, $_POST['tyoth1']);
$frontreflector = mysqli_real_escape_string($db, $_POST['fref1']);
$rearreflector = mysqli_real_escape_string($db, $_POST['rref1']);
$opinion = mysqli_real_escape_string($db, $_POST['op1']);
$checkbox = mysqli_real_escape_string($db, $_POST['opch11']);
$wantoffluids = mysqli_real_escape_string($db, $_POST['wof1']);
$leakageofdefect = mysqli_real_escape_string($db, $_POST['lods1']);
$lackoflubrication = mysqli_real_escape_string($db, $_POST['lol1']);
$slacknessinadjustment = mysqli_real_escape_string($db, $_POST['sia1']);
$wornoutparts = mysqli_real_escape_string($db, $_POST['wop1']);
$lackoflubricationhand = mysqli_real_escape_string($db, $_POST['lol11']);
$slacknessinadjustmenthana = mysqli_real_escape_string($db, $_POST['sia11']);
$wornoutpartshand = mysqli_real_escape_string($db, $_POST['wop11']);
$skidmark = mysqli_real_escape_string($db, $_POST['smar1']);
$descriptionofdamage = mysqli_real_escape_string($db, $_POST['ddam1']);
$checkreport = mysqli_real_escape_string($db, $_POST['rema']);


$regno2 = mysqli_real_escape_string($db, $_POST['reg2']);
$vh2 = mysqli_real_escape_string($db, $_POST['vh2']);
$roadtestcarried2 = mysqli_real_escape_string($db, $_POST['rtc2']);
$efficiencyoffootbrake2 = mysqli_real_escape_string($db, $_POST['rtcroth21']);
$efficiencyofhandbrake2 = mysqli_real_escape_string($db, $_POST['rtcfoth21']);
$evenornot2 = mysqli_real_escape_string($db, $_POST['rtceoth21']);
$steering2 = mysqli_real_escape_string($db, $_POST['rtcsoth21']);
$conditionoftyres2= mysqli_real_escape_string($db, $_POST['cot2']);
$descriptionofdefects2 = mysqli_real_escape_string($db, $_POST['tyoth2']);
$frontreflector2 = mysqli_real_escape_string($db, $_POST['fref2']);
$rearreflector2 = mysqli_real_escape_string($db, $_POST['rref2']);
$opinion2 = mysqli_real_escape_string($db, $_POST['op2']);
$checkbox2 = mysqli_real_escape_string($db, $_POST['opch12']);
$wantoffluids2 = mysqli_real_escape_string($db, $_POST['wof2']);
$leakageofdefect2 = mysqli_real_escape_string($db, $_POST['lods2']);
$lackoflubrication2 = mysqli_real_escape_string($db, $_POST['lol2']);
$slacknessinadjustment2 = mysqli_real_escape_string($db, $_POST['sia2']);
$wornoutparts2 = mysqli_real_escape_string($db, $_POST['wop2']);
$lackoflubricationhand2 = mysqli_real_escape_string($db, $_POST['lol22']);
$slacknessinadjustmenthana2 = mysqli_real_escape_string($db, $_POST['sia22']);
$wornoutpartshand2 = mysqli_real_escape_string($db, $_POST['wop22']);
$skidmark2 = mysqli_real_escape_string($db, $_POST['smar2']);
$descriptionofdamage2 = mysqli_real_escape_string($db, $_POST['ddam2']);
$checkreport2 = mysqli_real_escape_string($db, $_POST['rema1']);

    $sql = "INSERT INTO rto (zone,district,rto,unit,cno,policestation,requestform,dateofrequest,timeofrequest,inspectiondate,inspectiontime,inspectionplace,submittedby,gpf,noofvehicleinvolved,regno1,regno2,natureofaccident,causeofaccident,remedies,concerneddept,administrativeoffc,appxcost,status) VALUES ('$zone', '$dis', '$rto', '$unit', '$cno', '$psta', '$requestfrom', '$dateofrequest', '$timeofrequest', '$inspectiondate', '$inspectiontime', '$inspectionplace', '$submittedby', '$gpf', '$numberofvehiclesinvolved', '$regno', '$regno2', '$natureofaccident', '$causeofaccident', '$remedies', '$concerneddept', '$administrativeoffc', '$appxcost', '$status')";


    $sql1 = "INSERT INTO rtov1 (cno,regno1,vh,roadtestcarried,efficiencyoffootbrake1,efficiencyofhandbrake1,evenornot1,steering1,conditionoftyres,descriptionofdefects,frontreflectortape,rearreflectortape,opinion,checkbox,wantoffluids,leakageofdefects,lackoflubrication1,slacknessinadjustment1,wornoutparts1,lackoflubrication2,slacknessinadjustment2,wornoutparts2,skidmark,descriptionofdamage,checkreport) VALUES ('$cno', '$regno', '$vh1', '$roadtestcarried', '$efficiencyoffootbrake', '$efficiencyofhandbrake', '$evenornot', '$steering', '$conditionoftyres', '$descriptionofdefects', '$frontreflector', '$rearreflector', '$opinion', '$checkbox', '$wantoffluids', '$leakageofdefect', '$lackoflubrication', '$slacknessinadjustment', '$wornoutparts', '$lackoflubricationhand', '$slacknessinadjustmenthana', '$wornoutpartshand', '$skidmark', '$descriptionofdamage', '$checkreport')";

    $sql2 = "INSERT INTO rtov1 (cno,regno1,vh,roadtestcarried,efficiencyoffootbrake1,efficiencyofhandbrake1,evenornot1,steering1,conditionoftyres,descriptionofdefects,frontreflectortape,rearreflectortape,opinion,checkbox,wantoffluids,leakageofdefects,lackoflubrication1,slacknessinadjustment1,wornoutparts1,lackoflubrication2,slacknessinadjustment2,wornoutparts2,skidmark,descriptionofdamage,checkreport) VALUES ('$cno', '$regno2', '$vh2', '$roadtestcarried2', '$efficiencyoffootbrake2', '$efficiencyofhandbrake2', '$evenornot2', '$steering2', '$conditionoftyres2', '$descriptionofdefects2', '$frontreflector2', '$rearreflector2', '$opinion2', '$checkbox2', '$wantoffluids2', '$leakageofdefect2', '$lackoflubrication2', '$slacknessinadjustment2', '$wornoutparts2', '$lackoflubricationhand2', '$slacknessinadjustmenthana2', '$wornoutpartshand2', '$skidmark2', '$descriptionofdamage2', '$checkreport2')";


    mysqli_query($db, $sql);
    mysqli_query($db, $sql1);
    mysqli_query($db, $sql2);
    
  }
  ?>