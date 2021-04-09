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
  include "backendPHP/getAvailableRoomType.php";
  //array String of available RoomTypeID is $roomTypeAvailable
  include "header.php"; ?>
<h2>Rooms & Tariff</h2>
<div class="container">
    <div class="row">
        <?php
      foreach ($roomTypeAvailable as $value) {
        $conn = new mysqli("localhost", "root", "", "databasehotel");
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM roomtype WHERE typeID = $value";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
      ?>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="<?php echo $row["img"] ?>" class="img-responsive">
                <div class="info">
                    <?php
              echo " <h3>" . $row["roomName"] . "</h3>
            <ul>
                        <li>Accommodates: " . $row["accomodates"] . "</li>
                        <li>singleBeds: " . $row["singleBedNum"] . "</li>
                        <li>doubleBed: " . $row["doubleBedNum"] . "</li>
                        <li>Size: " . $row["size"] . " m2</li>
                        <li>Cost: " . $row["cost"] . " VND</li>
                    </ul>"
              ?>

                    <a href="room-details.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
}
include "footer.php";
?>