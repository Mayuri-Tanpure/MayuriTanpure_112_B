<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

<h3>Complaint Status</h3>

<?php
$phone = $_POST['phone'];
$result = $conn->query("SELECT * FROM complaints WHERE phone='$phone'");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>

<div class="card p-3 mb-3">
<b>Name:</b> <?= $row['name'] ?><br>
<b>Type:</b> <?= $row['complaint_type'] ?><br>
<b>Status:</b> <?= $row['status'] ?><br>

<?php if($row['photo']) { ?>
<img src="uploads/<?= $row['photo'] ?>" width="100">
<?php } ?>

</div>

<?php } } else {
    echo "<div class='alert alert-danger'>No complaint found</div>";
}
?>

<a href="index.php" class="btn btn-primary">Back</a>

</div>
</body>
</html>