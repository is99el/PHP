<?php

$user="emailuser";
$pass="123localhost";
try {
    $con = new PDO('mysql:host=localhost;dbname=login;port=3306', $user, $pass);
    foreach($con->query('SELECT * from gegevens') as $row) {
//        print_r($row);

    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$email=trim($_POST['email']);
$password=trim($_POST['wachtwoord']);
//prepare the statement
$stmt = $con->prepare("SELECT * FROM gegevens WHERE Email=? AND Wachtwoord=?");
//execute the statement
$stmt->execute([$email, $password]);
//fetch result
$user = $stmt->fetch();
if ($user) {
    echo 'Welkom';
} else {
    echo 'Sorry,geen toegang!';

}




?>





