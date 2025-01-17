<?php
require ('database.php');
$query = 'SELECT Price FROM room_categories ORDER BY Room_id';
$statement = $db -> prepare($query);
$statement -> execute();
$price = $statement -> fetchAll();
$statement -> closeCursor();

$queryRoomCategories = 'SELECT Available FROM room_categories ORDER BY Room_id';
$statementRoomCategories = $db ->prepare($queryRoomCategories);
$statementRoomCategories -> execute();
$RoomCategories = $statementRoomCategories -> fetchAll();
$statementRoomCategories -> closeCursor();

@$check_in = $_POST['check_in_date'];
@$check_out = $_POST['check_out_date'];
@$adult = $_POST['adult'];
@$child = $_POST['child'];
@$roomNumber = $_POST['roomNumber'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Room</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" type="text/css" href="css/Head_Foot.css">
    <link rel="stylesheet" type="text/css" href="css/Room.css">
</head>
<body style="background-color: #AEC6CF;">
<div class="main_logo">
    <div>
        <a href="index.php"><img class="logo"  src="images/logo.png" alt="logo"></a>
    </div>
    <div id="hotel_name"><em>
            COA Plaza Hotel
        </em>
    </div>
    
    <div id="top">
        <a class="Book_Now_Top" href="Room.php"> &nbspBook Now</a>
    </div>
    <div id="top">
            <a class="Book_Now_Top" href="logIn.php" > &nbspLogin</a>
        </div>
</div>
<hr class="hr_1">
<div class="top_nav">
    <div><a class="nav_rooms" href="Room.php">Rooms</a></div>
    <div><a class="nav_dinning" href="Dining.php">Dining</a></div>
    <div><a class="nav_facilities" href="FacilitiesandService.php">Facility and Service</a></div>
    <div><a class="nav_location" href="Location.php">Location</a></div>
</div>


<br><strong>Luxury Suites</strong>
<p>Our stylish and well-appointed Guest Rooms offer the very best in comfort and privacy, while providing a peaceful retreat in which to relax and unwind throughout your stay. Ideal for both business trips or family vacations, these expansive Suites provide all the extra space you could need for your stay, with separate sleeping and living spaces.</p>
<br><br>
<form action="Book.php" method="post">
<input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
<input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
<input type="hidden" name="adult" value="<?php echo $adult; ?>">
<input type="hidden" name="child" value="<?php echo $child; ?>">
<input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">

</form>

<div class="Rooms">
    <img src="images/room/yassmine.jpg" height =" 250px"alt="Yassmine">
    <div class="r_des">
        <h4 class="room_name">Yassmine Suite</h4>
        <p><b>Room Size: </b>490 sq. ft</p><br>
        <p>Located on our highest floors, enjoy skyscraper views of Tribeca in your comforting, contemporary room featuring a deep soaking tub. <b>(<?php echo $RoomCategories['0']['0']; ?> Available)</b></p><br>
        <p></p>
        <p>Rates starting from </p>
        <Strong class="price">USD <?php echo $price['0']['Price'] ; ?>/night</Strong><br>
        <div class="r_book_now">
            <form action="Book.php" method="post">
                <input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
                <input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
                <input type="hidden" name="adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="child" value="<?php echo $child; ?>">
                <input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">
                <input type="hidden" value="Yassmine Suite" name="room">
                <?php if ($RoomCategories['0']['0'] > 0){
                echo '<input class="submit" type="submit" value="BOOK NOW">'; }else{echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSold Out';}
                ?>
            </form>
        </div>
    </div>
</div>
<div class="Suites">
    <img src="images/room/Suite-Wallis-Chambre.jpg" height =" 250px" alt="Wallis Simpson">
    <div class="r_des">
        <h4 class="room_name">Wallys Simpson</h4>
        <p><b>Room Size: </b>425 sq. ft.</p><br>
        <p>Spacious accommodations with a contemporary design aesthetic and ample closet space for your shopping finds to make you feel right at home.
 <b>(<?php echo $RoomCategories['3']['0']; ?> Available)</b></p><br>
        <p>Rates starting from </p>
        <Strong class="price">USD <?php echo $price['3']['Price'] ; ?>/night</Strong><br>
        <div class="r_book_now">
            <form action="Book.php" method="post">
                <input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
                <input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
                <input type="hidden" name="adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="child" value="<?php echo $child; ?>">
                <input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">
                <input type="hidden" value="Wallys Simpson" name="room">
                <?php if ($RoomCategories['0']['0'] > 0){
                    echo '<input class="submit" type="submit" value="BOOK NOW">'; }else{echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSold Out';}
                ?>
            </form>
        </div>
    </div>
</div>
<div class="Rooms">
    <img src="images/room/Suite-Klee-Salon-SAM.jpg" height ="250 px"alt="August Mack">
    <div class="r_des">
        <h4 class="room_name">August Mack Suite</h4>
        <p><b>Room Size: </b>725 sq. ft.</p><br>
        <p>This suite is ideal for the travelling executive or for family and friends, featuring a pull-out sofa in the living room,  <b>(<?php echo $RoomCategories['1']['0']; ?> Available)</b></p><br>
        <p>Rates starting from </p>
        <Strong class="price">USD <?php echo $price['1']['Price'] ; ?>/night</Strong><br>
        <div class="r_book_now">
            <form action="Book.php" method="post">
                <input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
                <input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
                <input type="hidden" name="adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="child" value="<?php echo $child; ?>">
                <input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">
                <input type="hidden" value="August Mack Suite" name="room">
                <?php if ($RoomCategories['0']['0'] > 0){
                    echo '<input class="submit" type="submit" value="BOOK NOW">'; }else{echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSold Out';}
                ?>
            </form>
        </div>
    </div>
</div>
<div class="Suites">
    <img src="images/room/Suite-Cardinale-Salon-SAM.jpg" height = "250px"alt="Cardinale">
    <div class="r_des">
        <h4 class="room_name">Claudia Cardinale Suite</h4>
        <p><b>Room Size: </b>1,220 sq. ft.</p><br>
        <p>Our open-concept suite welcomes group gatherings, intimate hosted dinners for six and family getaways. <b>(<?php echo $RoomCategories['4']['0']; ?> Available)</b></p><br>
        <p>Price starting from </p>
        <Strong class="price">USD <?php echo $price['4']['Price'] ; ?>/night</Strong><br>
        <div class="r_book_now">
            <form action="Book.php" method="post">
                <input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
                <input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
                <input type="hidden" name="adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="child" value="<?php echo $child; ?>">
                <input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">
                <input type="hidden" value="Claudia Cardinale Suite" name="room">
                <?php if ($RoomCategories['0']['0'] > 0){
                    echo '<input class="submit" type="submit" value="BOOK NOW">'; }else{echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSold Out';}
                ?>
            </form>
        </div>
    </div>
</div>
<div class="Rooms">
    <img src="images/room/Suite-Jean-Cocteau-Salon.jpg" height="250px" alt="Jean Cocteau">
    <div class="r_des">
        <h4 class="room_name">Jean Cocteau Suite</h4>
        <p><b>Room Size: </b>450 sq. ft. </p><br>
        <p>Located along the Hotel corners with double windows, our brightest room offers unbeatable views of Downtown Manhattan. <b>(<?php echo $RoomCategories['2']['0']; ?> Available)</b></p><br>
        <p>Rates starting from </p>
        <Strong class="price">USD <?php echo $price['2']['Price'] ; ?>/night</Strong><br>
        <div class="r_book_now">
            <form action="Book.php" method="post">
                <input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
                <input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
                <input type="hidden" name="adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="child" value="<?php echo $child; ?>">
                <input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">
                <input type="hidden" value="Jean Cocteau Suite" name="room">
                <?php if ($RoomCategories['0']['0'] > 0){
                    echo '<input class="submit" type="submit" value="BOOK NOW">'; }else{echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSold Out';}
                ?>
            </form>
        </div>
    </div>
</div><div class="Suites">
    <img src="images/room/Fell.jpg" height =" 250px"alt="Sea View Fell">
    <div class="r_des">
        <h4 class="room_name">Sea View Fell SUITE</h4>
        <p><b>Room Size: </b>900 sq. ft.</p><br>
        <p>The suite can also be configured as a two-bedroom suite. <b>(<?php echo $RoomCategories['5']['0']; ?> Available)</b></p><br>
        <p>Rates starting from </p>
        <Strong class="price">USD <?php echo $price['5']['Price'] ; ?>/night</Strong><br>
        <div class="r_book_now">
            <form action="Book.php" method="post">
                <input type="hidden" name="check_in_date" value="<?php echo $check_in; ?>">
                <input type="hidden" name="check_out_date" value="<?php echo $check_out; ?>">
                <input type="hidden" name="adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="child" value="<?php echo $child; ?>">
                <input type="hidden" name="roomNumber" value="<?php echo $roomNumber; ?>">
                <input type="hidden" value="Sea View Fell SUITE" name="room">
                <?php if ($RoomCategories['0']['0'] > 0){
                    echo '<input class="submit" type="submit" value="BOOK NOW">'; }else{echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSold Out';}
                ?>
            </form>
        </div>
    </div>
</div>

<div class="room_management">
    <a href="logIn.php">Room Management</a>
</div>
<br><br><br>
<hr class="hr_1">
<div class="foot">
    <div class="contact">
    <Strong>Contact Us</Strong><br><br>
            Address: &nbsp&nbsp&nbsp&nbsp&nbsp 1 Aouina Plaza <br>
            Telephone: &nbsp&nbsp (+216)93 758 340<br><br>
            Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp contactus@coaplazahotel.com<br>
    </div>
    <div class="legal">
        <strong>Legal</strong><br><br>
        <a href="ServiceDescription.php">Service Description</a><br>
        <a href="PrivacyPolicy.php">Privacy Policy</a><br>
        <a href="RefundPolicy.php">Refund Policy</a><br>
    </div>
    <div class="payment_logo">
        <img id="visa" src="images/visa.svg" alt="Visa">
        <img id="master" src="images/master.svg" alt="Master">
    </div>
</div>
</body>
</html>
