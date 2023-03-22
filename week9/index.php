<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <main>
		<nav class="navbar">
			<div class="logo">
				<h4 class="navtext" href="#">Navigation Bar</h4>
			</div>

			<ul class="sections">
				<li>
					<a href="#home">Home</a>
				</li>
				<li>
					<a href="#intro">About</a>
				</li>
				<li>
					<a href="#interests">Interests</a>
				</li>
				<li>
					<a href="#resume">Projects</a>
				</li>
				<li>
					<a href="#education">Education</a>
				</li>
				<li>
					<a href="#socials">Contacts</a>
				</li>
			</ul>
			<div class="burger"> 
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>

	<section id="home">
		<div  class="welcome">
			<h1>Welcome!</h1>
			<p>Traverse through the sections using the navigation bar.</p>
		</div>
	</section>

    <section id="intro">
		<div class="content-wrap">
			<h1>Gabriel Dominic  F. Marquez</h1>
			<h2>Freelance Web Developer + Data Analyst</h2>
			<p>As I make this profile page, I currently am studying as a sophomore in Asia Pacific College
			as a Computer Science Major, with specialization in CyberSecurity and Forensics.</p>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
			labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
			esse cillum dolore eu fugiat nulla pariatur. Excepteur sint cupidatat non proident, sunt in 
			culpa qui officia deserunt mollit anim id est laborum."</p>
		</div>
	</section>

	<section id="interests">
		<p>Interests Filler</p>
	</section>

    <section id="resume">
		<div class="content-wrap">
			<h2>My Programming Portfolio</h2>
			<p>View selected projects below. More information can be found at <a id="mylinks" href="https://www.youtube.com/shorts/f-A989FqyxI" target="_blank">gabrieldominic.com</a>.</p>
          	<h3>Featured Projects</h3>
         	 <!-- <img src="C:\webprog\lab2\week5\placeholder images\annie-spratt-unsplash.jpg" alt="description of image"> -->
         	 <p>To learn more about my recent projects, click on the links below:</p>	
			<a class="btn" href="https://www.youtube.com/watch?v=-ZGlaAxB7nI&ab_channel=iwanPlays" target="_blank">Github Account</a>
			<a class="btn" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" target="_blank">My Projects</a>
			<a class="btn" href="https://www.youtube.com/watch?v=sgKK0YRQyMQ&list=LL&index=7&ab_channel=Maxises" target="_blank">Work Experience</a>
		</div>
    </section>

    <section id="education">
				<h2 class="eductitle">Educational Background</h2>
				<h3>Tenement Elementary School - Taguig City</h3>
				<p><strong>2008-2015</strong></p>
				<p>Here, I grew up studying in a public school, started as a kindergartner at the age of 4, until I graduated from elementary education by the age of 12.</p>
				<h3>Thy Covenant Montesorri School - Taguig City</h3>
				<p><strong>2015-2019</strong></p>
				<p>This is where I spent 4 years of junior high school, have met great teachers, friends, which played a huge part on building up the person that I am, today.</p>
				<h3>Pasay City South High School - Pasay City</h3>
				<p><strong>2019-2021</strong></p>
				<p>I graduated high school in Pasay as a STEM student. We have spent a year of face-to-face classes until a COVID-19 pandemic was declared by the start of year 2020.</p>
	</section>

    <footer id="socials">
		<h2>Let's Keep in Touch!</h2>
		<ul>
		  <li id="mylinks"><a href="maaquui@gmail.com">maaquui@gmail.com</a></li>
		  <li id="mylinks"><a href="https://www.instagram.com/mmmaqi_/" target="_blank">Instagram</a></li>
		  <li id="mylinks"><a href="https://www.facebook.com/gabriel.dominic.169067/" target="_blank">Facebook</a></li>
		  <li id="mylinks"><a href="https://www.linkedin.com/in/gabriel-dominic-marquez-77527721a/" target="_blank">LinkedIn</a></li>
		  <li id="mylinks"><a href="http://localhost/lab2/week9/validation_complete.php" target="_blank">Guest Form</a></li>
		</ul>
    </footer>

	<section style="margin: 50px; color: black;">
        <h1 style="font-family: Helvetica;">My Guests</h1>
        <br>
        
        <table style="border-collapse: collapse; width: 100%; color: black; font-family: monospace; font-size: 25px; text-align: left;">
            <thead>
                <tr style="font-family: Helvetica; padding: 18px; line-height: 2; background: #464E47; color: #F1FFFA;">
                    <th >ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Gender</th>
                    <th>Comment</th>
                    <th>Sign Up Date</th>
                </tr>
            </thead>
            <tbody style="line-height: 1.5;">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "myDB";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM guest_list";
                $result = $conn->query($sql);
                
                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                while($row = $result->fetch_assoc()) 
                {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["guest_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["website"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["comment"] . "</td>
                    <td>" . $row["reg_date"] . "</td>       
                </tr>";
                }
                
                ?>
            </tbody>
        </table>
    </section>

    </main>
	<script src="script.js"></script>
  </body>
</html>
