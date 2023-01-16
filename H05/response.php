<?php

////1
//print_r($_GET);

//2,3
//if ($_POST['voornaam']==''){
//    echo 'je moet een voornaam invullen</br>';
//    echo "<a href=\"formulier.html\">terug naar het formulier</br></a>";
//};
//if ($_POST['wachtwoord']==''){
//    echo 'je moet een wachtwoord invullen</br>';
//    echo "<a href=\"formulier.html\">terug naar het formulier</br></a>";
//};
//if ($_POST['email']==''){
//    echo 'je moet een email invullen</br>';
//    echo "<a href=\"formulier.html\">terug naar het formulier</br></a>";
//};
//if ($_POST['adres']==''){
//    echo 'je moet een adres invullen</br>';
//    echo "<a href=\"formulier.html\">terug naar het formulier</br></a>";
//};

//4,5
//////echo "<img src='img/".$_POST['apen'].".jpg'>";
//print_r($_POST['apen']);
//foreach ($_POST['apen'] as $aap){
//    echo  "<img src='img/".$aap.".jpg'>";
//}

//6
if ($_POST['email']==='piet@worldonline.nl'&& $_POST['wachtwoord']==='doetje123'){
    echo 'Welkom';
}if ($_POST['email']==='klaas@carpets.nl'&& $_POST['wachtwoord']==='snoepje777'){
    echo 'Welkom' ;
}if ($_POST['email']==='truushendriks@wegweg.nl'&&$_POST['wachtwoord']==='arkiearkie201') {
    echo 'Welkom';
}else{
    echo 'Sorry,Geen toegang';
}