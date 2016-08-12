<?php

/**
 * Created by PhpStorm.
 * User: mjaouen
 * Date: 12/08/2016
 * Time: 09:28
 */
class Building
{
    private $name;
    private $address;

    /**
     * Building constructor.
     * @param $name
     * @param $address
     */
    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


}