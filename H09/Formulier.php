
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="response.php"method="post" >
    <h1>Voeg je broodje toe!</h1>
    <div class="cointainer1">
    <p>Broodje</p><input type="text" name="broodje" ></br>
    <p>Meel</p><input type="text" name="meel" ></br>
    <p>Vrom</p><input type="text" name="vorm" ></br>
    <p>Gewicht</p><input type="text" name="gewicht" ></br>
<input type="submit" name="Submit">

    </div>
</form>
    <style>


        .cointainer1{
            flex-direction: column;
            position: absolute;
            margin-top: 4%;



        }
        .container2{
            margin-top: 7%;
            display: flex;
            align-items: center;
            position: absolute;
            margin-left: 50%;



        }
        .container3{
            margin-top: 7%;
            display: flex;
            align-items: center;
            position: absolute;
            margin-left: 56.5%;




        }
        .container4{
            margin-top: 7%;
            display: flex;
            align-items: center;
            position: absolute;
            margin-left: 63%;




        }
        .container5{
            margin-top: 7%;
            display: flex;
            align-items: center;
            position: absolute;
            margin-left: 69.5%;




        }
        .text2{
            display: flex;

            margin-left: 57%;
            font-size: 30px;
        }

        h1{
            display: flex;
            position: absolute;
            margin-left: 2%;
        }
        input{
            border-radius: 20px;
            margin-left: 42%;
            height: 20px;
        }
        p{
            margin-left: 42%;
            font-family: "Arial";

        }
        table,td,tr{
            display: flex;
            flex-direction: column;

            border-color: black;
            box-shadow: gray ;

            font-size: 20px;


        }
        td{
            padding: 10px;
            border-style: solid;
            width: 100px;
        }
.one,.two,.three,.four,{
    display: flex;
    position: absolute;
}
    </style>

</body>
</html>


<h1 class="text2">Onze broodjes!</h1>
<div class="container2">

<table>

<?php
$user="wim";
$pass="12localhost3";
try {
    $con = new PDO('mysql:host=localhost;dbname=bakkerijwv;port=3306', $user, $pass);
    foreach($con->query('SELECT * from broodjes') as $row) {
//        print_r($row);

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$query="SELECT * FROM broodjes";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");

$query = "UPDATE broodjes SET idBroodjes='' WHERE idBroodjes=''";
$con->exec($query);


while($row=$stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['idBroodjes'] . "</td>";
    echo "</tr>";
}
?>
</table>
</div>
<div class="container3">

    <table>
        <?php
        $query="SELECT * FROM broodjes";
        $stmt=$con->prepare($query)or die("error1.");
        $stmt->execute() or die ("error 2.");

        while($row=$stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['meel'] . "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</div>
<div class="container4">

    <table>
        <?php
        $query="SELECT * FROM broodjes";
        $stmt=$con->prepare($query)or die("error1.");
        $stmt->execute() or die ("error 2.");

        while($row=$stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['vorm'] . "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</div>
<div class="container5">

    <table>
        <?php
        $query="SELECT * FROM broodjes";
        $stmt=$con->prepare($query)or die("error1.");
        $stmt->execute() or die ("error 2.");

        while($row=$stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['gewicht'] . "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</div>
</html>

