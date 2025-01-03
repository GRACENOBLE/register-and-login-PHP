<?php
// Database configuration
$host = 'localhost'; // Server hostname
$dbname = 'register_and_login'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password (leave blank if none)

// Establishing connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
