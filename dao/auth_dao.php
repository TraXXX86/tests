<?php
/**
 * Create database connexion
 * @return mysqli : Connexion object
 */
function connectDB()
{

    $ini = parse_ini_file('../config/config.ini');

    $dbservername = $ini['dbservername'];
    $dbusername = $ini['dbusername'];
    $dbpassword = $ini['dbpassword'];
    $dbname = $ini['dbname'];

    // Create connection
    $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname, 3307);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

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