<?php

class SimpleFactory
{
    public function createBicycle($subject)
    {
        if (ereg_match('/bicycle/', $subject)) {
            return new Bicycle();    
        }
        return new Car();
    }
}