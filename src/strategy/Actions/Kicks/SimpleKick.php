<?php

namespace Strategy\Actions\Kicks;

use Strategy\Actions\IAction;

/**
 * Class SimpleKick
 * @package Strategy\Actions\Kicks
 */
class SimpleKick implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "kicks";
    }
}