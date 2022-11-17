<?php
	require("connection/database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background: white;">
 <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav"><a href="index.php">BACK</a></nav>
	<div class="container mt-5">
		<div class="col-md-10 m-auto">
			<a href="additem.php" class="btn btn-primary">Add Fruits</a>
		
			<h1>List of Fruits</h1>
			<table  class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Classification</th>
						<th>Description</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM fruits";

						// Fetch all
						
						if ($result = mysqli_query($conn, $sql)) {
							$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
						foreach ($row as $key => $value) {

					?>
					<tr>
						<td><?php echo $value['id']; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['classification']; ?></td>
						<td><?php echo $value['description']; ?></td>
						<td><a href="updateform.php?edit=<?php echo $value['id']; ?>">Edit</a></td>
						<td><a href="delete.php?delete=<?php echo $value['id']; ?>">Delete</a></td>
						</td>
					</tr>


					<?php
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>