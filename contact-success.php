<?php
include 'backendPHP/validateFormContact.php';
include "header.php";
if ($checkErr == false) {
    $conn = new PDO("mysql:host=localhost;dbname=databasehotel", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $querry = "select * from customer
        where name = '" . $name . "' and email = '" . $email . "' and phoneNumber = '" . $phone . "';";
    $stmt1 = $conn->prepare($querry);
    $stmt1->execute();
    $result = $stmt1->fetch();
    if ($result == false) {
        $querry = "INSERT INTO customer (name, phoneNumber, email)
            VALUES ('" . $name . "', '" . $phone . "', '" . $email . "');";
        $stmt = $conn->prepare($querry);
        $stmt->execute();
    }
    $querry2;
    if ($result == false) {
        $querry2 = "insert into message (messageContent, customerID)
            values('" . $message . "',last_insert_id());";
    } else {
        $querry2 = "insert into message (messageContent, customerID)
            values('" . $message . "'," . $result["customerID"] . ");";
    }
    $stmt2 = $conn->prepare($querry2);
    $stmt2->execute();
?>
<div class="banner">
    <img src="images/photos/banner.jpg" class="img-responsive" alt="slide">

    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">SUCCESS</h1>
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
include "footer.php";
?>