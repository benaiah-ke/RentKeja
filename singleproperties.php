<?php
//create server and database connection constants
include 'index.html';

//localhost

$host = "http://127.0.0.1:5500/";
$user = "root";
$pwd = "";
$db = "rentkeja";

$con= new mysqli ($host, $user, $pwd, $db);



// $mysqli = new mysqli($servername, $user, $password, $database);
$mysqli= new mysqli ($host, $user, $pwd, $db);


// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM singleproperties ORDER BY pindex DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- // HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <title>Medifast User Details</title> -->
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            border-width: center;
            width:71%;
            /* margin-left:15%;
            margin-right:15%; */
            margin-right: 12px;

        }

        h1 {
            text-align: center;
            color: #b7815b;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            margin-top: 70px;

        }
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 6px;
            text-align: center;
            background-color: #E4F5D4;

        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1 style='color: white;
        background-color:#b7815b;
    text-align: center;
    overflow:hidden;'>Single Properties Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Pindex</th>
                <th>Property Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Amenities</th>
                <th>Property Gender</th>


            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['pindex'];?></td>
                <td><?php echo $rows['pname'];?></td>
                <td><?php echo $rows['description'];?></td>
                <td><?php echo $rows['price'];?></td>
                <td><?php echo $rows['amenities'];?></td>
                <td><?php echo $rows['property_gender'];?></td>

            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>

</html>

<!--
//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$pname=trim($_POST['pname']);
$description=trim($_POST['pdescription']);
$price=trim($_POST['price']);
$amenities=trim($_POST['amenities']);
$property_gender=trim($_POST['property_gender']);


//now insert the received values into database using defined variables
$sqli ="INSERT INTO singleproperties(pname,pdescription,price,amenities,property_gender) VALUES ('$pname','$pdescription','$price','$amenities','$property_gender')";

if ($con->query($sqli) === TRUE) {
    echo "Property description";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reasons
?> -->
