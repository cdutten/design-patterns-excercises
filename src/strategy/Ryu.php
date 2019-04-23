<?php

namespace Strategy;

class Ryu extends Fighter
{
    public function kick(): string
    {
        return $this->name . ": fly kicks his opponent";
    }

    public function roll(): string
    {
        return $this->name . ": fire rolls";
    }
}