<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['stu_is_login'])) {
    $stuLogEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>location.href='../../index.php'</script>";
}
;

if (isset($stuLogEmail)) {
    $sql = "SELECT * FROM student WHERE stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
    $stu_id = $row['stu_id'];
    $stu_name = $row['stu_name'];
    $stu_occ = $row['stu_occ'];
    $stu_email = $row['stu_email'];
}
?>