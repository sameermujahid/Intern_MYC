<!DOCTYPE html>
<html>
	<style>
		nav {
			background-color: #2f2c2c;
			overflow: hidden;
		}

		nav a {
			font-size: large;
			float: right;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		nav a:hover {
			background-color: green;
			color: black;                               
		}
		body{
			background-image:url("bg2.jpg");
			background-size:cover;
			background-repeat:no-repeat;
			
		}
		h1{
			text-align:center;
			margin-top:60px;
			font-size:2em;
			font-family:bold;
		}
		img{
			margin-top:4px;
		}

		form input{
			font-size:large;
			width: 400px;
			height: 45px;
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
			outline: auto ;
			border: 1cm;
		}
		button{
			width: 200px;
			height: 45px;
			border-radius: 4px;
			text-align: center;
			font-size: 0.7em;
		}

		.form{
			text-align: center;
			font-size: x-large;
			margin-top: 20px;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<nav>
        <div class= "nav">
		<a href="#">Login</a>
		<a href="#">Home</a>
		<a href="#">About</a>
		<a href="#">Contact</a>
	</nav>

    <form action= "1016_Validation.php" method="post">
	<h1>Login Page<h1>
	<a><img src="icon.jpeg" class="center"width="100"height="100"></a>
	<div class="form">
        <label for="fname">Username</label><br>
        <input type="email"id="uname" name="uname"><br> 
        <label for="lname">Password</label><br>
        <input type="password"id="user_password" name="user_password"><br><br>
        <button type="Submit">Login</button>
    </form> 
	</div>
</body>
</html>