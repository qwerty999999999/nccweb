<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Control Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
   <style type="text/css">
    
*,
*::after,
*::before {
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
}
body {
  font-size: 1.7rem;
  font-family: 'Nunito', sans-serif;
  color: #fff;
  background-color: #39393a;
}
a {
  text-decoration: none;
}

section {
  width: 100%;
  height: 100%;
  display: table;
}
section .center {
  display: table-cell;
  height: 300px;
  vertical-align: middle;
  text-align: center;
}
.blue {
  background-color: #809bce;
}
.orange {
  background-color: #e4b363;
}
.pink {
  background-color: #f07d5a;
}
.Btn {
  position: relative;
  display: inline-block;
  width: 200px;
  height: 60px;
  border-radius: 50em;
  margin: 10px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.7), inset 0 3px 0 rgba(255,255,255,0.2);
}
.Btn::before {
  content: attr(data-content);
  width: 140px;
  height: 60px;
  line-height: 60px;
  background-color: #e8e9eb;
  border-radius: 0.25em;
  left: calc(50% - 70px);
}
.Btn::after {
  content: '';
  border: 10px solid transparent;
  left: calc(50% - 10px);
}
.Btn:hover em {
  top: -100%;
}
.Btn:hover i {
  top: 0%;
}
span,
em,
i {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  color: #fff;
}
span {
  overflow: hidden;
}
em,
i {
  transition: top, 0.3s;
}
em {
  font-style: normal;
  top: 0;
  line-height: 60px;
}
i {
  top: 100%;
  margin-top: 22px;
}
.Btn-Up::before {
  bottom: 90px;
}
.Btn-Up::after {
  border-top-color: #e8e9eb;
  bottom: 70px;
}
.Btn-Up::before,
.Btn-Up::after {
  margin-bottom: 10px;
  transition: opacity 0.3s, margin-bottom 0.3s, visibility 0.3s;
}
.Btn-Up:hover::before,
.Btn-Up:hover::after {
  margin-bottom: 0px;
}
.Btn-Down::before {
  top: 90px;
}
.Btn-Down::after {
  border-bottom-color: #e8e9eb;
  top: 70px;
}
.Btn-Down::before,
.Btn-Down::after {
  margin-top: 10px;
  transition: opacity 0.3s, margin-top 0.3s, visibility 0.3s;
}
.Btn-Down:hover::before,
.Btn-Down:hover::after {
  margin-top: 0px;
}
.Btn::before,
.Btn::after {
  position: absolute;
  color: #000;
  opacity: 0;
  visibility: hidden;
}
.Btn:hover::before,
.Btn:hover::after {
  opacity: 1;
  visibility: visible;
}
   </style>
</head>

<body>
  <section>
    <div class="center">
	      	<div class="Btn Btn-Down blue" data-content="Click To EDIT" data-color="#E4B363">
            <a href="editmorning.php">
              <span>
                  <em>MORNING</em>
                  <i aria-hidden="true" class="fa fa-user fa-lg"></i>				
              </span>
            </a>
      </div>
      <div class="Btn Btn-Up orange" data-content="Click To EDIT">
            <a href="editevening.php">
              <span>
                  <em>EVENING</em>
                  <i aria-hidden="true" class="fa fa-cloud-download fa-lg"></i>				
              </span>
            </a>
      </div>
      <div class="Btn Btn-Down pink" data-content="Click To GO BACK!">
            <a href="admin.php">
              <span>
                  <em>BACK</em>
                  <i aria-hidden="true" class="fa fa-wrench fa-lg"></i>
              </span>
            </a>
      </div>
    </div>
  </section>
</body>

</html>