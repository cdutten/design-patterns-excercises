<?php

namespace Strategy;

class ChenLi extends Fighter
{
    public function jump(): string
    {
        return $this->name . ": lighting jump";
    }

    public function roll(): string
    {
        return $this->name . ": fire rolls";
    }
}