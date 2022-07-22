<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'real_estate';

$conn = mysqli_connect($host, $user, $password, $db_name);

// This was passed via the url
$property_id = $_GET['property_id'];

// Select a specific listing
$query = "SELECT * FROM properties WHERE id = $property_id";

$result = $conn->query($query);

// We are expecting only a single result, so we do not loop here
$property = $result->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singe Listing</title>
    <link rel="icon" href="single-listings-assets/img/title icon.png" type="image/x-icon">
    <link rel="stylesheet" href="single-listings-assets/css/slideshow.css">
    <link rel="stylesheet" href="single-listings-assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Material Symbols and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols" rel="stylesheet">  
</head>
<body>
    <nav>
        <h2>RentKeja</h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>
            <li><a href="index.php#contact">Contact Us</a></li>
        </ul>
        <button id="login" href="plogin.html">Login</button>
    </nav>
    <div id="everything">        
        <div class="property-left">
            <h1><?php echo $property['name']; ?></h1><br>
            <div class="slideshow-container">
        
                <div class="mySlides">
                  <div class="numbertext">1 of 4</div>
                  <img src="<?php echo $property['image']; ?>">
                  <p>Property Image</p>
                </div>
              
                <div class="mySlides">
                  <div class="numbertext">2 of 4</div>
                  <img src="<?php echo $property['image2']; ?>">
                  <p>Property Image</p>

                </div>
              
                <div class="mySlides">
                  <div class="numbertext">3 of 4</div>
                  <img src="<?php echo $property['image3']; ?>">
                    <p>Property Image</p>

                </div>

                <div class="mySlides">
                    <div class="numbertext">4 of 4</div>
                    <img src="<?php echo $property['image4']; ?>">
                    <p>Property Image</p>

                  </div>
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>

                </div>
            </div>
            <h3>About Our Hostels</h3>
            <p class="border-bottom">
            <?php echo $property['about']; ?>
            </p>
            <div class="flextwo">
                <h4>Amenities</h4>
                <ul>
                    <li>Spacious Well Appointed Rooms <span>Free</span></li>
                    <li>Recreation and Games <span>Free</span></li>
                    <li>Mordern Well Equipped Kitchen <span>Free</span></li>
                    <li>24 Hours Security <span>Free</span></li>
                </ul>
            </div>
            <div class="flextwo">
                <h4>House Rules</h4>
                <ul>
                    <li>Any Act Of Culminate In Breach Of Peace And 
                        Order, Damage Of Property Are Prohibited </li>
                    <li>All Hostels Residents Are Expected To Respect
                        One Another And Maintain Good Neighbourliness </li>
                    <li>Possession, Distribution And/Or Consumption Of
                        Alcoholic Beverages, Prohibited Drugs, Any Form
                        Of Narcotics, Gambling.</li>
                </ul>
            </div>
        </div>
        
        <div class="booking">
            <h3>Booking <br> Details</h3>
            <div class="verified">
                <img src="/single-listings-assets/img/star.png" width="10px" height="12px">
                <img src="/single-listings-assets/img/star.png" width="10px" height="12px">
                <img src="/single-listings-assets/img/star.png" width="10px" height="12px">
                <img src="/single-listings-assets/img/star.png" width="10px" height="12px">
                <img src="/single-listings-assets/img/star.png" width="10px" height="12px"> (0)
                <p>
                    <img src="/single-listings-assets/img/tick.png" width="12px" alt="">
                    verified
                </p>
            </div>
            <p> <strong>Hostel</strong>:<?php echo $property['name']; ?></p>
            <p> <strong>Gender</strong>: <?php echo $property['gender']; ?></p>
            <p> <strong>Agent/Landlord:</strong>: <?php echo $property['agent']; ?></p>
            <div class="pricing">
                <span class="roomtype"> <?php echo $property['type']; ?></span>
                <p> <b>Monthly</b> At <b><?php echo $property['price']; ?></b>
                </p>
            </div>
            <button class="book" onClick="book()">
                <img class="bookmark" src="/single-listings-assets/img/bookmark.png">
                <a class="book">Book</a>
            </button>
        </div>
    </div>
    
    <script src="single-listings-assets/js/slideshow.js" type="text/javascript"></script>
</body>
</html>