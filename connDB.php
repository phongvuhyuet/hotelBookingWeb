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

if ($checkErr == false) {
  include "success.php";
} else{
  ?>
  <script>

  alert("<?php echo $report; ?>");
  

  </script>
  <?php
  include "index.php";
}
?>