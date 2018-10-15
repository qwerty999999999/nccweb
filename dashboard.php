<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Refresh:0; url=indexd.php");
}
require 'connect.php';
$u=$_SESSION['username'];
$s="SELECT * FROM attendance WHERE crn='$u'";
$q=mysqli_query($conn,$s);
$t="SELECT * FROM attendanceevening WHERE crn='$u'";
$q1=mysqli_query($conn,$t);
if((mysqli_num_rows($q)>0)||(mysqli_num_rows($q1)>0))
{   if(mysqli_num_rows($q)>0)
    $row = mysqli_fetch_assoc($q);
   else if(mysqli_num_rows($q1)>0)
    $row = mysqli_fetch_assoc($q1);
	$email=$row['email'];
	$name=$row['name'];
	$crn=$row['crn'];
	$attendances=$row['attendance'];
	$TotalLectures=$row['TotalLectures'];
	$CadetNumber=$row['CadetNumber'];
	$Rank=$row['Rank'];
	$FatherName=$row['FatherName'];
	$MotherName=$row['MotherName'];
	$BloodGroup=$row['BloodGroup'];
	$MobileNumber=$row['MobileNumber'];
	$ClassStudying=$row['ClassStudying'];
	$DOB=$row['DOB'];
}
?>
<html lang="en" >

<head>
    
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <style>
<?php include 'css/styled.css'; ?>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500);

.quote-box {
  border-radius:3px;
  position:relative;
  margin:2% auto auto auto;
  min-width:70%;
  padding:40px 50px;
  display:table;
  background-color:#fff;
  .quote-text {
    i{
      font-size:1.0em;
      margin-right: 0.4em;
    }
    text-align:center;
    width:450px;
    height:auto;
    clear:both;
    font-weight:500;
    font-size:1.75em;
  }
  }
  .quote-author {
   
    height:auto;
    clear:both;
    padding-top:20px;
    font-size:1em; 
    float:right;
  }
* {
  margin: 0;
  padding: 0;
  list-style: none;
  vertical-align: baseline;
}
div {
  position:relative;
  z-index: 2;
}

body {
  background-color: #333;
  color: #333;
  font-family: 'Raleway', sans-serif;
  font-weight:400;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="quote-box">
  <div class="quote-text">
    <i class="fa fa-quote-left"> </i><span id="text"> The weak can never forgive. Forgiveness is the attribute of the strong. </span><i class="fa fa-quote-right"> </i>
  </div>
  <div class="quote-author">
    - <span id="author">Mahatma Gandhi</span>
  </div>
 </div>
	
<table class="rwd-table">
  <tr>
    <th>NAME</th>
     <td data-th="NAME" ><?php echo $name;?></td>
  </tr>
   <tr>
     <th>FATHER NAME</th>
     <td data-th="FATHER NAME"><?php echo $FatherName;?></td>
 </tr>
  <tr>
     <th>MOTHER NAME</th>
     <td data-th="MOTHER NAME"><?php echo $MotherName;?></td>
 </tr>
  <tr>
     <th>LECTURES ATTENDED</th>
    <td data-th="LECTURES ATTENDED" ><?php echo $attendances;?></td>
  </tr>
 <tr>
     <th>TOTAL LECTURES</th>
     <td data-th="TOTAL LECTURES"><?php echo $TotalLectures;?></td>
 </tr>
 <tr>
     <th>PERCENTAGE</th>
     <td data-th="PERCENTAGE"><?php echo ((int)((($attendances/$TotalLectures)*100)));?></td>
 </tr>
 <tr>
     <th>CADET NUMBER</th>
     <td data-th="CADET NUMBER"><?php echo $CadetNumber;?></td>
 </tr>
  <tr>
     <th>RANK</th>
     <td data-th="RANK"><?php echo $Rank;?></td>
 </tr> 


 <tr>
     <th>BLOOD GROUP</th>
     <td data-th="BLOOD GROUP"><?php echo $BloodGroup;?></td>
 </tr> 
 <tr>
     <th>MOBILE NUMBER</th>
     <td data-th="MOBILE NUMBER"><?php echo $MobileNumber;?></td>
 </tr> 
 <tr>
     <th>CLASS STUDYING</th>
     <td data-th="CLASS STUDYING"><?php echo $ClassStudying;?></td>
 </tr>
 <tr>
     <th>CLASS ROLL NUMBER</th>
     <td data-th="CLASS ROLL NUMBER"><?php echo $crn;?></td>
 </tr>
 <tr>
     <th>DOB</th>
     <td data-th="DOB"><?php echo  $DOB;?></td>
 </tr>
</table>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      


<a style="text-decoration:none;color:white;" href="logout.php"><button style="background-color: #34495E;
    border: none;position:relative;margin-left:10%;
    color: white;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;">Logout</button></a>
    <a style="text-decoration:none;color:white;" href="change.php"><button style="background-color: #34495E;
    border: none;
    color: white;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;">Change Password</button></a>
</body>

</html>
