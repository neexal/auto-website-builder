<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "website";

$connect = new mysqli($servername, $username, $password, $db);
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}

if ($_POST) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$facebook=$_POST['facebook'];
	$about=$_POST['about'];

	$sql = "INSERT INTO website(fname, lname, age, email, contact, address, facebook, about) values('$fname', '$lname', '$age', '$email', '$contact', '$address', '$facebook' , '$about')";
	if($connect->query($sql) === TRUE) {
        //successful
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

	 $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $fname; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style>
			.carousel-inner img {
				width: 100%;
				height: 100%;
			}
		</style>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<!--navbar-->
	<nav class="navbar navbar-expand-lg sticky-top bg-light text-info">
			<a class="navbar-brand" href="#"><h4><?php echo $fname; ?></h4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link deco" href="#"><h6> <i class="fas fa-mobile-alt"></i> <?php echo $contact; ?></h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link deco" target="_blank" href="mailto:<?php echo $email; ?>"><h6><i class="fas fa-envelope"></i> <?php echo $email; ?></h6></a>
					</li>
					<li class="nav-item">
						<a class="nav-link deco" target="_blank" href="<?php echo $facebook; ?>"><h6><i class="fab fa-facebook-square"></i> <?php echo $facebook; ?></h6></a>
					</li>
				</div>
			</nav>
	<!--navbar-->

	<!--header-->
			<div id="demo" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="banner.jpg" alt="banner.image" width="1100" height="500">
						<div class="carousel-caption">
							<h1 class="display-3 font-weight-bold"><?php echo $fname; ?> <span class="text-info"><?php echo $lname; ?></span></h1>
							
						</div>
					</div>
				</div>
			</div>
	<!--header ends-->

	<!--content-->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 py-5">
				<h3 class="text-info">Personal Information</h3>
				<ol class="list-unstyled text-muted pt-4">
					<li>Name 	: <?php echo $fname; ?> <?php echo $lname; ?></li>
					<li>Age  	: <?php echo $age; ?></li>
					<li>Address : <?php echo $address; ?></li>
					<li>Contact : <?php echo $contact; ?></li>
					<li>E-mail  : <?php echo $email; ?></li>
				</ol>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-6 py-5">
				<h3 class="text-info">About me</h3>
				<p class="text-muted pt-4"><?php echo $about; ?></p>
			</div>
		</div>
	</div>


<div class="container">
	<div class="row text-center text-secondary">
		<div class="col-md-12">
			<p class="lead">Made with <3 by @neexal 2020</p>
		</div>
	</div>
</div>
</body>
</html>