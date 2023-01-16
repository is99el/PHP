<?php
function emailCheck()
{
$user="Emailuser";
$pass="123localhost";
try {
    $conn = new PDO('mysql:host=localhost;dbname=login;port=3306', $user, $pass);
    foreach($conn->query('SELECT * from gegevens') as $row) {
//        print_r($row);

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}



    $sql = "SELECT Email,Wachtwoord FROM gegevens WHERE Email='piet@worldonline.nl'&& Wachtwoord='doetje123'";
    $result = $conn->query($sql);

    if ($result) {
       echo 'logged in';
    } else {
        echo 'try again';
    }

}
emailCheck();

?>





