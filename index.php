<? php require_once='db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto Website Builder</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="py-2">
	<div class="container">
		<div class="row bg-secondary text-light text-center py-5">
			<div class="col-md-12">
				<p class="display-1">Free Website Builder</p>
				<p class="lead">Everyone needs a website but not everyone can code it.</p>
				<p class="h4">Fill the form below and get your site ready within minutes</p>
			</div>
		</div>
	</div>
</div>


<div class="my-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="db.php" method="POST">
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" name="fname" class="form-control" placeholder="Eg: John">
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" name="lname" class="form-control" placeholder="Eg: Doe">
					</div>
					<div class="form-group">
						<label>Age:</label>
						<input type="text" name="age" class="form-control" placeholder="Eg: 22">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="email" class="form-control" placeholder="Eg: john@doe.com">
					</div>
					<div class="form-group">
						<label>Contact :</label>
						<input type="text" name="contact" class="form-control" placeholder="Eg: 98*********">
					</div>
					<div class="form-group">
						<label>Address:</label>
						<input type="text" name="address" class="form-control" placeholder="Eg: 123 Street, City">
					</div>
					<div class="form-group">
						<label>Facebook Link:</label>
						<input type="text" name="facebook" class="form-control" placeholder="Eg: https://www.facebook.com/john.doe">
					</div>
					<div class="form-group">
					    <label>About You</label>
					    <textarea name="about" class="form-control" rows="3" placeholder="Write about yourself in around 300 characters."></textarea>
					 </div>

					 <!--
					<div class="form-group">
						<label>Education:</label>
						<input type="checkbox" name="educatiom" class="form-control" value="school">School
						<input type="checkbox" name="educatiom" class="form-control" value="high-School">High School
						<input type="checkbox" name="educatiom" class="form-control" value="college">College
					</div>
					<div class="row pt-5">
						<div class="col-md-6">
							<div class="form-group">
								<label>Upload Banner Image</label>
    							<input type="file" class="form-control-file" name="banner">
  							</div>
						</div>
					<div class="col-md-6">
	  					<div class="form-group">
	  						<label>Upload Thumbnail Image</label>
	    					<input type="file" class="form-control-file" name="thumbnail">
	  					</div>
  					</div>
  				</div> -->

  				
  				<button type="submit" class="btn btn-info form-control">Create website now!!!</button>
				</form>
			</div>
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