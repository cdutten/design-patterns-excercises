<?php

namespace Strategy;

use Strategy\Actions\IAction;

class CharacterActions extends Character
{
    /**
     * @var IAction
     */
    private $primaryAction;
    /**
     * @var IAction
     */
    private $secondaryAction;
    /**
     * @var IAction
     */
    private $thirdAction;
    /**
     * @var IAction
     */
    private $fourthAction;

    /**
     * CharacterActions constructor.
     *
     * @param IAction $primaryAction
     * @param IAction $secondaryAction
     * @param IAction $thirdAction
     * @param IAction $fourthAction
     */
    public function __construct(
        IAction $primaryAction,
        IAction $secondaryAction,
        IAction $thirdAction,
        IAction $fourthAction
    ) {
        $this->primaryAction = $primaryAction;
        $this->secondaryAction = $secondaryAction;
        $this->thirdAction = $thirdAction;
        $this->fourthAction = $fourthAction;
    }

    /**
     * Do primary action
     *
     * @return string
     */
    public function doPrimaryAction(): string
    {
        return $this->primaryAction->do();
    }

    /**
     * Do secondary action
     *
     * @return string
     */
    public function doSecondaryAction(): string
    {
        return $this->secondaryAction->do();
    }

    /**
     * Do third action
     *
     * @return string
     */
    public function doThirdAction(): string
    {
        return $this->thirdAction->do();
    }

    /**
     * Do fourth action
     *
     * @return string
     */
    public function doFourthAction(): string
    {
        return $this->fourthAction->do();
    }
}