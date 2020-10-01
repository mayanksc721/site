<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>USER REGISTRATION</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
 #main{
	 background-color:#333;
	 width:2000px;
	 height:1000px;
	 border-radius:0px;
 
	 background-image:url("mak.jpg");
	 background-size:1600px 800px;
 }
 h1{color: white;
    background-color:blue;
	border-top-right-radius:30px;
	border-top-left-radius:30px;
 }
 .text{
	 width:250px;
	 height:40px;
	 background-color:white;
 }
 #submit{
	 width:250px;
	 height:30px;
	 background-color:#5f5;
 }
 
	
 </style>
</head>
<body>
<div>
<?php
if(isset($_POST['create']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$password=$_POST['password'];
	$username=$_POST['username'];
	$sql="INSERT INTO user(firstname,lastname,email,phonenumber,password,username) VALUES(?,?,?,?,?,?)";
	$stmtinsert=$db->prepare($sql);
	$result=$stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password,$username]);
} 

?>
</div>

<div id="main">
 

<form action="" method="post">
      <div class="container">
	  <div class="row">
	   <div classs="col-sm-3">
	   <center> <h1>REGISTRATION</h1>
		<p>fill up form with correct values.</p><hr class="mb-3"></center>
		
		<label for="firstname"><b>First name</b></label>
		<input class="form-control" type="text" name="firstname" required placeholder="firstname">
		
		<label for="lastname"><b>Last name</b></label>
		<input class="form-control"type="text" name="lastname" required placeholder="last name">
		
		<label for="username"><b>Username</b></label>
		<input class="form-control" type="text" name="username" required placeholder="username">
		
		<label for="email"><b>Email</b></label>
		<input class="form-control" type="email" name="email" required  placeholder="email">
		
		<label for="phonenumber"><b>Phone number</b></label>
		<input class="form-control" type="text" name="phonenumber" required  placeholder="phone number">
		
		<label for="password"><b>Password</b></label>
		<input class="form-control" type="password" name="password" required  placeholder="password">
		
		<hr class="mb-3">
		<input class="btn btn-primary" type="submit" name="create" value="Sign Up">
	
		
		</div>
		</div>
		</div>
	</form>
	
</div>




</body>
</html>