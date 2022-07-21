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

 <!--font-awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<!--google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Material Symbols and icons -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols" rel="stylesheet">
        <link rel="stylesheet" href="landing_assets/styles.css"/>

<!--navigation part-->

		<title>RentKeja</title>
	</head>
    <body>
        <header class="navbar">
            <div class="navb">
                <div class="logo">
                    <h1>RentKeja</h1>
                </div>
                <div class="navl">
                    <ul>
                          <li><a href="#home">Home</a></li>
                          <li><a href="listings.html">Listings</a></li>
                          <li><a href="#contact">Contact Us</a></li>
                          <button id="hbtn" class="btnnn"><a href="login.html">Login</a></button>
                    </ul>
                </div>
            </div>
        </header>
<!--navigation part-->

<br><br>
<br>
<br>
<br>

<!-- Part1 //home section-->
    <div class="hbody" id="home">
        <div class="hbody1">
            <div class="htext">
                <div class="htext1">
                    <h1>Easiest way to find<br>accomodation</h1>
                    <p>Find and book accomodation for your campus<br>easily with RentKeja. Go through our collection of<br>
                        accomodation options ranging from bedsitters<br>to hostels, shared rooms and single rooms. Select<br>
                        your favourite option and get settled.</p>
                </div>
            </div>
            <div class="image1">
                <img src="landing_assets/images/img1.jpeg" alt="House image 1" />
            </div>
        </div>
    </div>

    <!-- Part1 -->

  <!-- Part2 -->

<!-- Part2 Featured-Properties-->

<div class="featuretitle">
    <div class="tproduct"><h2>Featured Properties</h2></div>
    <div class="ncbtn">
        <button class="ncbutton"><a href="listings.html">See All</a></button>
    </div>
</div>

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

    <!-- Part2 Featured-Properties-->


<!-- Part3 // what clients say-->
<div class="feature">
    <br><br>
  <!--  <hr class="thickhr">-->
    <br><br>
    <div class="featuretitle opproduct">
        <br><br>
        <div class="tproduct client4"><h2>What Clients Says</h2></div>
    </div>
    <div class="dfeature">
        <div class="client client1">
            <div class="stars">
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span id="white" class="fa fa-star fa-2xl"></span>
              </div>
              <div class="imgclient1">
                <img src="landing_assets/images/std1.jpg">
                <div class="credentials">
                    <h5>Kim Davids</h5>
                    <p>JKUAT Student</p>
                </div>
                <br>
            </div>
            <p class="mmessagep">
                "This is where you find an affordable and spacious house.<br>
                There is also maximum security and additional advantages.<br>
                When you book with RentKeja you get free WIFI for the first month,<br>
                and also you will be awarded with a free gym membership card."
            </p>


        </div>

        <div class="client client2">
            <div class="stars">
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
              </div>
              <div class="imgclient2">
                <img src="landing_assets/images/std3.jpeg">
                <div class="credentials">
                    <h5>Tiffany Davids</h5>
                    <p>UON Student</p>
                </div>
                <br>
            </div>
              <p class="mmessagep">
                "This is where you find an affordable and spacious house.<br>
                There is also maximum security and additional advantages.<br>
                When you book with RentKeja you get free WIFI for the first month,<br>
                and also you will be awarded with a free gym membership card."
            </p>

        </div>
        <div class="client client3">
            <div class="stars">
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
                <span class="fa fa-star fa-2xl"></span>
              </div>
              <div class="imgclient3">
                <img src="landing_assets/images/std2.jpeg">
                <div class="credentials">
                    <h5>Jimmy Dan</h5>
                    <p>KU Student</p>
                </div>
                <br>
            </div>
              <p class="mmessagep">
                "This is where you find an affordable and spacious house.<br>
                There is also maximum security and additional advantages.<br>
                When you book with RentKeja you get free WIFI for the first month,<br>
                and also you will be awarded with a free gym membership card."
            </p>

        </div>
    </div>
    <br>
  <!--    <hr class="hrline4">-->
    <br>
</div>
</div>

<!-- Part3 -->

<!-- Part4 //footer-->

<div class="containers" id="contact">
    <div class="fcontainer">
    <h2 class="top">Get Our Newsletter</h2>
    <p>To join the worldwide community</p>

    <input id="email" type="email" placeholder="Enter your email address" name="email" required>
    <button id="vbutton" class="btnn">Send Now</button>

    </div>

    <!-- <hr>-->


    <footer class="navbarr">
    <div class="navbbb">
    <div class="logoo">
        <h1>RentKeja</h1>
    </div>
    <div class="navll">
        <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#listings">Listings</a></li>
              <li><a href="signup.html">Sign Up</a></li>
              <li><a href="#contact">Contact Us</a></li>
          </ul>
    </div>
    </div>
    <div class="footerend">
    <h3>Copyright &copy; 2022 RentKeja. All Rights Reserved.</h3>
    </div>
    </footer>
    </div>

    <!-- Part4 //footer-->
    </body>
</html>









