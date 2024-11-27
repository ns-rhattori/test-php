<?php

class SimpleFactory
{
    public function createBicycle($subject)
    {
        if (ereg_match('/^[a-z0-9].*$/', $subject)) {
            return new Bicycle();    
        }
        return new Car();
    }
}