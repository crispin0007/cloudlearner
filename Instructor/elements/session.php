<?php

if (!isset($_SESSION)) {
    session_start();
}
// include '../../Student/elements/session.php';
if (isset($_SESSION['ins_is_login'])) {
    $insEmail = $_SESSION['insLogEmail'];
} else {
    echo "<script>location.href='../../index.php'</script>";
}
if (isset($_SESSION['instructor_id'])) {
    $instructor_id = $_SESSION['instructor_id'];}

?>