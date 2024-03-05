<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome page</title>

	<link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/startup_styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Germania+One&family=Noto+Sans+JP:wght@200;300&family=Patua+One&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Black+Han+Sans&family=Germania+One&family=Noto+Sans+JP:wght@200;300&family=Patua+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Black+Han+Sans&family=Germania+One&family=Noto+Sans+JP:wght@200;300&family=Patua+One&family=Russo+One&display=swap" rel="stylesheet">


</head>
<body>
	<?php
		include 'header.html';
	?>
	<div class="upper-image">
		<h2 class="upper-image-h2font">Welcome to Students Skill and Performance Management System</h2><br>
		<button class="button" onclick="location.href='button.php'">Get Started</button>
	</div>

	<div class="first">
		<!--2019/ASP/69 -->
			
		
			<div class="left-text">
			<button class="large-btn" onclick="location.href='studentLogin.php'">
				<p>Design Your Resume Effectively!</p>
				<img src="assests/studentResume.png" alt="" style="height:400px;width:400px;border-radius:50%;padding:0;">
				</button>
			</div>
		
		
			<div class="right-text">
			<button class="large-btn" onclick="location.href='searcherLogin.php'">
				<p>Find Skilled Undergraduates for Your Business!</p>
				<img src="assests/searcherImage.jpg" alt="" style="height:400px;width:400px;border-radius:50%;padding:0;">				
				</button>
			</div>
		
		
	</div>

	<div class="container2">
		<section class="about" id="about">
			<div class="main">
				<img src="assests/hire me image.jpg" alt="">
				<div class="about-text">
					<h1>About Us</h1>
					<h5> <span class="spanH5">Empower Your Future: </span>Your Skills, Your Platform, Your Success.</h5>
					<p>
						This is more than just a website. This is your launchpad to a fulfilling career.
						We believe every student deserves a chance to showcase their unique skills and potential to the world. 
						That's why we built this platform – a central hub where you can.
					</p>
				</div>
			</div>
		</section>
		<hr style="color: white">
		<section class="about">
			<div class="main-stu">
				<div class="about-text">
					<h1>Student</h1>
					<h5> This is your one-stop platform for taking control of your university experience. Here, you'll showcase your skills, track your performance, and connect with employers eager to find talent like you.</h5>
					<ul>
						<div class="list-item">
							<li>Craft your virtual resume: </li><span>Ditch the static document. Build a dynamic profile that highlights your achievements, projects, and skills with multimedia elements.</span>
						</div>
						<div class="list-item">
							<li>Track your progress: </li><span>Monitor your academic performance, skill development, and participation in extracurricular activities. Get insights into your strengths and areas for improvement.</span>
						</div>
						<div class="list-item">						
							<li>Connect with opportunities: </li><span>Make your profile visible to potential employers. Get discovered for internships, part-time gigs, or your dream graduate position.</span>
						</div>
					</ul>
				</div>
				
				<img src="assests/resumeStu.png" alt="">
				<button class="btn1" onclick="location.href='studentLogin.php'">Get Started</button>	
						
			</div>

			<hr style="color: white">

			<div class="main-search">
			<img src="assests/chooseCV.jpg" alt="">
				<button class="btn1 btn2" onclick="location.href='searcherLogin.php'">Get Started</button>			

				<div class="about-text">
					<h1>Searcher</h1>
					<h5> You can explore a pool of talented individuals efficiently. With powerful search and filter functionalities, you can identify candidates based on specific criteria, making the hiring process more targeted and effective..</h5>
					<ul>
						<div class="list-item">
							<li>Find the perfect talent:</li><span>Access a pool of diverse, skilled students eager to contribute. Search by specific skills, experiences, or academic achievements.</span>
						</div>
						<div class="list-item">
							<li>Review dynamic profiles:</li><span> Go beyond the resume. Explore students' virtual portfolios, projects, and recommendations to gain a deeper understanding of their potential.</span>
						</div>
						<div class="list-item">
							<li>Connect directly:</li><span>Reach out to students effortlessly through the platform. Schedule interviews, offer projects, and build your future workforce.</span>
						</div>
					</ul>
				</div>
			</div>
		</section>
	</div>

	<br>
	<section id="contact">
	<div class="contact">
		<h1>Got some queries,feel free to contact us</h1>
		<form action="functions/userQueries.php" method="post">
			<div class="form">
				<input type="text" placeholder="Name" id="Name" name="name" required>
				<input type="email" placeholder="E-mail" id ="E-mail" name="email" required>
				<input type="text" placeholder="Mobile No." id="Mobile No." name="mobileNo">
				<textarea placeholder="Your Message Here" id="text-area" rows="5" cols="10" name="query" required></textarea>
				<button type="submit" class="query" name="send">Submit Query</button>
			</div>
		</form>
	</div>
	</section>
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<?php
		include 'footer.html';
	?>
</body>
</html>