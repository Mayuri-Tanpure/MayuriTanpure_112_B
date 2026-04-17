<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$type = $_POST['complaint_type'];
$desc = $_POST['description'];

// IMAGE UPLOAD
$photo = $_FILES['photo']['name'];

if($photo != ""){
    $target = "uploads/" . basename($photo);

    if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
        // ok
    } else {
        echo "❌ Image upload failed";
        exit();
    }
} else {
    $photo = "";
}

// INSERT
$sql = "INSERT INTO complaints 
(name, phone, complaint_type, description, photo) 
VALUES 
('$name','$phone','$type','$desc','$photo')";

if ($conn->query($sql)) {
    echo "<script>
        alert('✅ Complaint Submitted!');
        window.location.href='index.php';
    </script>";
} else {
    echo "❌ Error: " . $conn->error;
}
?>