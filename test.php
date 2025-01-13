<?php
$host = 'infong-us-cl0085.perfora.net'; // Replace with your DB_HOST
$port = 3306; // Replace with your DB_PORT
$dbname = 'mysql'; // Replace with your DB_DATABASE
$username = 'dbu1624686'; // Replace with your DB_USERNAME
$password = 'manutradePro'; // Replace with your DB_PASSWORD



try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}