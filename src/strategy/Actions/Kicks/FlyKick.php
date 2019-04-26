<?php

namespace Strategy\Actions\Kicks;

use Strategy\Actions\IAction;

/**
 * Class FlyKick
 * @package Strategy\Actions\Kicks
 */
class FlyKick implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "fly kicks";
    }
}