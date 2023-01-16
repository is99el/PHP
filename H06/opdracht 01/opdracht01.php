<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
    <style>
        table,td,tr{
            border-style: solid;
            border-collapse: collapse;
            border-color: blue;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>

<table>

    <?php

$user= 'schooluser';
$pass= '2004azaaouaj';


try {
    $conn = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', $user, $pass);
    foreach($conn->query('SELECT * from cursist') as $row) {
//        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$query="SELECT * FROM cursist";
$stmt=$conn->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");

while($row=$stmt->fetch()){
    echo "<tr>";
    echo "<td>" .$row['cursistnr']."</td>";
    echo "<td>" .$row['naam']."</td>";
    echo "<td>" .$row['roepnaam']."</td>";
    echo "<td>" .$row['straat']."</td>";
    echo "<td>" .$row['postcode']."</td>";
    echo "<td>" .$row['plaats']."</td>";
    echo "<td>" .$row['geslacht']."</td>";
    echo "<td>" .$row['geb_datum']."</td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>























