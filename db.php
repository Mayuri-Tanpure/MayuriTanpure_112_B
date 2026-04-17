<?php
$conn = new mysqli("localhost", "root", "", "municipal_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>