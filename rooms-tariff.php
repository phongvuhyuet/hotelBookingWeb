<?php include 'header.php'; ?>

<div class="container">

    <h2>Rooms & Tariff</h2>


    <!-- form -->

    <div class="row">
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/8.jpg" class="img-responsive">
                <div class="info">
                    <?php
                    $conn = new mysqli("localhost", "root", "", "databasehotel");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomtype WHERE typeID = 1";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
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
                    <a href="room-101.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/9.jpg" class="img-responsive">
                <div class="info">
                    <?php
                    $conn = new mysqli("localhost", "root", "", "databasehotel");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomtype WHERE typeID = 2";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
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


                    <?php

                    $p = '<p style="text-align: right;font-size: 20px;font-weight: bold;">Price</p>';
                    echo $p;
                    $para = "";
                    for ($i = 0; $i < 115; $i++) {
                        $para .= "&nbsp;";
                    }

                    echo $para . "$" . $row['cost'];
                    ?>
                    <a href="room-201.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/10.jpg" class="img-responsive">
                <div class="info">
                    <?php
                    $conn = new mysqli("localhost", "root", "", "databasehotel");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomtype WHERE typeID = 3";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
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


                    <?php

                    $p = '<p style="text-align: right;font-size: 20px;font-weight: bold;">Price</p>';
                    echo $p;
                    $para = "";
                    for ($i = 0; $i < 115; $i++) {
                        $para .= "&nbsp;";
                    }

                    echo $para . "$" . $row['cost'];
                    ?>
                    <a href="room-301.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/11.jpg" class="img-responsive">
                <div class="info">
                    <?php
                    $conn = new mysqli("localhost", "root", "", "databasehotel");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomtype WHERE typeID = 4";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
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


                    <?php

                    $p = '<p style="text-align: right;font-size: 20px;font-weight: bold;">Price</p>';
                    echo $p;
                    $para = "";
                    for ($i = 0; $i < 115; $i++) {
                        $para .= "&nbsp;";
                    }

                    echo $para . "$" . $row['cost'];
                    ?>
                    <a href="room-401.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>



        <!-- <div class="text-center">
        <ul class="pagination">
            <li class="disabled"><a href="#">«</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div> -->


    </div>
    <?php include 'footer.php'; ?>