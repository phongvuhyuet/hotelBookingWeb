<?php
$nameErr = $emailErr = $phoneErr = $checkinErr = $checkoutErr = "";
$name = $email = $phone = $checkin = $checkout = "";
$checkErr = false;
$report = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $checkErr = true;
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $checkErr = true;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $checkErr = true;
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
    $checkErr = true;
  } else {
    $phone = test_input($_POST["phone"]);
    $pattern = '/((09|03|07|08|05)+([0-9]{8})\b)/';
    if (preg_match($pattern, $phone, $match) == 0) {
      $phoneErr = "Invalid phone number";
      $checkErr = true;
    }
  }
  if (empty($_POST["checkin"])) {
    $checkinErr = "Check-in date is required";
    $checkErr = true;
  } else {
    $checkin = test_input($_POST["checkin"]);
  }
  if (empty($_POST["checkout"])) {
    $checkoutErr = "Check-out date is required";
    $checkErr = true;
  } else {
    $checkout = test_input($_POST["checkout"]);
  }
  if ($checkErr == true) {
    if ($nameErr != "" ) {
      $report .= $nameErr . "<br>";
    }
    if ($emailErr != "" ) {
      $report .= $emailErr . "<br>";
    }
    if ($phoneErr != "" ) {
      $report .= $phoneErr . "<br>";
    }
    if ($checkinErr != "" ) {
      $report .= $checkinErr . "<br>";
    }
    if ($checkoutErr != "" ) {
      $report .= $checkoutErr . "<br>";
    }
    
  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}