<?php 
                        
                            session_start();
                            if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                        ?>
                        
                            
                        <?php
                            }
                            ?>
                            <?php
 include_once("connect.php");
 $id = $_SESSION['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id'");

 
while($res = mysqli_fetch_array($result))
{
$psta = $res['psta'];
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Police Login</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="../header/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../header/css/logo-nav.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-warning fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
            <li class="nav-item">
        <a class="nav-link disabled" >User ID: <?php echo $id;
?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Policestation: <?php echo $psta;
?></a>
      </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Bootstrap core JavaScript -->
    <script src="../header/vendor/jquery/jquery.min.js"></script>
    <script src="../header/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  </html>