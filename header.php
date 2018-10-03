<?php include 'includes.php';?>
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="wthree_agile_login">
            <ul>
                <?php
                if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                    $result = mysqli_query($mysqli, "SELECT * FROM login WHERE id='$id'");

echo $id;

while($res = mysqli_fetch_array($result))
{
$psta = $res['psta'];
}
                    ?>
                    <li>
                        <li><a href="mono.php">Home</a></li>
                        <li><?php echo $_SESSION['id']; ?></li>
                        <li><?php echo $psta; ?></li>
                    </li>

                    <li><a href="logout.php">Logout</a></li>
                    <?php
                } 
                    ?>                    
            </ul>
        </div>

    </div>
</div>