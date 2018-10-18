<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
if(isset($_POST['submit'])){
$u=$_POST['username'];
$s="SELECT * FROM attendance WHERE crn='$u'";
$q=mysqli_query($conn,$s);
if(!mysqli_num_rows($q)>0){echo "<script>alert('username does not exists')</script>";
}
else{

$o="DELETE FROM attendance WHERE crn='$u'";
$q=mysqli_query($conn,$o);
header("Refresh:0; url=dashboarda.php");
}
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Delete a User</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="POST">
			<input type="text" placeholder="class roll number" name="username" required>
			<button type="submit" id="login-button" name="submit" value="submit">Add</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

 




</body>

</html>
