<?php


$con = new PDO("mysql:host=localhost;dbname=autos",'autooccasions','12localhost3');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `auto` WHERE merk= '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
<!--		<br><br><br>-->
		<table>
			<tr>
			<th>Description</th>
			</tr>

			<tr>
                <br>
                <td><p>Merk: <?php echo $row->merk; ?></p><br></td>
                <td><p>Type: <?php echo $row->typee; ?></p><br></td>
                <td><p>Prijs: <?php echo $row->prijs; ?></p><br></td>
			</tr>

		</table>
<?php
	}


		else{
			echo "Auto bestaat niet";
		}


}

?>
