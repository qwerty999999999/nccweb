<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
$s="SELECT * FROM attendance";
    $q=mysqli_query($conn,$s);$l=0;$m=0;
    if(isset($_POST['check'])){$i=0;
while( $row = mysqli_fetch_assoc( $q ) ){
if(isset($_POST['t_'.$i]))
 {
     $_SESSION['current']=$_POST['t_'.$i];
     header("Refresh:0; url=editdetails.php");
}$i++;
}
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>EDIT DETAILS</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});
  </script>
  <style type="text/css">
   a:hover
   {
    text-decoration: none;
   }

  </style>
  <script type="text/javascript">
  $(function(){
    $("#v").hide();});
   $(function() {
setTimeout(function() { $(".container1").fadeOut(); }, 3000),
setTimeout(function() { $("#v").fadeIn(1500); }, 4000)});
</script>
</head>
<body>

<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="ENTER ANY DETAIL">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results" style="margin:auto;" id="t1">
  <thead>
    <tr>
      <th style="width: 10%;padding-left: 2%">Sr No.</th>
      <th>CRN</th>
      <th>NAME</th>
      <th>Details</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  
  <?php
 echo "<tbody>";
$s="SELECT * FROM attendance";
    $q=mysqli_query($conn,$s);$i=0;$l=0;$m=0;
while( $row = mysqli_fetch_assoc( $q ) ){
    $j=$row['crn'];
    $j1=$row['name'];$k='t_'.$l;
    echo"<form method='POST'><tr>
      <th style='padding-left: 4%'>1</th>
      <td>$j</td>
      <td>$j1</td>
      <td><input type='checkbox' name='check'><button value='".$j."' name='".$k."' class='btn btn-blue'>DETAILS</button></td>
    </tr></form>";
    $i++;$l++;$m++;
}
 echo "</tbody>";

  ?>
</table>



</body>
</html>