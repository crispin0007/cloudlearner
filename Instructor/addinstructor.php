<?php 

include_once('../database.php');
if(!isset($_SESSION)){
    session_start();
}

// Checking email existenance 
if (isset($_POST['checkemail' ]) && isset($_POST['insemail'])){
    $insemail = $_POST ['insemail'];
    $sql = "SELECT instructor_email FROM instructor WHERE instructor_email ='".$insemail."'";
    $result = $conn -> query($sql);
    $row = $result -> num_rows;
    echo json_encode($row);
}


// insert instructor 
if(isset($_POST['inssignup']) && isset($_POST['insname']) && isset($_POST['insemail']) && isset($_POST['inspass'])){
    $insname = $_POST['insname'];
    $insemail = $_POST['insemail'];
    $inspass = $_POST['inspass'];

    $sql = "INSERT INTO instructor(instructor_name, instructor_email, instructor_pass) VALUES 
    ('$insname', '$insemail', '$inspass')";
    
    if ($conn->query($sql)==TRUE){
        echo json_encode("OK");
    } else {
        echo json_encode("Failed");
    }
}

// instructor login verification
if (!isset($_SESSION['ins_is_login'])) {
    if (isset($_POST['insLogEmail']) && isset($_POST['insLogPass'])) {
    $insLogEmail = $_POST['insLogEmail'];
    $insLogPass = $_POST['insLogPass'];
    
    
    $sql = "SELECT * FROM instructor 
    WHERE instructor_email = '$insLogEmail' AND instructor_pass ='$insLogPass' AND status='1'";
    
    $result = $conn->query($sql);
    
    $row = $result->num_rows;
    
    if ($row === 1) {
    $instructor_data = $result->fetch_assoc(); 
    $_SESSION['ins_is_login'] = true;
    $_SESSION['insLogEmail'] = $instructor_data['instructor_email'];    
    $_SESSION['instructor_name'] = $instructor_data['instructor_name'];
    $_SESSION['instructor_id'] = $instructor_data['instructor_id']; 
    
    echo json_encode($row);
    } else if ($row === 0) {
    echo json_encode($row);
    }
    }
    }
?>