<?php

namespace Strategy\Actions;

interface IAction
{
    /**
     * Do the action.
     *
     * @return string
     */
    public function do(): string;
}