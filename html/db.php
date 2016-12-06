<?php
$db_conf = mysqli_connect("localhost", "root", "toor", "secure_search");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
?>
