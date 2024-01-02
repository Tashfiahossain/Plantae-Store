<?php
include "dbConnection.php";
?>
<!doctype html>
<html lang="en">

<head>
	<title>Plantae Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section text-center">Admin Panel</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex justify-content-center">
								<div class="col-sm">
									<h3 class="mb-4">Adding Product</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									<form method="post">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label> Product Name</label>
												<input name="Name" type="text" class="form-control" id="inputEmail4" placeholder="Insert Product">
											</div>
											<div class="form-group col-md-6">
												<label>Price</label>
												<input name="taka" type="text" class="form-control" id="inputPassword4" placeholder="Amount">
											</div>
										</div>
										<div class="form-group">
											<label>Image</label>
											<input name="type" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
										</div>
										<div class="form-group">
											<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type</label>
											<select name="choice" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
												<option selected>Choose...</option>
												<option value="Flower">Flower</option>
												<option value="Fruit">Fruit</option>
												<option value="Indoor">Indoor</option>
												<option value="Bouquet">Bouquet</option>
												<option value="Tools">Tools</option>
												<option value="Seeds">Seeds</option>
												<option value="Fertilizer">Fertilizer</option>
											</select>
										</div>

										<button name="submit" type="submit" class="btn btn-primary">Add Product</button>
									</form>
								</div>
							</div>
							




						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/main.js"></script>

</body>


<?php

if (isset($_POST['submit'])) {
	mysqli_query($conn, "INSERT INTO `plant`(`Name`, `Taka`, `Image`, `Type`) VALUES ('$_POST[Name]','$_POST[taka]','$_POST[type]','$_POST[choice]')");
	//echo ;
}
?>

</html>