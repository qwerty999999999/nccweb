<?php
session_start();
if(isset($_SESSION['username'])){
    header("Refresh:0; url=dashboard.php");
}

if(isset($_SESSION['usernamea'])){
    header("Refresh:0; url=admin.php");
}
require 'connect.php';
if(isset($_POST['submit'])){
	$u=$_POST['username'];
$s="SELECT * FROM attendance WHERE email='$u'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0)
{$row=mysqli_fetch_assoc($q);
$p=$row['password'];
    require_once "phpmailer/class.phpmailer.php";
$message = 'HI '.$row['name'].' Your Password is '.$p;
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPDebug = 0;                     
$mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";          
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;              
        $mail->Username='';
        $mail->Password='';
        $emails=$row['email'];
        $mail->SetFrom('', '');
        $emails=row['email'];
        $mail->AddAddress($u);

        $mail->Subject = trim("Pssword");
        $mail->MsgHTML($message);
        try {
          $mail->send();
          $msg = "An email has been sent for verfication";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
    echo "<script type='text/javascript'>alert('Your Password is sent to Your Registered E-mail Address(Check Spam Folder Also');</script>";
	header("Refresh:0; url=index.php");
}
else{
echo "<script type='text/javascript'>alert('Username Not Found');</script>";
header("Refresh:0; url=index.php");
}
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/cannabis.png"/>
    <title>LogIn</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}
  input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}
</style>
</head>
<body>
  <div class="wrapper">
    <form class="form-signin" method="POST">       
      <h2 class="form-signin-heading">Enter Your Registered Email Address</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>   
    </form>
  </div>
</body>
</html>