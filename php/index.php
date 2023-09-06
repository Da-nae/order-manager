<?php
// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database credentials
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to floriano-manager server successfully!";
}
