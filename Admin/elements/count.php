<?php
// Your table name
$tableName = 'coursedetails';

// One-liner to count the number of rows in the table
$totalCourse = $conn->query("SELECT COUNT(*) AS total_rows FROM coursedetails ")->fetch_assoc()['total_rows'];
$totalBlog = $conn->query("SELECT COUNT(*) AS total_rows FROM blog_posts ")->fetch_assoc()['total_rows'];
$totalStudent = $conn->query("SELECT COUNT(*) AS total_rows FROM student ")->fetch_assoc()['total_rows']; 
$totalOrder = $conn->query("SELECT COUNT(*) AS total_rows FROM payment ")->fetch_assoc()['total_rows']; 
$totaLesson = $conn->query("SELECT COUNT(*) AS total_rows FROM lesson ")->fetch_assoc()['total_rows']; 


// Display the total number of rows
// echo "Total rows in $tableName: " . $totalRows;
?>