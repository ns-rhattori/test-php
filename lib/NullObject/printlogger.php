<?php

class PrintLogger implements Logger
{
    public function log(string $str)
    {
        echo $str;
    }
}