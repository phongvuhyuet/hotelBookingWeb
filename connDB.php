<?php
// if there was an mismatch in user's input then $checkErr = true
// and log out the error
include "backendPHP/validateForm.php";

//set session info
if (!session_id()) session_start();
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["phone"] = $phone;
$_SESSION["checkin"] = $checkin;
$_SESSION["checkout"] = $checkout;
include "header.php";
if ($checkErr == false) {
    include "success.php";
} else {
?>
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">

    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">ERROR</h1>
                <p class="animated fadeInUp"><?php echo $report ?></p>
                <a class="test2" href="index.php">
                    <span class="test"></span><span class="test"></span><span class="test"></span><span
                        class="test"></span>
                    Back
                </a>
            </div>


        </div>
    </div>
</div>
<?php
}
?>
<?php include "footer.php" ?>