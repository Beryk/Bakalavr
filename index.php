<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car saloon</title>
<link rel="stylesheet" type="text/css" href="Mycss.css">

</head>

<body>

<div class="logpw">

<form method="post" action="main.php">
Login: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="login" />
<br /><br />
Password: <input type="password" name="password"  /><br />

<div class="signin"><br />

<input type="submit" name="signin" value="Sign In">
</div>
</form>
</div>
<?php

if (isset($_POST['signin'])) {
session_start();
require('setup.php');
$login = $_POST['login'];
$pass = $_POST['password'];}
if ($result) {echo "connection established";}

?>

</body>
</html>