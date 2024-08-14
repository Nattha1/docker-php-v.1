<?php
$db_host = 'db-container';
$database_user = 'sample_db_user';
$user_passord = 'user_password';
$database_name = 'sample_db';

$conn = new mysqli($db_host, $database_user, $user_passord, $database_name);

if ($conn->connect_error) {
    die("PHP failed to access MySQL: " . $conn->connect_error);
}

echo "PHP successfully Connected to MySQL Service";

$conn->close();
?>