<?php
require 'Model.php';

class Tester extends Model
{
    public function __construct()
    {
        $this->call();
    }
}

new Tester();
