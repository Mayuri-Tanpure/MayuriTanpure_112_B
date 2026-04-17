<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

<h3>Admin Panel</h3>

<table class="table table-bordered">
<tr>
<th>Name</th>
<th>Type</th>
<th>Status</th>
<th>Photo</th>
<th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM complaints");

while($row = $result->fetch_assoc()){
?>

<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['complaint_type'] ?></td>
<td><?= $row['status'] ?></td>

<td>
<?php if($row['photo']) { ?>
<img src="uploads/<?= $row['photo'] ?>" width="60">
<?php } ?>
</td>

<td>
<a href="update.php?id=<?= $row['id'] ?>&status=In Progress" class="btn btn-warning btn-sm">In Progress</a>

<a href="update.php?id=<?= $row['id'] ?>&status=Resolved" class="btn btn-success btn-sm">Resolved</a>
</td>

</tr>

<?php } ?>

</table>

</div>
</body>
</html>