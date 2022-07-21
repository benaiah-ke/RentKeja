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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Material Symbols and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols" rel="stylesheet">
    <link rel="stylesheet" href="listings-assets/index.css">
    <title>Featured hostels</title>
</head>
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
    <h1>Featured hostels</h1>
    <h2>Browse July's list of featured hostels</h2>

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
        <div class="featured" onClick="location.href='single-properties.php?property_id=<?php echo $property['id']; ?>'">
            <a href="#"><img src="<?php echo $property['image']; ?>" alt="Hostel image 1" /></a>
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
        <div class="featured" onClick="location.href='single-properties.php?property_id=<?php echo $property['id']; ?>'">
            <a href="#"><img src="<?php echo $property['image']; ?>" alt="Hostel image 1" /></a>
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
        <div class="featured" onClick="location.href='single-properties.php?property_id=<?php echo $property['id']; ?>'">
            <a href="#"><img src="<?php echo $property['image']; ?>" alt="Hostel image 1" /></a>
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
        <div class="featured" onClick="location.href='single-properties.php?property_id=<?php echo $property['id']; ?>'">
            <a href="#"><img src="<?php echo $property['image']; ?>" alt="Hostel image 1" /></a>
            <div>
                <p id="name"><?php echo $property['name']; ?></p>
                <p id="type"><span><?php echo $property['type']; ?></span><span><?php echo $property['size']; ?></span></p>
                <P id="classification"><span>Posted by <?php echo $property['agent']; ?></span><span id="sp"><?php echo $property['price']; ?></span></p>
            </div>
        </div>
        <?php } // Close the if ?>
    <?php } // Close the loop ?>
    </div>

    <h2>Single Rooms</h2>
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
        <div class="featured" onClick="location.href='single-properties.php?property_id=<?php echo $property['id']; ?>'">
            <a href="#"><img src="<?php echo $property['image']; ?>" alt="Hostel image 1" /></a>
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
        <div class="featured" onClick="location.href='single-properties.php?property_id=<?php echo $property['id']; ?>'">
            <a href="#"><img src="<?php echo $property['image']; ?>" alt="Hostel image 1" /></a>
            <div>
                <p id="name"><?php echo $property['name']; ?></p>
                <p id="type"><span><?php echo $property['type']; ?></span><span><?php echo $property['size']; ?></span></p>
                <P id="classification"><span>Posted by <?php echo $property['agent']; ?></span><span id="sp"><?php echo $property['price']; ?></span></p>
            </div>
        </div>
        <?php } // Close the if ?>
    <?php } // Close the loop ?>
    </div>

    <div class="footer">
        <h2>Get Our Newsletter</h2>
        <p>To Join our worldwide community</p>
        <form>
            <label for="text">User@gmail</label>
            <input type="text" placeholder="Type your email addres"> <button>Send Now</button>
        </form>
    </div>
    <p id="footer">Copyright @2022 RentKeja. All Rights reserved</p>
</body>
</html>