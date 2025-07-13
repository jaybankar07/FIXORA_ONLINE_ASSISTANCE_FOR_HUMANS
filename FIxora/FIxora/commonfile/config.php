<?php

// Database Configuration
define('DB_HOST', 'localhost');     // Your database host (usually 'localhost' or an IP address)
define('DB_USER', 'u119271849_user_fixora');      // Your database username
define('DB_PASSWORD', 'Admin#@54321');  // Your database password
define('DB_DATABASE', 'u119271849_db_fixora');    // Your database name

// Create a database connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set charset to utf8 if needed
$con->set_charset("utf8");

?>
