<?php

////1
//print_r($_GET);

//2,3
//if ($_POST['']==''){
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
$username=$_POST['email'];
$password=$_POST['wachtwoord'];

if ($username == 'piet@worldonline.nl' && $password == 'doetje123' || $username == "klaas@carpets.nl" && $password == "snoepje777" || $username == "truushendriks@wegweg.nl" && $password == "arkiearkie201") {
    echo "Welkom, je bent ingelogd!";
} else {
    echo "Sorry, geen toegang :(";
}


//7

//function logEmail(){
//    if ($_POST['email'] === 'piet@worldonline.nl' && $_POST['wachtwoord'] === 'doetje123') {
//        return true;
//    }elseif ($_POST['email'] !== 'piet@worldonline.nl' && $_POST['wachtwoord'] !== 'doetje123'){
//        return false;
//    }
//
//}
//
//if(logEmail($_POST['email']&&$_POST['wachtwoord']==true)){
//    echo 'Logged in!';
//}else{
//    echo 'Try again';
//}
