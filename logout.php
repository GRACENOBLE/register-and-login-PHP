<?php
session_start(); // Start the session
session_destroy(); // Destroy the session data
header("Location: login.php"); // Redirect to login page
exit;
?>
