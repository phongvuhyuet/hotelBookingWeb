<?php
include 'header.php';
if (!session_id()) session_start();
include "backendPHP/validateForm.php";
echo (var_dump($checkErr));
if ($checkErr == false) {
    echo("khong loi");
    include 'backendPHP/getAvailableRoomType.php';
    
   //insert customer info to database
   $hostname = "remotemysql.com";
   $username = "F4Wwgj61sG";
   $password = "XXDDlCPtw2";
   $database = "F4Wwgj61sG";
   $conn = new mysqli($hostname, $username,$password,$database);
   $querry = "select * from customer
   where name = '". $name ."' and email = '". $email ."' and phoneNumber = '". $phone ."';";
   $res = $conn->query($querry);
    $result = $res->fetch_assoc();
   if ($result == false) {
       $querry = "INSERT INTO customer (name, phoneNumber, email)
       VALUES ('". $name ."', '". $phone ."', '". $email ."');";
       $conn->query($querry);
   }
    if (sizeof($roomTypeAvailable) == 0 || (array_search($_SESSION["roomType"], $roomTypeAvailable) == false && ($roomTypeAvailable[0] != $_SESSION["roomType"]))) {
?>
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">

    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">SORRY!</h1>
                <p class="animated fadeInUp">No room is available! Please choose other room type or other days</p>
                <a class="test2" href="rooms-tariff.php">
                    <span class="test"></span><span class="test"></span><span class="test"></span><span
                        class="test"></span>
                    Back
                </a>
            </div>


        </div>
    </div>
</div>

<?php

    } else {
        foreach ($checkRoomType[$_SESSION["roomType"]] as $room) {
            if ($checkRoom[$room] == true) {
                $querry2;
                    if ($result == false) {
                        $querry2= "insert into booking (checkIn, checkOut, customerID, roomID)
                        values('".$checkin."','".$checkout."',last_insert_id(),'".$room."');";
                    } else {
                        $querry2= "insert into booking (checkIn, checkOut, customerID, roomID)
                        values('".$checkin."','".$checkout."',". $result["customerID"] .",'".$room."');";
                    }
                    $conn->query($querry2);

        ?>
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">

    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">SUCCESSFUL!</h1>
                <p class="animated fadeInUp">THANKS FOR TRUST OUR SERVICE</p>
                <a class="test2" href="index.php">
                    <span class="test"></span><span class="test"></span><span class="test"></span><span
                        class="test"></span>
                    Home
                </a>
            </div>


        </div>
    </div>
</div>


<?php
                break;
            }
        }
    }
    echo("vuot qua");
} else {
    echo("co loi");
    ?>
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">

    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">ERROR</h1>
                <p class="animated fadeInUp"><?php echo $report ?></p>
                <a class="test2" href="<?php
                                            if ($_SESSION["roomType"] == 1) echo "room-101.php";
                                            if ($_SESSION["roomType"] == 2) echo "room-201.php";
                                            if ($_SESSION["roomType"] == 3) echo "room-301.php";
                                            if ($_SESSION["roomType"] == 4) echo "room-401.php";
                                            ?>">
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

<?php
include 'footer.php';
?>