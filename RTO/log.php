<?php
$responseMsg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['id']))
    {
    $id = $_POST['id'];
}
if(isset($_POST['password']))
    {
    $password = $_POST['password'];
}
    session_start();

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "rto";
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);


            $sql = "select * from login where uid='" . $id . "' and password = '" . $password . "';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row["id"];
                $_SESSION['password'] = $row["password"];
                exit;
//                include 'home.php';
            } else {
                echo 'error ';
            }
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Police</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

    <div><?php echo $responseMsg;?></div>
<form action="entry2.html" method="post">
  <div class="login-wrap">
    <div class="login-html">
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="name" class="label">User Id</label>
                    <input id="id" type="text" name="id" class="input">
                </div>
                <div class="group">
                    <label for="password" class="label">Password</label>
                    <input id="password" name="password" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
            </div>
        </div>
    </div>
</div>
</label>
</div>
</div>
</div>
</div>
</div>
</form>

</body>
<style>
    .success{
    color : #0F0;
    padding: 10px;
}

.error{
    color : #F00;
    padding: 10px;
}
</style>
</html>