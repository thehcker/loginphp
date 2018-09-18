<?php
require 'connect.inc.php';
if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);

	if (!empty($username) && !empty($password)){
		$query = "SELECT id FROM account WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password_hash)."'";
		if ($query_run = mysql_query($query)) {
			$query_num_rows = mysql_num_rows($query_run);
			if ($query_num_rows==0){
				echo 'Invalid username/password combination';
			}else if ($query_num_rows==1){
				$user_id = mysql_result($query_run, 0,'id');
				$_SESSION['user_id'] = $user_id;
				header('Location: index.php');
			}
		}else{
			echo 'Query run unsuccessful'.$password_hash;
		}
	}else{
		echo 'You must enter all fields';
	}
}


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
		width: 60px;
	}
	
	#blue{
		background-color: #66cddd;
		border: 1px solid purple;
	}

	
	#title{
		
		font-style: italic;
		height: 30px;

	}

	#login{
		background-color: #66cddd;
		padding-bottom: 10px;
	}
	#footer{
		position: absolute;
		width: 100%;
		height: 80px;
		background-color: #31353d;
		margin-top: 550px;
	}
</style>
</head>
<body>
<div id="box">
	<div id="header">
		<h3>RIAT</h3>
	</div>
	<div id="wrap">
		<div id="logo">
			<h2>Login</h2>
		</div>
		<div id="blue">
			<div id="title">
				<strong><h4>Enter your Username and Password</h4></strong>
			</div>
			<div id="login">
		<form action="<?php echo $current_file; ?>" method="POST">
		Username:<input type="text" name="username"><br><br><br>
		Password:<input type="Password" name="password"><br><br><br>
		<input type="submit" value="Log In">
		</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<span>Copyright 2018</span>
	</div>
</div>

</body>
</html>

<?php


?>