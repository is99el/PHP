<?php
session_start();
if($_SESSION["user"] && $_SESSION["user"]["rol"]=="Admin"){
    echo "<h1>Welkom ".$_SESSION["user"]. " op het admingedeelte van de website";
}else{
    header('location: login.php');
}