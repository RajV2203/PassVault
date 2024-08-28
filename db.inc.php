<?php
$dsn = "mysql:host=localhost;dbname=userdata";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Added semicolon here
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
