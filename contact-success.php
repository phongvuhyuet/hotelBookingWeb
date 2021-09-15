<?php
include 'backendPHP/validateFormContact.php';
include "header.php";
if ($checkErr == false) {
    $hostname = "us-cdbr-east-04.cleardb.com";
    $username = "b2032f6fa74e31";
    $password = "07995654";
    $database = "heroku_e35eedde88722eb";
    $conn = new mysqli($hostname, $username, $password, $database);
    $querry = "select * from customer
        where name = '" . $name . "' and email = '" . $email . "' and phoneNumber = '" . $phone . "';";

    $res = $conn->query($querry);
    $result = $res->fetch_assoc();
    if ($result == false) {
        $querry = "INSERT INTO customer (name, phoneNumber, email)
            VALUES ('" . $name . "', '" . $phone . "', '" . $email . "');";
        $conn->query($querry);
    }
    $querry2;
    if ($result == false) {
        $querry2 = "insert into message (messageContent, customerID)
            values('" . $message . "',last_insert_id());";
    } else {
        $querry2 = "insert into message (messageContent, customerID)
            values('" . $message . "'," . $result["customerID"] . ");";
    }
    $conn->query($querry2);
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