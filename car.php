<?php

require_once 'vehicle.php';
require_once 'lightableInterface.php';

class Car extends Vehicle implements lightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
}


