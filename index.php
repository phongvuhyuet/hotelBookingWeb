<?php include 'header.php';?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotel in Dubai</h1>
                <p class="animated fadeInUp">Most luxurious hotel of asia with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="//player.vimeo.com/video/55057393?title=0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form method="post" role="form" class="wowload fadeInRight" action="connDB.php">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone">
        </div>        
        <!-- <div class="form-group">
            <div class="row">
                 
            <select class="form-control" name="accomodates">
              <option>No. of Adult</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
            </div>
        </div>
         -->
        <div class="form-group">
            <div class="form-control">
                <!-- <label for="checkin">Check In:</label> -->
                <input type="date" id="checkin" name="checkin">
            </div>
        </div>
        <div class="form-group">
            <div class="form-control">
                <!-- <label for="checkout">Check Out:</label> -->
                <input type="date" id="checkout" name="checkout">
            </div>
        </div>
        <!-- <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
        </div> -->
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>