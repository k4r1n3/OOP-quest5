<?php

require_once 'vehicle.php';
require_once 'lightableInterface.php';

    class Bicycle extends Vehicle implements lightableInterface
    {
        public function switchOn(): bool
        {
        if ($currentSpeed > 10) {
            return true;
        }
    }

        public function switchOff(): bool
        {
            return false;
        }
    }