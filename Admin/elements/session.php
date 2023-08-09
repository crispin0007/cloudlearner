<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['admin_is_login'])) {
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script>location.href='../../index.php'</script>";
}
;
?>