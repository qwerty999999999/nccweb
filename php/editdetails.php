<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
if(!isset($_SESSION['current'])){
    header("Refresh:0; url=index.php");
}
echo $_SESSION['current'];
require 'connect.php';

$u=$_SESSION['current'];
$s="SELECT * FROM attendance WHERE crn='$u'";
$q=mysqli_query($conn,$s);
$row=mysqli_fetch_assoc($q);
$name=$row['name'];
$email=$row['email'];
$crn=$row['crn'];
$attendance=$row['attendance'];
$TotalLectures=$row['TotalLectures'];
$CadetNumber=$row['CadetNumber'];
$Rank=$row['Rank'];
$FatherName=$row['FatherName'];
$MotherName=$row['MotherName'];
$BloodGroup=$row['BloodGroup'];
$MobileNumber=$row['MobileNumber'];
$ClassStudying=$row['ClassStudying'];
if(isset($_POST['submit'])){
    $o="UPDATE attendance SET email='".$_POST['email']."',name='".$_POST['name']."',crn=".$_POST['username'].",attendance=".$_POST['attendance'].",TotalLectures=".$_POST['TotalLectures'].",CadetNumber=".$_POST['cno'].",Rank='".$_POST['rank']."',FatherName='".$_POST['fname']."',MotherName='".$_POST['mname']."',BloodGroup='".$_POST['bgroup']."',MobileNumber=".$_POST['mno'].",ClassStudying='".$_POST['cstd']."' WHERE crn='$crn'";
$q=mysqli_query($conn,$o);
unset($_SESSION['current']);
header("Refresh:0; url=admin.php");
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>EDIT details of User</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="POST">
			<input type="text" value="<?php echo $name;?>" name="name" placeholder="Name" required>
			<input type="text" value="<?php echo $crn;?>" placeholder="class roll number" name="username" required>
			<input type="text" value="<?php echo $CadetNumber;?>" placeholder="Cadet Number" name="cno" required>
			<input type="text" value=<?php echo $Rank;?> placeholder="Rank" name="rank" required>
			<input type="text" value="<?php echo $FatherName;?>" placeholder="Father Name" name="fname" required>
			<input type="text" value="<?php echo $MotherName;?>" placeholder="Mother Name" name="mname" required>
			<input type="text" value="<?php echo $BloodGroup;?>" placeholder="Blood Group" name="bgroup" required>
			<input type="text" value="<?php echo $MobileNumber;?>" placeholder="Mobile Number" name="mno" required>
			<input type="email" value="<?php echo $email;?>" name="email" placeholder="Enter Email" required>
			<input type="text" value="<?php echo $ClassStudying;?>" placeholder="Class Studying" name="cstd" required>
			<input type="text" value="<?php echo $attendance;?>" placeholder="attendance" name="attendance" required>
			<input type="text" value="<?php echo $TotalLectures;?>" placeholder="Total Lectures" name="TotalLectures" required>
			<button type="submit" id="login-button" name="submit" value="submit">EDIT</button>
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

