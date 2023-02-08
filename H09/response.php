<?php





//2,3
if ($_POST['broodje']==''){
    echo 'je moet een broodje invullen</br>';
    echo "<a href=\"Formulier.php\">terug naar het formulier</br></a>";
};
if ($_POST['meel']==''){
    echo 'je moet meel invullen</br>';
    echo "<a href=\"Formulier.php\">terug naar het formulier</br></a>";
};
if ($_POST['vorm']==''){
    echo 'je moet de vorm invullen</br>';
    echo "<a href=\"Formulier.php\">terug naar het formulier</br></a>";
};
if ($_POST['gewicht']==''){
    echo 'je moet een gewicht invullen</br>';
    echo "<a href=\"Formulier.php\">terug naar het formulier</br></a>";
}else{
    echo 'je broodje is toegevoegd</br>';
    echo "<a href=\"Formulier.php\">terug naar het formulier</br></a>";
}
