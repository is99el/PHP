<?php
//echo $_COOKIE['a']."<br>";
session_start();
//echo $_SESSION['user'];
?>
<html>



<form action="vara.php" method="post">
      Naam<input type="text" name="naam" placeholder="schrijf je naam in"><br>
      Wachtwoord <input type="password" name="wachtwoord" placeholder="schrijf je wactwoord in"><br>
      <input type="submit" name="sumbitB" >
<p><a href="varb.php">Naar vara.php</a> </p>

</html>

