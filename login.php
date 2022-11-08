<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="./css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="./javascript/login.js"></script>

</head>

<body>
	<div class="container">
		<form class="signUp">
			<h3>Create Your Account</h3>
			<input class="w100" type="text" id="name" name="name" placeholder="Insert Name" reqired autocomplete='off' />
			<input class="w100" type="text" id="phone" name="phone" placeholder="Insert Phone" reqired autocomplete='off' />
			<input type="email" id="email" name="email" placeholder="Insert Email" autocomplete='off' reqired />
			<input type="password" id="password" name="password" placeholder="Insert Password" reqired />
			<button class="form-btn sx log-in" type="button">Log In</button>
			<button class="form-btn dx" type="submit">Sign Up</button>
			
		</form>
		<form class="signIn" action="function/authenticate.php" method="post">
			<h3>Welcome</br>Back !</h3>

			<input type="email" id="email" name="email" placeholder="Insert Email" autocomplete='off' reqired />
			<input type="password" id="password" name="password" placeholder="Insert Password" reqired />
			<a href="register.php" class="forget-password">Forget Password?</a>
			<button class="form-btn sx back" type="button">Back</button>
			<button class="form-btn dx" type="submit">Log In</button>
		</form>
	</div>



</body>

</html>