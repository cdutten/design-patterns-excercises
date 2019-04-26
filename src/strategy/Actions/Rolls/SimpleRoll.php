<?php

namespace Strategy\Actions\Rolls;

use Strategy\Actions\IAction;

/**
 * Class SimpleRoll
 * @package Strategy\Actions\Rolls
 */
class SimpleRoll implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "rolls";
    }
}