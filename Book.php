<?php
$today = date("Y-m-d");

@$check_in = $_POST['check_in_date'];
@$check_out = $_POST['check_out_date'];
@$adult = $_POST['adult'];
@$child = $_POST['child'];
@$room = $_POST['room'];
@$roomNumber = $_POST['roomNumber'];

$lifetime = 60 * 60 * 24 * 30;
session_set_cookie_params($lifetime, '/');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" type="text/css" href="css/Head_Foot.css">
    <link rel="stylesheet" type="text/css" href="css/Booking.css">
</head>
<body>
<div class="main_logo">
    <div id="hotel_name"><em>
            COA Plaza Hotel
        </em>
    </div>
    <div id="top">
        <a class="Book_Now_Top" href="Room.php"> &nbspBook Now</a>
    </div>
</div>
<hr class="hr_1">
<div class="top_nav">
    <div><a class="nav_rooms" href="Room.php">Rooms</a></div>
    <div><a class="nav_dinning" href="Dining.php">Dining</a></div>
    <div><a class="nav_facilities" href="FacilitiesandService.php">Service</a></div>
    <div><a class="nav_location" href="Location.php">Location</a></div>
</div>

<div id="left">
    <form action="session.php" method="post">
        <p>Room Details</p><br>
        <label>Room</label><br>
        <input type="text" list="room" name="room" value="<?php echo $room; ?>" required><br><br>
        <label>Number of Room</label><br>
        <input type="number" list="number_1" name="NumberOfRoom" value="<?php echo $roomNumber; ?>" required><br><br>
        <label>Check In Date</label><br>
        <input type="date" name="check_in_date" value="<?php echo $check_in; ?>" min="<?php echo $today; ?>" required><br><br>
        <label>Check Out Date</label><br>
        <input type="date" name="check_out_date" value="<?php echo $check_out; ?>" min="<?php echo $today; ?>" required><br><br>
        <hr>
        <br>
        <p>Guest Details</p><br>
        <label>Title</label><br>
        <input type="search" list="title" name="title" required><br><br>
        <label>First Name</label><br>
        <input type="text" name="first_name" required><br><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name" required><br><br>
        <label>Phone Number</label><br>
        <input type="tel" name="phone" required><br><br>
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>
        <hr>
        <br>
        <p>Address</p><br>
        <label>Street</label><br>
        <input type="text" name="street" required><br><br>
        <label>City</label><br>
        <input type="text" name="city" required><br><br>
        <label>State</label><br>
        <select name="state" required>
            <option value="AR">Ariana</option>
            <option value="BE">Béja</option>
            <option value="BI">Ben Arous</option>
            <option value="BZ">Bizerte</option>
            <option value="GB">Gabès</option>
            <option value="GF">Gafsa</option>
            <option value="JE">Jendouba</option>
            <option value="KR">Kairouan</option>
            <option value="KS">Kasserine</option>
            <option value="KB">Kébili</option>
            <option value="KF">Kef</option>
            <option value="MH">Mahdia</option>
            <option value="MN">Manouba</option>
            <option value="ME">Médenine</option>
            <option value="MO">Monastir</option>
            <option value="NA">Nabeul</option>
            <option value="SF">Sfax</option>
            <option value="SS">Sidi Bouzid</option>
            <option value="SK">Siliana</option>
            <option value="SO">Sousse</option>
            <option value="TA">Tataouine</option>
            <option value="TO">Tozeur</option>
            <option value="TU">Tunis</option>
            <option value="ZA">Zaghouan</option>
        </select>

        </select><br><br>
        <hr>
        <br>
        <p>Guests</p><br>
        <label>Adult(s)</label><br>
        <input type="number" list="number_1" name="adult" min="1" max="4" value="<?php echo $adult; ?>" required><br><br>
        <label>Child(ren)</label><br>
        <input type="number" list="number_2" name="child" min="0" max="4" value="<?php echo $child; ?>"><br><br>
        <hr>
        <br>
        <p>Special Requests</p><br>
        <textarea rows="10" cols="70" name="comment" id="comment"></textarea><br>
        <input id="submit_booking" type="submit" value="Booking">
        <datalist id="number_1">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
        </datalist>
        <datalist id="number_2">
            <option value="0">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
        </datalist>
        <datalist id="room">
            <option value="SOHO ROOM">
            <option value="MANHATTAN ROOM">
            <option value="LIBERTY SUITE">
            <option value="BARCLAY SUITE">
            <option value="HUDSON ROOM">
            <option value="OCULUS SUITE">
        </datalist>
        <datalist id="title">
            <option value="Mr.">
            <option value="Ms.">
            <option value="Mrs.">
        </datalist>
        <datalist id="state">

        </datalist>
    </form>
</div>
    

</body>
</html>
