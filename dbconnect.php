<?php

$servername = "localhost";

$username = "anjaliio_anjaliio";

$password = "Anjali@2019";

$dbname = "anjaliio_resume";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>