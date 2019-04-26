<?php

namespace Strategy\Actions\Punchs;

use Strategy\Actions\IAction;

/**
 * Class SimplePunch
 * @package Strategy\Actions\Punchs
 */
class SimplePunch implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return "punches";
    }
}
