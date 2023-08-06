<?php 
// Admin login verification

include_once('../database.php');
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['admin_is_login'])) {
    if (isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass'])) {
        $adminLogEmail = $_POST['adminLogEmail'];
        $adminLogPass = $_POST['adminLogPass'];

        // Modify the SQL query to include the admin_name field
        $sql = "SELECT admin_email, admin_pass, admin_name FROM admin_detail WHERE admin_email = '$adminLogEmail' AND admin_pass = '$adminLogPass'";

        $result = $conn->query($sql);

        $row = $result->num_rows;

        if ($row === 1) {
            $admin_data = $result->fetch_assoc(); // Fetch the entire row as an associative array
            $_SESSION['admin_is_login'] = true;
            $_SESSION['adminLogEmail'] = $adminLogEmail;
            $_SESSION['admin_name'] = $admin_data['admin_name']; // Store the admin's name in the session

            echo json_encode($row);
        } else if ($row === 0) {
            echo json_encode($row);
        }
    }
}
?>