<?php

namespace Strategy\Actions\Jumps;

use Strategy\Actions\IAction;

/**
 * Class SimpleJump
 * @package Strategy\CharacterActions\Jumps
 */
class SimpleJump implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "jumps";
    }
}