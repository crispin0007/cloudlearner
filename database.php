<?php
// $db_host = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "cloudlearner";




$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Create Connection
if ($conn->connect_error) {
    die("Connection Failed");
}
?>
