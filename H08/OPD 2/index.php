<html xmlns="http://www.w3.org/1999/html">
<body>

<form action="search.php" method="post">
    Search: <input style="width:200px" type="text" name="search" />
    <input type="submit" value="Submit" name="submit" </br>
</form>
</body>
</html>

<?php



$user = "autooccasions";
$pass = "12localhost3";
try {
    $con = new PDO('mysql:host=localhost;dbname=autos;port=3306', $user, $pass);
    foreach ($con->query('SELECT * from auto') as $row) {
//        print_r($row);

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$query = "SELECT * FROM auto";
$stmt = $con->prepare($query) or die("error1.");
$stmt->execute() or die ("error 2.");

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['merk']."</br>" . "</td>";
    echo "</tr>";
}



include_once ('programmaAuto.php');
include_once ('auto.php');


$autoprogramma= new programmaAuto();

    $autoprogramma->setMerk("");
    $autoprogramma->setType('');

    foreach($autoprogramma->getprogrammaAuto() as $p) {
    echo $p . "<br>";
    }

$nieuwauto = new auto();
$nieuwauto ->setNaam('');
$nieuwauto->voegAutoToe($nieuwauto);



foreach($nieuwauto->getAutos() as $auto) {
    echo $auto->getNaam() . "-";
}



