<?php

namespace Strategy\Actions\Jumps;

use Strategy\Actions\IAction;

/**
 * Class LightningJump
 * @package Strategy\Actions\Jumps
 */
class LightningJump implements IAction
{

    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "lightning jumps";
    }
}