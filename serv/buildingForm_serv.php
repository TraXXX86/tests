<?php
session_start();

// Includes
include("buildings.php");

if ($_POST['name'] == '' || $_POST['address'] == '') {
    $_SESSION['erreur'] = 'Veuillez renseigner tous les champs';
    header('Location: ../gui/creation/creation.php');
} else {
    $_SESSION['erreur'] = '';
    $feedback = addNewBuilding($_POST['name'],$_POST['address']);
    $_SESSION['feedback'] =  serialize($feedback);
    header('Location: ../gui/creation/recap.php');
}

exit();