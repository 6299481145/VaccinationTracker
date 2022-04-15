<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:SessionExpired.html");
} else {
    $username = $_SESSION['username'];
} 
?>
