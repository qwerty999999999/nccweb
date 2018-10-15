<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["usernamea"]);
session_destroy();
header("Location:index.php");
?>
