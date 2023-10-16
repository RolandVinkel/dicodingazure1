<?php
$host = "rolts-server.mysql.database.azure.com";
$user = "qdmqraybyl";
$pass = "E35H0QSGHRQR07PR$";
$db = "rolts-database";

// Initialize MySQLi
$conn = mysqli_init();

// Set SSL options for secure connection
mysqli_ssl_set($conn, NULL, NULL, "{path to CA cert}", NULL, NULL);

// Establish the database connection with SSL
mysqli_real_connect($conn, $host, $user, $pass, $db, 3306, NULL, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno($conn)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
