<?php
unset($_COOKIE['username']);
unset($_COOKIE['password']);
setcookie('username', '', time() - 3600, '/'); // empty value and old timestamp
setcookie('password', '', time() - 3600, '/'); // empty value and old timestamp

header("location: index.php");
?>
