<?php

// Includes
include_once __DIR__ . "/../dao/building_dao.php";
include_once __DIR__ . "/../dto/alertMessage.php";

/**
 * Add new building
 * @param $name
 * @param $address
 * @return AlertMessage
 */
function addNewBuilding($name, $address)
{
    if(persistNewBuilding($name, $address))
    {
        return new AlertMessage(AlertMessage::STYLE_SUCCESS, "New Building added");
    }
    return new AlertMessage(AlertMessage::STYLE_ERROR, "Cannot persist new building");
}

/**
 *
 */
function getBuildingList()
{

}