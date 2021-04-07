<?php include 'header.php'; ?>

<div class="container">

    <h2>Rooms & Tariff</h2>


    <!-- form -->

    <div class="row">
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/8.jpg" class="img-responsive">
                <div class="info">
                    <h3>Basic room</h3>
                    <?php
          $conn = new mysqli("localhost", "root", "", "databasehotel");
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM roomtype WHERE typeID = 1";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          echo "<ul>
                        <li>Accommodates: " . $row["accomodates"] . "</li>
                        <li>singleBeds: " . $row["singleBedNum"] . "</li>
                        <li>doubleBed: " . $row["doubleBedNum"] . "</li>
                        <li>Size: " . $row["size"] . " m2</li>
                        <li>Cost: " . $row["cost"] . " VND</li>
                    </ul>"
          ?>
                    <a href="room-details-1.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/9.jpg" class="img-responsive">
                <div class="info">
                    <h3>Luxirious Suites</h3>
                    <?php
          $conn = new mysqli("localhost", "root", "", "databasehotel");
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM roomtype WHERE typeID = 2";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          echo "<ul>
                        <li>Accommodates: " . $row["accomodates"] . "</li>
                        <li>singleBeds: " . $row["singleBedNum"] . "</li>
                        <li>doubleBed: " . $row["doubleBedNum"] . "</li>
                        <li>Size: " . $row["size"] . " m2</li>
                        <li>Cost: " . $row["cost"] . " VND</li>
                    </ul>"
          ?>
                    <a href="room-details-2.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/10.jpg" class="img-responsive">
                <div class="info">
                    <h3>Luxirious Suites</h3>
                    <p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret
                        passed. Absolute one hastened mrs any sensible</p>
                    <a href="room-details-3.php" class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/11.jpg" class="img-responsive">
                <div class="info">
                    <h3>Luxirious Suites</h3>
                    <p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret
                        passed. Absolute one hastened mrs any sensible</p><a href="room-details.php"
                        class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/9.jpg" class="img-responsive">
                <div class="info">
                    <h3>Luxirious Suites</h3>
                    <p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret
                        passed. Absolute one hastened mrs any sensible</p><a href="room-details.php"
                        class="btn btn-default">Check Details</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 wowload fadeInUp">
            <div class="rooms"><img src="images/photos/8.jpg" class="img-responsive">
                <div class="info">
                    <h3>Luxirious Suites</h3>
                    <p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret
                        passed. Absolute one hastened mrs any sensible</p><a href="room-details.php"
                        class="btn btn-default">Check Details</a>
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