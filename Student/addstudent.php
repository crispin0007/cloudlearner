<?php

include_once('../database.php');
if (!isset($_SESSION)) {
    session_start();
}

// Checking email existenance 
if (isset($_POST['checkemail']) && isset($_POST['stuemail'])) {
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email ='" . $stuemail . "'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}


// insert student 
if (isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])) {
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];

    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES 
    ('$stuname', '$stuemail', '$stupass')";

    if ($conn->query($sql) == TRUE) {
        echo json_encode("OK");
    } else {
        echo json_encode("Failed");
    }
}

// student login verification
if (!isset($_SESSION['stu_is_login'])) {
    if (isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])) {
        $stuLogEmail = $_POST['stuLogEmail'];
        $stuLogPass = $_POST['stuLogPass'];

        // Modify the SQL query to include the stu_name field
        $sql = "SELECT stu_email, stu_pass, stu_name FROM student WHERE stu_email = '$stuLogEmail' AND stu_pass =
    '$stuLogPass'";

        $result = $conn->query($sql);

        $row = $result->num_rows;

        if ($row === 1) {
            $student_data = $result->fetch_assoc(); // Fetch the entire row as an associative array
            $_SESSION['stu_is_login'] = true;
            $_SESSION['stuLogEmail'] = $student_data['stu_email'];
            $_SESSION['stu_name'] = $student_data['stu_name']; // Store the student's name in the session

            echo json_encode($row);
        } else if ($row === 0) {
            echo json_encode($row);
        }
    }
}

















?>