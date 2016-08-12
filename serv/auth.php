<?php
// Includes
include __DIR__ . "/../dao/auth_dao.php";

/**
 * Check if mail/password is authorized
 * @param $mail
 * @param $password
 * @return bool true if authorized, else false
 */
function isCorrectPassword($mail, $password)
{
    $result = getUserFromDB($mail, $password);

    if (mysqli_num_rows($result) == 1) {
        return true;
    }
    return false;
}

/**
 * Check if user is authentificated
 * @param $mail
 */
function isAuthorized($mail)
{
    // If user is not authentifiated, go back to index
    if (!isset($mail) || is_null($mail) || $mail === '') {
        checkAuthorization('', 'Veuillez vous authentifier', '../auth/authentication.php');
    }
}

/**
 * @param $mail
 * @param $errorString
 * @param $escapePagePath
 */
function checkAuthorization($mail, $errorString, $escapePagePath)
{
    $_SESSION['mail'] = $mail;
    $_SESSION['erreur'] = $errorString;
    header('Location: ' . $escapePagePath);
    exit();
}
