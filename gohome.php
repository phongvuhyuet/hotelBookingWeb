<?php 
    include 'header.php'; 
    if (!session_id()) session_start();
    include 'backendphp/validateForm.php';
    echo $checkErr;
    if ($checkErr == false) {
        include 'backendphp/getAvailableRoomType.php';
        //insert customer info to database
        $conn = new PDO("mysql:host=localhost;dbname=databasehotel", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $querry = "INSERT INTO customer (name, phoneNumber, email)
        VALUES ('". $name ."', '". $phone ."', '". $email ."');";
        $stmt = $conn->prepare($querry);
        $stmt->execute();
        
        if (sizeof($roomTypeAvailable) == 0 || (array_search($_SESSION["roomType"], $roomTypeAvailable) == false && ($roomTypeAvailable[0] != $_SESSION["roomType"]))) {
            echo"no <br>";
            echo var_dump($roomTypeAvailable);
        }
        else  {
            foreach($checkRoomType[$_SESSION["roomType"]] as $room) {
                if ($checkRoom[$room] == true) {
                    $querry2= "insert into booking (checkIn, checkOut, customerID, roomID)
                    values('".$checkin."','".$checkout."',last_insert_id(),'".$room."');";
                    $stmt2 = $conn->prepare($querry2);
                    $stmt2->execute();

?>
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">
    
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">SUCCESSFUL!</h1>
                <p class="animated fadeInUp">THANKS FOR TRUST OUR SERVICE</p>
                <a class="test2" href="index.php">
                <span class="test"></span ><span class="test"></span><span class="test"></span><span class="test"></span>
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
    }


?>

<?php 
include 'footer.php';
?>