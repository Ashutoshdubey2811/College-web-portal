<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
		}
		
		.container {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}
		
		h2 {
			text-align: center;
			color: #444;
			margin-bottom: 30px;
		}
		
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			background-color: #f2f2f2;
		}
		
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
		}
		
		.form-group {
			margin-bottom: 20px;
		}
		
		label {
			display: block;
			color: #666;
			margin-bottom: 5px;
		}
		
		.user-type {
			display: flex;
			flex-wrap: wrap;
			margin-bottom: 20px;
		}
		
		.user-type label {
			margin-right: 10px;
		}
		
		.user-type input[type=radio] {
			margin-right: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Login Form</h2>
		<form action="login_check.php" method="POST">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" placeholder="Enter your name">
			</div>
			
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" placeholder="Enter your password">
			</div>
			<div class="form-group">
				<input type="submit" value="Login">
			</div>
		</form>
	</div>
</body>
</html>
