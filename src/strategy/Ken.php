<?php

namespace Strategy;

class Ken extends Fighter
{
    public function jump(): string
    {
        return $this->name . ": lighting jump";
    }
}