<!DOCTYPE html>
<html>
<head>
    <title>Municipal System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 shadow">
<h3 class="text-center">Register Complaint</h3>

<form action="submit.php" method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
<input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>

<select name="complaint_type" class="form-control mb-2">
<option>Garbage</option>
<option>Water</option>
<option>Road</option>
</select>

<textarea name="description" placeholder="Description" class="form-control mb-2"></textarea>

<input type="file" name="photo" class="form-control mb-2">

<button class="btn btn-primary w-100">Submit</button>

</form>

<hr>

<h5>Track Complaint</h5>
<form action="track.php" method="POST">
<input type="text" name="phone" class="form-control mb-2" placeholder="Phone">
<button class="btn btn-success w-100">Check Status</button>
</form>

</div>

</div>
</body>
</html>