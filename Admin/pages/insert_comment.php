<?php
include '../../database.php' ;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stu_id = $_POST["stu_id"];
    $stu_name = $_POST["stu_name"];
    $stu_email = $_POST["stu_email"];
    $course_id = $_POST["course_id"];
    $addcomment = $_POST["addcomment"];

    // Insert data into the database using a query
    $query = "INSERT INTO comments (stu_id, stu_name, stu_email, course_id, comment) 
    VALUES ('$stu_id', '$stu_name', '$stu_email', '$course_id', '$addcomment')";

    if ($conn->query($query) === TRUE) {
        echo "Comment added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
