<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=indexd.php");
}
require 'connect.php';
$i=0;
$s="SELECT * FROM attendance";
    $q=mysqli_query($conn,$s);
echo "<form method='POST' action='dashboarda.php'>
<table class='rwd-table' align='center'>
  <thead>
    <tr>
      <th>Name</th>
      <th>CRN</th>
      <th>LECTURES ATTENDED</th>
      <th>TOTAL LECTURES</th>
      <th>PERCENTAGE</th>
      <th>Mark Attendance</th>
    </tr>
  </thead>
   <tbody>";
   if( mysqli_num_rows( $q )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else{$i=0;
        while( $row = mysqli_fetch_assoc( $q ) ){
          $P=(int)((($row['attendance']/$row['TotalLectures'])*100));
          echo "<tr><td data-th='Name'>{$row['name']}</td><td data-th='CRN'>{$row['crn']}</td><td data-th='LECTURES ATTENDED'>{$row['attendance']}</td><td data-th='TOTAL LECTURES'>{$row['TotalLectures']}</td><td data-th='PERCENTAGE'>{$P}</td><td data-th='Mark Attendance'><input type='radio' name='t_".$i."' value='absent'> Absent <input type='radio' name='t_".$i."' value='present' checked> Present</tr>\n";

          $i++;
        }
      }
      echo "</tbody></table>
      <button style='background-color: #34495E;
    border: none;margin:auto auto auto 10%;position:relative;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;' value='submit' name='submit' type='submit'>Mark Attendance</button></form>";
?>

<?php
if (isset($_POST['submit'])) {
  $i=0;
  $s="SELECT * FROM attendance";
    $q=mysqli_query($conn,$s);
while( $row = mysqli_fetch_assoc( $q ) ){
  $e=$_POST['t_'.$i];
  $f = (int)($row['crn']);
if(isset($_POST['t_'.$i]))
{
if($e=='present'){
$l="UPDATE attendance SET attendance=(attendance+1) WHERE crn='$f'";
$q7=mysqli_query($conn,$l);

}

}

$i++;

}
$l2='UPDATE attendance SET TotalLectures=(TotalLectures+1) WHERE 1';
$q7=mysqli_query($conn,$l2);
echo "<script type='text/javascript'>alert('Attendance Updated(Go Back And Revisit to see updated attendance)!Please Do not Refresh this Page.');</script>";
}
?>
<html><head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <style>
<?php include 'css/styled.css'; ?>
body
{
    background-color:#333;
}
</style>
</head><body><p></p><a style="text-decoration:none;color:white;" href="logout.php"><button style="background-color: #34495E;
    border: none;margin:auto auto auto 10%;position:relative;
    color: white;
    padding: 0 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;"><h2>Logout</h2></button></a>
<a style="text-decoration:none;color:white;" href="admin.php"><button style="background-color: #34495E;position:relative;
    border: none;
    color: white;
    padding: 0 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;"><h2>Back</h2></button></a><p>&nbsp</p></body>
</html>
