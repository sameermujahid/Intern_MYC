<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background-image: url('wallpaper.jpg');
			background-size: cover;
			background-position: center center;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
		}

		h2 {
			color: #fff;
			text-align: center;
			font-size: 2.5em;
			margin-bottom: 20px;
		}

		label {
			display: block;
			font-size: 1.2em;
			margin-bottom: 10px;
		}

		input[type="text"]{
			font-size: large;
			width: 400px;
			height: 45px;
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
			outline: auto;
			border: 1cm;
		}

		input[type="email"]{
   		font-size: large;
    	width: 500px; /* or any other desired value */
    	height: 40px;
    	text-align: center;
    	margin-top: 0.001px;
    	margin-bottom: 10px;
    	outline: auto;
    	border: 1cm;
		}

		input[type="password"] {
			font-size: large;
			width: 500px;
			height: 40px;
			text-align: center;
			margin-top: 0.001px;
			margin-bottom: 10px;
			outline: auto;
			border: 1cm;
		}

		input[type="submit"]{
			background-color: #2ecc71;
			color: #fff;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		input[type="button"] {
			background-color: red;
			float: right;
			color: #fff;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover,
		input[type="button"]:hover {
			background-color: #27ae60;
		}
	img
	{
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-top: 20px;
		margin-bottom: 50px;
	}
	</style>
</head>
<body>
	<form action="login_validation.php" method="post">
		<h2>Login</h2>
		<a><image src="icon.jpg" class="center"width="200"height="200"></a>
		<div class="form">
		<label for="fname">Username</label>
		<input type="email"id= "uname"name="uname">
		<label for= "lname">Password</label>
		<input type="password" name="user_password"><br>
		<input type="submit" value="Login">
		<input type="button" value="Cancel">
	</form>
</body>
</html>
