<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "rentkeja";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$email = $_POST['email'];
$passwordd = $_POST['passwordd'];

//now insert the received values into database using defined variables
$sqli ="INSERT INTO flogin(email,passwordd) VALUES ('$email','$passwordd')";

if ($con->query($sqli) === TRUE) {
    echo "New login record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reasons
?>
