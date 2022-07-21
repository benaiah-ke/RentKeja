<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'real_estate';

$conn = mysqli_connect($host, $user, $password, $db_name);

// Select all listings
$query = "SELECT * FROM properties";

$result = $conn->query($query);

// We'll store the results here
$properties = [];

// Results are multiple rows, so we use a loop
while($row = $result->fetch_array()){
    array_push($properties, $row); // Add the row to the array
}

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<!-- Material Symbols and icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols" rel="stylesheet">
<link rel="stylesheet" href="/Listings assets/Images/index.css">
<title>Featured hostels</title>

<body>
    <header class="navbar">
        <div class="navb">
            <div class="logo">
                <h2>RentKeja</h1>
            </div>
            <div class="navl">
                <ul>
                    <li><a href="index.htm">Home</a></li>
                    <li><a href="listings.html">Listings</a></li>
                    <li><a href="index.html#contact">About Us</a></li>
                    <button id="hbtn" class="btnnn"><a href="#sales">Login</a></button>
                </ul>
            </div>
        </div>
    </header>
    <!-- Check if there are no results -->
<?php if(count($properties) == 0){ ?>
            <div class="no-prop">
                <h1>No properties listed yet. Check-in later</h1>
            </div>
        <?php } // Close the if ?>

<div class="line1">
    <!-- Loop on available properties, creating a div for each -->
    <?php foreach($properties as $property){ // Open a loop ?>
        <?php if ($property['id'] < 3) { ?>
        <div class="featured" onClick="location.href='single-properties.html'">
            <a href="#"><img src="landing_assets/images/hostel4.jpg" alt="Hostel image 1" /></a>
            <div>
                <p id="name"><?php echo $property['name']; ?></p>
                <p id="type"><span><?php echo $property['type']; ?></span><span><?php echo $property['size']; ?></span></p>
                <P id="classification"><span>Posted by <?php echo $property['agent']; ?></span><span id="sp"><?php echo $property['price']; ?></span></p>
            </div>
        </div>
        <?php } // Close the if ?>
    <?php } // Close the loop ?>
</div>

<div class="line1">
    <!-- Loop on available properties, creating a div for each -->
    <?php foreach($properties as $property){ // Open a loop ?>
        <?php if ($property['id'] < 3) { ?>
        <div class="featured" onClick="location.href='single-properties.html'">
            <a href="#"><img src="landing_assets/images/hostel4.jpg" alt="Hostel image 1" /></a>
            <div>
                <p id="name"><?php echo $property['name']; ?></p>
                <p id="type"><span><?php echo $property['type']; ?></span><span><?php echo $property['size']; ?></span></p>
                <P id="classification"><span>Posted by <?php echo $property['agent']; ?></span><span id="sp"><?php echo $property['price']; ?></span></p>
            </div>
        </div>
        <?php } // Close the if ?>
    <?php } // Close the loop ?>
</div>
    <h2>Shared Rooms</h2>
    <div class="line1">
        <div class="featured">
            <a href="#"><img src="/Listings assets/Images/hare kristina.jpg" alt=""></a>
            <div>
                <p id="name">Hare Kristina Hostels</p>
                <p id="type"><span>Shared</span><span>150M</span><span>Kitchen</span></p>
                <P id="classification"><span>Posted by Hare</span><span id="sp">13K/Month</span></p>
            </div>
        </div>
        <div class="featured">
            <a href="#"><img src="/Listings assets/Images/Lelo hostel.jpg" alt=""></a>
            <div>
                <p id="name">Lelo Hostels</p>
                <p id="type"><span>4 Shared</span><span>150M</span> <span> Kitchen</span></p>
                <P id="classification"><span>Posted by Lelo</span><span id="sp">12K/Month</span></p>
            </div>
        </div>
    </div>
    <div class="line1">
        <div class="featured">
            <a href="#"><img src="/Listings assets/Images/Mawingu ladies hostel.jpg" alt=""></a>
            <div>
                <p id="name">Mawingu ladies Hostels</p>
                <p id="type"><span>2 Shared</span><span>150M</span><span> Kitchen</span></p>
                <P id="classification"><span>Posted by Mawingu</span><span id="sp">9K/Month</span></p>
            </div>
        </div>
        <div class="featured">
            <a href="#"><img src="/Listings assets/Images/mawingu ladies.jpg" alt=""></a>
            <div>
                <p id="name">mawingu Ladies Hostels</p>
                <p id="type"><span>10 Shared</span><span>150M</span><span> Kitchen</span></p>
                <P id="classification"><span>Posted by Mawingu</span><span id="sp">5K/Month</span></p>
            </div>
        </div>
    </div>
    <h2>Single Rooms</h2>
    <div class="line1">
        <div class="featured" href="#">
            <a href="#"><img src="/Listings assets/Images/modern christian ladies.jpg" alt=""></a>
            <div>
                <p id="name">Modern christian</p>
                <p id="type"><span>Single Rooms</span><span>150M</span><span>Kitchen</span></p>
                <P id="classification"><span>Posted by Modern</span><span id="sp">6K/Month</span></p>
            </div>
        </div>
        <div class="featured">
            <a href="#"><img src="/Listings assets/Images/Modern Male hostel.jpg" alt=""></a>
            <div>
                <p id="name">Modern Male Hostels</p>
                <p id="type"><span>single Rooms</span><span>150M</span><span> Kitchen</span></p>
                <P id="classification"><span>Posted by Modern</span><span id="sp">8K/Month</span></p>
            </div>
        </div>
    </div>
    <div class="footer">
        <h2>Get Our Newsletter</h2>
        <p>To Join our worldwide community</p>
        <form>
            <label for="text">User@gmail</label>
            <input type="text" placeholder="Type your email addres"> <button>Send Now</button>
        </form>
    </div>
    <div>
        <footer>
    </div>
    <p id="footer">Copyright @2022 RentKeja. All Rights reserved</p>
    </div>

</html>