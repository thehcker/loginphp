<?php
require 'core.inc.php';
require 'connect.inc.php';
if (!loggedin()){
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$password_hash = md5($password);
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	if(empty($username)|| empty($password)|| empty($password_again)|| empty($firstname)|| empty($surname)){
		echo "Fields are empty";
	}else{
			if ($password!=$password_again) {
				echo 'Passwords do not match';
			}else{
				$query = "SELECT username FROM account WHERE username='$username'";
				$query_run = mysql_query($query);
				if (mysql_num_rows($query_run)==1) {
					echo 'The username '.$username.' already exists';
				}else{
					$query = "INSERT INTO account VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";
					if ($query_run = mysql_query($query)) {
						header('Location: index.html');
					}else{
						echo 'Sorry we couldn\'t register you this time';
					}
				}
			}
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
		height: 400px;
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

	#login{
		background-color: #66cddd;
		padding-bottom: 10px;
	}
	#footer{
		position: absolute;
		width: 100%;
		height: 80px;
		background-color: #31353d;
		margin-top: 650px;
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
				<strong><h3>Enter your Details to Register</h3></strong>
			</div>
			<div id="login">
		<form action="register.php" method="post">
username:<br><input type="text" name="username" value ="<?php if (isset($username)) {echo $username; }?>"><br>
password:<br><input type="password" name="password"><br>
password_again:<br><input type="password" name="password_again"><br>
firstname:<br><input type="text" name="firstname" value ="<?php if (isset($firstname)) {echo $firstname; } ?>"><br>
surname:<br><input type="text" name="surname" value="<?php if (isset($surname)) {echo 'surname'; }?>"><br>
<input type="submit" value="Register">
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
}elseif (loggedin()){
	echo 'You are already registered and loggedin';
}
?>