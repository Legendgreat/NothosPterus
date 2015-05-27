<?php
$servername = "localhost";
$username = "talentpass";
$password = "9n0dehPsLR";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=talentpass_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "Connection failed: " . $ex->getMessage();
}
