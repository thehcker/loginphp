<?php

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	#box{
		box-sizing: border-box;
		margin:0px;
		padding:0px;
	}
	#header{
		position: absolute;
		width: 100%;
		height: 50px;
		background-color: #31353d;
	}

	#wrap{
		position: absolute;
		padding: 25px;
		padding-top: 100px;
		border: 1px solid grey;
		text-align: center;
		height: 300px;
		width: 300px;
		margin-top: 80px;
		margin-left: 35%;
		background-color: #e9edf2;
	}
	#logo{
		text-align: center;
		margin-left: 100px;
		height: 60px;
		width: 100px;
	}
	
	#blue{
		background-color: #66cddd;
		border: 1px solid purple;
	}

	
	#title{
		
		font-style: italic;
		height: 30px;

	}

	#signup{
		background-color: #66cddd;
		padding-bottom: 10px;
		
	}
	a{
		text-decoration: none;
	}
	#footer{
		position: absolute;
		width: 100%;
		height: 80px;
		background-color: #31353d;
		margin-top: 550px;
	}


</style>
	<title></title>
</head>
<body>
<div id="box">
	<div id="header">
		<h3>RIAT</h3>
	</div>
	<div id="wrap">
		<div id="logo">
			<h2>Sign Up</h2>
		</div>
		<div id="blue">
			<div id="title">
				<strong><h4>Sign In or Sign Up</h4></strong>
			</div>
			<div id="signup">
			<a href="index.php"><h2>Login</h2></a>
			<a href="register.php"><h2>Sign Up</h2></a>
			</div>
		</div>
	</div>
	<div id="footer">
		<span>Copyright 2018</span>
	</div>
</div>

</body>
</html>
