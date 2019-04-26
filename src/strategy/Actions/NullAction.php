<?php

namespace Strategy\Actions;

class NullAction implements IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string
    {
        return '';
    }
}