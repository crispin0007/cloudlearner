<?php
// $db_host = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "cloudlearner";

// RDS
    $db_host = "database-12.cuvdpllatkuq.us-east-1.rds.amazonaws.com";
    $db_user = "admin";
    $db_password = "Xb4KS3YeJ1gR7xjOSoVD";
    $db_name = "cloudlearner";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Create Connection
if ($conn->connect_error) {
    die("Connection Failed");
}
?>