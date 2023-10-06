<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Login</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<header>
		<div class="holder">
			<div class="logo_side">
				<div class="icst_logo">
					<img src="image/logo_trans.png">
				</div>
				<div class="icst">
			    	<p class="ic">INNOVATIVE COLLEGE</p> 
			   		<p class="st">OF SCIENCE AND TECHNOLOGY</p>
				</div>
				<div class="address">
					<p>Malitbog, Bongabong,</p>
					<p>Oriental Mindoro 5211,</p>
					<p>Philippines</p>
				</div>
			</div>
			<div class="info_side">
				<div>
					<p>09937380697</p>
		 	    	<p>tagasajhonard@gmail.com</p>
				</div>
				<div>
					<div>
						<img src="image/phone.png" class="logo">
					</div>
					<div>
						<img src="image/email.png" class="logo">
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php 
	include('include/connection.php');
		if (isset($_POST['back'])) {
			header('location:login.php');
		}
		if (isset($_POST['login'])) {
			$id = $_POST['studID'];
			$lname = $_POST['lname'];
			$course = $_POST['course'];
			$section = $_POST['section'];

			$insert = "INSERT INTO ssg_voters(student_id,surname,course,section)VALUES('{$id}','{$lname}','{$course}','{$section}')";
			$conn->query($insert);
		}
	?>

	<div class="outer_holder">

		<div class="ssg_login">
			<div class="login_logo">
				<img src="image/logo_trans.png">
			</div>
			<div class="login_text">
				<h1>STUDENT'S LOGIN</h1>
			</div>

			<form method="post">
				<div class="ssg_input">

					<div class="div_flex">
						<div class="inner_div_input">
							<label>Student-ID</label>
							<input type="text" name="studID" placeholder="Ex: 00-00000" required>

							<label>Last Name</label>
							<input type="text" name="lname" placeholder="Ex: Dela Cruz" required>
						</div>

						
						<div class="inner_div_input">
							<label>Course</label>

							<select name="course" class="input">
								<option disabled selected>Select Course</option>
								<?php 
									include('include/connection.php');

									$list = "SELECT * FROM course";
									$result = $conn->query($list);
										if ($result->num_rows>0) {
											while ($row = $result->fetch_assoc()) {
												?>  
													<option value="<?php echo $row['course_name']; ?>">
														<?php echo $row['course_name']; ?>		
													</option>
												<?php
											}
										}
									
								?>
									
							</select>

							<label>Section</label>
							<input type="text" name="section" placeholder="Ex: 000" required>
						</div>
					</div>
					

					<div class="submit_btn">
						<input type="submit" name="back" value="Back">
						<input type="submit" name="login">
					</div>
				</div>
				
			</form>

		</div>

		<div class="ssg_profile">
			<img src="image/tree.png">
		</div>

	</div>
</body>
</html>