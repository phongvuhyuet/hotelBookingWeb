<?php include 'header.php'; ?>

<div class="container">

    <h1 class="title">Basic Room</h1>



    <!-- RoomDetails -->
    <div id="RoomDetails" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
            <div class="item  height-full"><img src="images/photos/9.jpg" class="img-responsive" alt="slide"></div>
            <div class="item  height-full"><img src="images/photos/10.jpg" class="img-responsive" alt="slide"></div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i
                class="fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i
                class="fa fa-angle-right"></i></a>
    </div>
    <!-- RoomCarousel-->

    <div class="room-features spacer">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <?php
                $conn = new mysqli("localhost", "root", "", "databasehotel");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM roomtype WHERE typeID = 1";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo "<h3>Properties:</h3>";
                echo "<ul>
                    <li>Accommodates: " . $row["accomodates"] . "</li><br>
                    <li>singleBeds: " . $row["singleBedNum"] . "</li><br>
                    <li>doubleBed: " . $row["doubleBedNum"] . "</li>
                </ul>"
                ?>
            </div>


            <div class="col-sm-6 col-md-4 amenitites">
                <?php
                $conn = new mysqli("localhost", "root", "", "databasehotel");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM roomtype WHERE typeID = 1";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo "<h3>Amenitites:</h3>";
                if ($row["wifi"] == 1)
                    echo "<ul>
                        <li> WiFi </li>
                    </ul>";
                if ($row["tv"] == 1)
                    echo "<ul>
                        <li> TV </li>
                    </ul>";
                if ($row["air-conditional"] == 1)
                    echo "<ul>
                        <li> Air-conditional </li>
                    </ul>";
                ?>
            </div>


            <div class="col-sm-3 col-md-2">
                <div class="size-price">
                    Size
                    <?php
                    $conn = new mysqli("localhost", "root", "", "databasehotel");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomtype WHERE typeID = 1";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo "<span>" . $row["size"] . " m2</span>";
                    ?>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="size-price">
                    Price
                    <?php
                    $conn = new mysqli("localhost", "root", "", "databasehotel");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM roomtype WHERE typeID = 1";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo "<span>" . $row["cost"] . "</span>";
                    ?>
                </div>
            </div>
        </div>
    </div>



</div>
<?php include 'footer.php'; ?>