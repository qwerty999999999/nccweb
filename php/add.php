<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=indexd.php");
}
require 'connect.php';
if(isset($_POST['submit'])){
$u=$_POST['username'];
$s="SELECT * FROM attendance WHERE crn='$u'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0){echo "<script>alert('username already exists')</script>";
}
else{
  $date = $_POST['dob'];
$your_date = date("Y-m-d", strtotime($date));  
$o="INSERT INTO attendance(email,name,password,crn,attendance,TotalLectures,CadetNumber,Rank,FatherName,MotherName,BloodGroup,MobileNumber,ClassStudying,DOB)values('".$_POST['email']."','".$_POST['name']."','".$_POST['password']."',".$_POST['username'].",0,0,".$_POST['cno'].",'".$_POST['rank']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['bgroup']."',".$_POST['mno'].",'".$_POST['cstd']."','$your_date')";
$q=mysqli_query($conn,$o);
header("Refresh:0; url=dashboarda.php");
}
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Add a new User</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styleq.css">
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="POST">
			<input type="text" name="name" placeholder="Name" required>
			<input type="text" placeholder="class roll number" name="username" required>
			<input type="text" placeholder="Cadet Number" name="cno" required>
			<input type="text" placeholder="Rank" name="rank" required>
			<input type="text" placeholder="Father Name" name="fname" required>
			<input type="text" placeholder="Mother Name" name="mname" required>
			<input type="text" placeholder="Blood Group" name="bgroup" required>
			<input type="text" placeholder="Mobile Number" name="mno" required>
			<input type="email" name="email" placeholder="Enter Email" required>
			<input type="text" placeholder="Class Studying" name="cstd" required>
			<input type="password" placeholder="Password" name="password" placeholder="dob" required>
            DOB<input type="date" id="dob" name="dob"
               value="2000-07-22"
               min="1990-01-01" max="2050-12-31" / required>
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
