<?php
include 'db.php';

$id = $_GET['id'];
$status = $_GET['status'];

$conn->query("UPDATE complaints SET status='$status' WHERE id=$id");

header("Location: admin.php");
?>