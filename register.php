<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>Registration</title> 
  </head>
  <body>
    <nav style="background-color:#030C56;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h3">Registration</span>
	
  </div>
</nav>
  <div class="container text-center">
  <div class="row">
    <div class="col">
     <!-- 1 of 3 -->
    </div>
    <div class="col-8" style="padding: 50px;">
     <h2>Register</h2>
	 <p align style="text-align: left;">"To get started, please fill out the registration form below. Once you have completed the form, click <strong>'submit'</strong>. If you have any questions or concerns, please don't hesitate to contact the Administrator. </p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<label for="name"></label>
		<input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
		
		<label for="name"></label>
		<input type="number_format" class="form-control" id="gazette_number" name="gazette_number" placeholder="Enter your Gazette Number (Optioanl)">

		<label for="coronation_date"></label>
		<p style="text-align: left;">Date of Birth:</p>
		<input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required placeholder="Date of birth:"><br>

		<label for="gender"></label>
		<select class="form-control" id="gender" name="gender" required placeholder="Select gender">
			<option value="">Select Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>

		<label for="coronation_date"></label>
		<p style="text-align: left;">Date of Coronation:</p>
		<input type="date" class="form-control" id="coronation_date" name="coronation_date" required placeholder="Date of Coronation:"><br>

		<label for="title"></label>
		<select class="form-control" id="title" name="title" required placeholder="title">
			<option value="">Select Title</option>
			<option value="Paramount_Chief">Paramount Chief</option>
			<option value="Queen_Mother">Queen Mother</option>
			<option value="Divisional_Chief">Divisional Chief</option>
			<option value="Odikro">Odikro</option>
			<option value="Queen">Queen</option>
			<option value="Others">Others</option>
		</select><br>

		<label for="traditional_area"></label>
		<select class="form-control" id="traditional_area" name="traditional_area" required>
			<option value="">Select Traditional Area</option>
			<option value="">Gomoa Akyempim Traditional Council</option>
		</select><br>
		
		<label for="title"></label>
		<select class="form-control" id="town" name="town" required placeholder="town">
			<option value="">Select Town</option>
			<option value="Paramount_Chief">Dominase</option>
			<option value="Queen_Mother">Buduatta</option>
			<option value="Divisional_Chief">Potsin</option>
			<option value="Odikro">Mampong</option>
			<option value="Queen">Okyereko</option>
			<option value="Others">Others</option>
		</select><br>
		
		<label for="title"></label>
		<select class="form-control" id="district" name="district" required placeholder="district">
			<option value="">Select District</option>
			<option value="Gomoa_East_District">Gomoa East District</option>
			<option value="Gomoa_Central">Gomoa Central</option>
			<option value="Gomoa_West_District">Gomoa West District</option>
			<option value="Gomoa_Assin_Ajumako">Gomoa-Assin-Ajumako</option>
			<option value="Others">Others</option>
		</select><br>
		
		<div class="row">
  <div class="col">
  
    <input type="tel" class="form-control" id="tel" name="tel" required placeholder="Telephone:">
  </div>
  <div class="col">
    <input type="email" class="form-control" id="email" name="email" required placeholder="Email:">
  </div> <br>
  

</div>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$gazette_number = $_POST['gazette_number'];
			$date_of_birth = $_POST['date_of_birth'];
			$gender = $_POST['gender'];
			$coronation_date = $_POST['coronation_date'];
			$title = $_POST['title'];
			$traditional_area = $_POST['traditional_area'];
			$town = $_POST['town'];
			$district = $_POST['district'];
			$gazette_number = $_POST['gazette_number'];
			$tel = $_POST['tel'];
			$email = $_POST['email'];
			

			// You can perform further actions with the collected data, like sending an email, storing in a database, etc.
			// For now, we'll just print the data to the screen
			
			echo "<p><strong>Thank you for submitting your profile, $name!</strong></p>";
		}
	?>
	
    </div>
    <div class="col">
      <!-- 3 of 3 -->
    </div>
  
  
  
   <footer>
        <p align="center"><a href="/contact">Contact</a> | <a href="/about">About Akyempim Traditional Council</a> | <a href="/disclaimer">Disclaimer</a></p>
        <p align="center">&copy; 2023 Akyempim Traditional Council. All rights reserved.</p>
    </footer>
  </body>
</html>