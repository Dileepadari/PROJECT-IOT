<?php
include("classes/login_c.php");
$login = new Login();
$user_data = $login->check_login($_SESSION['IOT_userid']);
$USER = $user_data;

if(!(isset($USER))){
  
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<?php
    include("header.php");
    ?>
    <div class="main-panel">
 <?php
    include("navbar.php"); 
    ?>

<div class="" style="margin-left: 5%;margin-top: 200px;">
    <img src="images/aa.jpeg" alt="allu" width="95%" height="700px">
</div>
<br><br><br>
<iframe src="https://fortress.maptive.com/ver4/475ddcbab1805685015d6571eb9d778d/573815" frameborder="0" width="90%" height="800" style="margin-left:5%" allow="geolocation"></iframe>

<?php include("footer.php"); ?>
<script>
        var element = document.getElementById("circuit");
        element.classList.add("active");
</script>
</div>
