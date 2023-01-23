<?php
//$a=12;
//setcookie("a", $a,time()+3600);
//echo $a."<br>";

session_start();
$_SESSION['user']='jan';
echo $_SESSION['user'];
?>

<p><a href="varb.php">Naar varb.php</a> </p>
