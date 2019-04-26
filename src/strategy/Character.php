<?php

namespace Strategy;

class Character
{
    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var CharacterActions $actions
     */
    protected $actions;

    /**
     * Fighter constructor.
     *
     * @param string $name
     * @param CharacterActions $actions
     */
    public function __construct(string $name, CharacterActions $actions)
    {
        $this->name = $name;
        $this->actions = $actions;
    }

    /**
     * @return string
     */
    public function doPrimaryAction(): string
    {
        return $this->name . ": " . $this->actions->doPrimaryAction();
    }

    /**
     * @return string
     */
    public function doSecondaryAction(): string
    {
        return $this->name . ": " . $this->actions->doSecondaryAction();
    }

    /**
     * @return string
     */
    public function doThirdAction(): string
    {
        return $this->name . ": " . $this->actions->doThirdAction();
    }

    /**
     * @return string
     */
    public function doFourthAction(): string
    {
        return $this->name . ": " . $this->actions->doFourthAction();
    }
}
