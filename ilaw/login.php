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
    $dbname = "police";
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);


            $sql = "select * from ilaw where id='" . $id . "' and password = '" . $password . "';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row["id"];
                $_SESSION['password'] = $row["password"];
                header("Location: mono.php");
                exit;
//                include 'home.php';
            } else {
            	?>

    <script>alert('Enter Correct UserID and Password')</script>
<?php
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lawyer Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('../Login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="login.php" method="post">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="id" placeholder="User ID">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/bootstrap/js/popper.js"></script>
	<script src="../Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Login/js/main.js"></script>

</body>
</html>