<?php
	include_once 'header.php';
?>

	<div class='login-container'>
		<center>
			<br />
		<h2 id="register">Sign Up for MavConnect</h2>
		<form class='signup-form' action='background/signup.php' method='POST'>
			<input type="text" name="first" placeholder="First Name">
			<input type="text" name="last" placeholder="Last Name">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password"><br /><br />
			<input type="radio" name="type" value="student" checked="checked"> Student
			<input type="radio" name="type" value="Recruiter"> Recruiter
			<button type = 'submit' name = 'submit'>Signup</button>
		</form>
	</center>
	</div>

<?php
	include_once 'footer.php';
?>
