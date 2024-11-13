<?php

class NullLogger implements Logger
{
    public function log(string $str)
    {
        // do nothing
    }
}