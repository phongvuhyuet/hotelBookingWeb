<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=databasehotel", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //load table 
  $querry2 = "select * from room";
  $stmt2 = $conn->prepare($querry2);
  $stmt2->execute();
  // init associative array boolean for each roomID
  // init multidimenson array for each roomType have an array of roomID
  $checkRoom;
  $checkRoomType = array();
  while ($row2 = $stmt2->fetch()) {
    $checkRoom[$row2["roomID"]] = true;
    if (!isset($checkRoomType[$row2["roomTypeID"]])) {
      $checkRoomType[$row2["roomTypeID"]] = array();
    }
    array_push($checkRoomType[$row2["roomTypeID"]], $row2["roomID"]);
  }
  // make statement to fetch booking that have checkin checkout in the range of order date
  $querry1 = "select roomID from booking where not ((checkIn < '" . $checkin . "' and checkOut <= '" . $checkin . "') or (checkIn >= '" . $checkout . "' and checkOut > '" . $checkout . "'));";
  $stmt1 = $conn->prepare($querry1);
  $stmt1->execute();
  // check false for unavailable roomID
  while ($row1 = $stmt1->fetch()) {
    $checkRoom[$row1["roomID"]] = false;
  }
  // get available roomType
  $roomTypeAvailable = array();
  foreach ($checkRoomType as $key => $arr) {
    $check = false;
    foreach ($arr as $val) {
      if ($checkRoom[$val] == true) {
        $check = true;
        break;
      }
    }
    if ($check == true) array_push($roomTypeAvailable, $key);
  }
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}