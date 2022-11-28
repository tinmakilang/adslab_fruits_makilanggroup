<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav"><a href="list.php">BACK</a></nav>
	<div class="global-container" style="width: 26%; margin:auto;margin-top: 90px;">
		<div class="card login-form">
				<div class="card-body">
					<h3 class="card-title text-center">ADD ITEM</h3>
					<div class="card-text">
						<form action="" method="POST">
							<div>
								<label>Enter name:</label>
								<input type="text" name="name">
							</div>
							<br>
							<div>
								<label for="classification">Classification:</label>
								<select name="classification" id="classification">
								  <option value="berries">Berries</option>
								  <option value="drupes">Drupes</option>
								  <option value="citrus">Citrus Fruit</option>
								  <option value="tropical">Tropical Fruit</option>
								</select>
							</div>
							<br>
							<div>
								<label>Description</label>
								<input type="description" name="description">
							</div>
							<br>
							<div>
								<button type="submit" class="btn btn-primary btn-block" >ADD</button>
							</div>
						</form>
					</div>
				</div>
	</div>
</div>
</body>
</html>
<?php
	include("model/fruits.php");
	require("connection/database.php");

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$classification = $_POST['classification'];
		$description = $_POST['description'];
		
		$saveUser = new fruits($conn);
		if ($saveUser->store($name, $classification,$description)) {
			echo "<script>alert('Successfully added!')</script>";
		}
	}


?>