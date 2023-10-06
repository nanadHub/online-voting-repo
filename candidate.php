<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>
<body>
	<div class="nav">
		
		<ul>
			<div class="name">
				<p>ADMIN</p>
			</div>
			<div class="anchor">

				<a href="admin.php"><div class="flex">
					<div class="li_img">
						<img src="image/home.png">
					</div>
					<div class="li_name">
						<li>HOME</li>
					</div>
				</div></a>

				<a href="candidate.php"><div class="flex">
					<div class="li_img">
						<img src="image/candidate.png">
					</div>
					<div class="li_name">
						<li>CANDIDATE</li>
					</div>
				</div></a>

				<a href="#"><div class="flex">
					<div class="li_img">
						<img src="image/voters.png">
					</div>
					<div class="li_name">
						<li>VOTERS</li>
					</div>
				</div></a>

				<a href="#"><div class="flex">
					<div class="li_img">
						<img src="image/rankings.png">
					</div>
					<div class="li_name">
						<li>RESULTS</li>
					</div>
				</div></a>

				<a href="#"><div class="flex">
					<div class="li_img">
						<img src="image/setting.png">
					</div>
					<div class="li_name">
						<li>SETTINGS</li>
					</div>
				</div></a>
				
			</div>
			
			
		</ul>
	</div>

	<div class="content">
		<div class="dashboard_holder">
			<div class="dashboard_title">

			  	<div class="new_btn_holder">
			  		<div class="hamburger">
						<span></span>
					</div>

					<div class="new_nav">
		
						<ul>
							<div class="new_name">
								<p>MENU</p>
							</div>
							<div class="popnav">

								<a href="admin.php"><div class="flex">
									<div class="li_img">
										<img src="image/home.png">
									</div>
									<div class="li_name">
										<li>HOME</li>
									</div>
								</div></a>

								<a href="candidate.php"><div class="flex">
									<div class="li_img">
										<img src="image/candidate.png">
									</div>
									<div class="li_name">
										<li>CANDIDATE</li>
									</div>
								</div></a>

								<a href="#"><div class="flex">
									<div class="li_img">
										<img src="image/voters.png">
									</div>
									<div class="li_name">
										<li>VOTERS</li>
									</div>
								</div></a>

								<a href="#"><div class="flex">
									<div class="li_img">
										<img src="image/rankings.png">
									</div>
									<div class="li_name">
										<li>RESULTS</li>
									</div>
								</div></a>
				
							</div>
			
			
						</ul>
					</div>
					
			  	</div>
				

				<div>
					<h2>DASHBOARD</h2>
				</div>
				<div class="divide">
					<div class="admin_img">
						<img src="image/jhonard.jpg">
					</div>
					<div class="logout_part">
						<div>
							<a href=""><li>LOG OUT</li></a>
						</div>
						<div>
							<img src="image/logout.png">
						</div>	
					</div>
				</div>
			</div>

			<div class="card_container">
				<div class="card">
					<div class="reg_voters">
						<p>Registered Voters</p>
					</div>
					<div class="card_icon">
						<div class="numbers">
							<p>00</p>
						</div>
						<div>
							<img src="image/voting.png">	
						</div>
					</div>
		    	</div>

		    	<div class="card">
					<div class="reg_voters">
						<p>Numbers of Candidates</p>
					</div>
					<div class="card_icon">
						<div class="numbers">
							<p>00</p>
						</div>
						<div>
							<img src="image/candidate1.png">	
						</div>
					</div>
		    	</div>

		    	<div class="card">
					<div class="reg_voters">
						<p>Numbers of Position</p>
					</div>
					<div class="card_icon">
						<div class="numbers">
							<p>00</p>
						</div>
						<div>
							<img src="image/job-offer.png">	
						</div>
					</div>
		    	</div>

			</div>

			<div class="partlist_holder">
				<div class="partylist1">
					
				</div>
				<div class="partylist2">
					
				</div>
			</div>

			
		</div>
	</div>


</body>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</html>