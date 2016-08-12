<?php

require_once ("generic_dao.php");

/**
 * Get User from DB
 * @param $mail
 * @param $password
 * @return request result
 */
function getUserFromDB($mail, $password)
{
    try{
        $conn = connectDB();
        $sql = "SELECT mail FROM user WHERE mail = '$mail' AND password = '$password'";
        return mysqli_query($conn, $sql);
    } finally {
        mysqli_close($conn);
    }
}