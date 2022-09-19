<?php

$servername = "bzd4myhjzeetabtuetly-mysql.services.clever-cloud.com";
$username = "uc6ope4zm8uyzlpj";
$password = "ZGPZIlaNAUQA8TCcBRys";
$dbname = "bzd4myhjzeetabtuetly";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>