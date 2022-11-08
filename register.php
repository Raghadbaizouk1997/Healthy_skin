<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
 <form action="function/register.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	
    <label for="cust_name"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="cust_name"  id='name' required>
	
    <label for="phone"><b>Phone</b></label>
    <input type="phone" placeholder="Enter phone" name="phone" id='phone' required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  required>


   

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit"  class="registerbtn">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form> 
</body>
</html>