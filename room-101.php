<?php include 'header.php';
if (!session_id()) session_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php
            $conn = new mysqli("localhost", "root", "", "databasehotel");
            $sql = "SELECT * FROM roomtype WHERE typeId = 01 ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            ?>
            <h1 class="title"><?php echo $row["roomName"] ?></h1>



            <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/9.jpg" class="img-responsive" alt="slide">
                    </div>
                    <div class="item  height-full"><img src="images/photos/10.jpg" class="img-responsive" alt="slide">
                    </div>
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
                    <div class="col-sm-12 col-md-6">
                        <!-- xu ly service -->

                        <h3>Our room's service :</h3>
                        <?php if ($row['wifi'] == 1)  ?>
                        <ul>
                            <li><i class="fa fa-wifi"></i>Wifi</li>
                            <br>
                            <?php if ($row['tv'] == 1) ?>
                            <li><i class="fa fa-tv"></i> Television</li>
                            <br>
                            <?php if ($row['air-conditional'] == 1) ?>
                            <li><i class="fa fa-asterisk"></i>Air-conditional</li>
                            <br>
                        </ul>
                        <?php
                        $var = '<hr style="width:100%;text-align:left;margin-left:0;height:1px;border-width:0;color:gray;background-color:gray">';
                        echo $var;
                        echo "<h3>Properties:</h3>";
                        echo "<ul>
                    <li>Accommodates: " . $row["accomodates"] . "</li><br>
                    <li>singleBeds: " . $row["singleBedNum"] . "</li><br>
                    <li>doubleBed: " . $row["doubleBedNum"] . "</li>
                    </ul>"


                        ?>



                    </div>
                    <!-- <div class="col-sm-6 col-md-3 amenitites">
                        <h3>Amenitites</h3>
                        <ul>
                            <li>One of the greatest barriers to making the sale is your prospect.</li>
                            <li>Principle to work to make more money while having more fun.</li>
                            <li>Unlucky people. Don't stubbornly.</li>
                        </ul>


                </div> -->
                    <div class="col-sm-3 col-md-3">
                        <div class="size-price">
                            Size
                            <?php
                            echo "<span>" . $row["size"] . " m2</span>";
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="size-price">
                            Price
                            <?php
                            echo "<span>" . $row["cost"] . "</span>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <h1 class="title">Reservation</h1>
            <form method="post" role="form" class="wowload fadeInRight" action="gohome.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="Phone" class="form-control" placeholder="Phone" name="phone" required>
                </div>



                <div class="form-group ">

                    <label for="checkin">Check In:</label>

                    <input type="date" class="form-control" placeholder="checkin" name="checkin" required>

                </div>
                <div class="form-group ">
                    <!-- <div class="form-control"> -->
                    <label for="checkout">Check Out:</label>

                    <input type="date" class="form-control" id="checkout" name="checkout" required>
                    <!-- </div> -->
                </div>

                <!-- <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
        </div> -->
                <button class="btn btn-default">Book now</button>
            </form>
        </div>

    </div>



</div>
<?php include 'footer.php';
$_SESSION["roomType"] = "01"; ?>