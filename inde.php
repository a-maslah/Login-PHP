<?php
session_start();

$conn = new PDO('mysql:dbname=login','root','');

if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->prepare("SELECT COUNT('id') FROM 'test' WHERE 'username'='$username' AND 'password'= '$password'");
$query->execute();
$count = $query->fetchColumn();

if($count == "1"){
    $_SESSION['username'] = $username;
    header("location:login.php");
}
}



?>

<html>
<head>
<title> login form PHP </title>
</head>
<body>
<form method="post" name="login">
   <input type="text" name="username">
   <input type="password" name="password">
   <input type="submit" name="login" value= "log me IN !">
   </form>

</body>

</html>