<?php
include('../../database.php');
include('../../Student/elements/session.php');

if(isset($_SESSION['stu_is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];};







// Get the data from the AJAX POST request
$payload = $_POST['payload'];

// Extract the relevant data from the payload (modify this based on your payload structure)
$productName = $payload['product_name'];
$order_number = $payload['idx'];
$amount = $payload['amount'];
$token = $payload['token'];
$course_id = $payload['product_identity'];
// $stu_email = $payload['product_url'];

// ... and so on for other relevant fields


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query to insert data into the database (modify table and column names as needed)
$sql = "INSERT INTO payment (order_number, token, amount, status, stu_email, course_id, course_title, stu_id) VALUES 
('$order_number','$$token', '$amount','success', '$stuLogEmail', '$course_id', '$productName', '$stu_id')";

if ($conn->query($sql) === TRUE) {
    // Database insertion successful
    echo "Data inserted into the database successfully.";
} else {
    // Error occurred during insertion
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>