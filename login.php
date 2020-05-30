<?php

session_start();
if(isset($_POST['logout'])){
    session_start();
    session_destroy();

    header("location:inde.php");
}
?>

<html>

<head>
<title>  Logged in </title>

</head>
<body>
<form method="post" name="logout">

<input type="submit" name="logout" value="log me out">

</body>



</html>