<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$telno = $_POST["telno"];
$gender = $_POST["gender"];
$occ = $_POST["occupation"];
$cont = $_POST["country"];
$sql = 'INSERT INTO event_registration (firstname, lastname, email, telno, country,occupation)
VALUES ("$fname", "$lname", "$email","$telno","$cont","$occ")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>