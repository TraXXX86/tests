<?php

require ("generic_dao.php");

/**
 * Add new building into DB (draft)
 * @param $name
 * @param $address
 * @return bool|mysqli_result
 */
function persistNewBuilding($name, $address)
{
    try{
        $conn = connectDB();
        $sql = "INSERT INTO testphp.building (name, address) VALUES ('".$name."', '".$address."');";
        return mysqli_query($conn, $sql);
    } finally {
        mysqli_close($conn);
    }
    return true;
}
