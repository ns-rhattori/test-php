<?php

class DepricateFunctions
{
    public function DepricateFunctions()
    {}
    public function isMatch($subject)
    {
        return ereg_match('[a-z0-9].', $subject);
    }

    public function nonStaticMethod()
    {
        return 1;
    }
}