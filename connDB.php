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

              echo "<h3>" . $row["roomName"] . "</h3>";
              ?>
                    <p>Our junior Suites offer breathtaking view of the city skyline.</p>

                    <hr
                        style="width:100%;text-align:left;margin-left:0;height:1px;border-width:0;color:gray;background-color:gray">
                    <?php if ($row['wifi'] == 1)  ?>
                    <i class="fa fa-wifi" style="font-size:20px;margin-left: 5px;"></i>

                    <?php if ($row['tv'] == 1) ?>
                    <i class="fa fa-tv" style="font-size:20px;margin-left: 5px;"></i>

                    <?php if ($row['air-conditional'] == 1) ?>
                    <i class="fa fa-asterisk" style="font-size:20px;margin-left: 5px;"></i>
                    <!-- <img class="scale" src="images/photos/air.jpg" alt="wifi" width="20px" height="20px"> -->

                    <?php

              $p = '<p style="text-align: right;font-size: 20px;font-weight: bold;">Price</p>';
              echo $p;
              $para = "";
              for ($i = 0; $i < 115; $i++) {
                $para .= "&nbsp;";
              }

              echo $para . "$" . $row['cost'];
              ?>

                    <a href=<?php echo $row["room_data"] ?> class="btn btn-default">Check Details</a>
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