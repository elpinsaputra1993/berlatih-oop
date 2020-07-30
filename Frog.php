<?php

// namespace App;
// include "animal.php";
class Frog extends Animal
{
    public $legs = 4;
    public function __construct()
    {
    }

    public function jump()
    {
        echo "hop hop";
    }
}
