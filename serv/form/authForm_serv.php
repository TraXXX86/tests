<?php
session_start();

// Includes
include("../auth.php");

// Check input credentials
if ($_POST['mail'] == '') {
    checkAuthorization('', "Erreur de connexion : Identifiant manquant", "../../gui/auth/authentication.php");
} elseif ($_POST['password'] == '') {
    checkAuthorization('', "Erreur de connexion : Mot de passe manquant", "../../gui/auth/authentication.php");
} else {
    if (isCorrectPassword($_POST['mail'], $_POST['password']) == 1) {
        echo "OK";
        checkAuthorization($_POST['mail'], '', '../../gui/home/index2.php');
    } else {
        checkAuthorization('', "Erreur de connexion : Identifiants inconnus", "../../gui/auth/authentication.php");
    }
}
