<?php

namespace Strategy;

abstract class Fighter
{
    /**
     * @var string $name
     */
    protected $name;

    /**
     * Fighter constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Kicks an opponent
     *
     * @return string
     */
    public function kick(): string
    {
        return $this->name . ": kicks the opponent";
    }

    /**
     * Punches an opponent
     *
     * @return string
     */
    public function punch(): string
    {
        return $this->name . ": punchs the opponent";
    }

    /**
     * Jump
     *
     * @return string
     */
    public function jump(): string
    {
        return $this->name . ": jumps";
    }

    /**
     * Roll
     *
     * @return string
     */
    public function roll(): string
    {
        return $this->name . ": rolls";
    }
}
