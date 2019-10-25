<!DOCTYPE html>
<html lang="en">
	<head>
		<title> King Vacations- LogIn</title>
		<!--link -->
		<link rel="icon" href="icon.png">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<!-- meta -->
		<meta charset="utf-8">
		<meta name="description" content="This website is designed to plan all your vacations. 
										It contains a home, attractions, contact and log in page information pages. 
										Currently on 'log in' of website."/>
		<meta name="author" content= "Philippe Bui">
	</head>
	
	<body id= "Sign up">
		<header>
			<!--<img alt ="TestPage" height="80" src="C:\Users\Philippe\Documents\school\School\Summer 2016\CS3520\Week 2\icon.png">-->
			<h1 id="logo">
				<a href="file:///C:/Users/Philippe/Documents/school/School/Summer%202016/CS3520/week%209/HomePage.html">
				<img alt="King Vacations" height="120" src="icon.png">
				</a>
			</h1>
			<h2>King Vacations</h2>
			<h3>Your one stop for planning!</h3>
			
		</header>
	
		<main>
			
			<!--<h1>Finder</h1>-->
				<ul>
				<!-- Home Page-->
					<li> <a class="Home Page" href="file://C:/Users/Philippe/Documents/school/School/Summer%202016/CS3520/Week%209/HomePage.html"> Home</a></li>
				<!-- Find general information.-->
					<li> <a class="Attractions" href="file://C:/Users/Philippe/Documents/school/School/Summer%202016/CS3520/Week%209/Attractions.html"> Attractions</a></li>
				<!-- Contact Me:-->
					<li> <a class="Sign up" href="file://C:/Users/Philippe/Documents/school/School/Summer%202016/CS3520/Week%209/ContactUs.html"> Sign up</a></li>
				<!-- log in:-->
				<li> <a class="Log In" href="file:///C:/Users/Philippe/Documents/school/School/Summer%202016/CS3520/Week%209/LogIn.html"> Log In</a></li>
				</ul>
			

			<img alt="pic" height="400" src="kc.png">
			
			
		</main>
		
		<body>
		
			
			<h1>Enter Username and Password </h1>
				<div class= "container form-signin">
				<form method="post" action="login.php">
					<input type="text" id="email" placeholder="email" value="" autofocus>
					
					<input type="password" placeholder="password" id="password" value="">
					
					<input type="submit" value="login" id="login" href="ContactUs.html">
					
			
			<?php
			//sql
				
			session_start();
				$dsn= 'mysql:host=localhost;dbnameusers';
				$username='admin';
				$password='hello';
								
				//checking connection
					try{
						//create Connection
						$dbn=new PDO($dsn,$username,$password);
						echo '<p> You are connected<p>';

					}
					catch( PDOException $e)
					{
						$error_message= $e->getMessage();
						echo "<p> Error occured: $error_message</p>";
					}

				if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
					
				   if ($_POST['username'] == 'admin' && $_POST['password'] == 'hello') {
					  $_SESSION['valid'] = true;
					  $_SESSION['username'] = '';
					  
					  echo 'You have entered valid use name and password';
				   }else {
					  $msg = 'Wrong username or password';
				   }
				}
				$query='SELECT* FROM users';
				$stmt= $db->prepare($query);
				$stmt->execute($query);
				
				foreach($usernames as $username){
					echo $username;
				}
				
				session_destroy();
				
			 ?>
		  </div> 
			
		</body>
		<footer>
			<p> Created by: Philippe Bui, CS 3520 </p>
		</footer>
		
	</body>
</html>