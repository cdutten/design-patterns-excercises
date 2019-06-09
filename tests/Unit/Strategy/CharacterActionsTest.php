<?php

namespace Tests\Unit\Strategy;

use Strategy\Actions\IAction;
use Strategy\Actions\Jumps\SimpleJump;
use Strategy\Actions\NullAction;
use Strategy\CharacterActions;
use PHPUnit\Framework\TestCase;
use \Mockery;

class CharacterActionsTest extends TestCase
{

    public function testDoPrimaryAction()
    {
        $mock = $this->getActionMock();
        $nullActionMock = $this->getNullActionMock();

        $characterActions = new CharacterActions($mock, $nullActionMock, $nullActionMock, $nullActionMock);

        $this->assertSame('action', $characterActions->doPrimaryAction());
        $this->assertSame('', $characterActions->doSecondaryAction());
        $this->assertSame('', $characterActions->doThirdAction());
        $this->assertSame('', $characterActions->doFourthAction());
    }

    public function testDoSecondaryAction()
    {
        $mock = $this->getActionMock();
        $nullActionMock = $this->getNullActionMock();

        $characterActions = new CharacterActions($nullActionMock, $mock, $nullActionMock, $nullActionMock);

        $this->assertSame('', $characterActions->doPrimaryAction());
        $this->assertSame('action', $characterActions->doSecondaryAction());
        $this->assertSame('', $characterActions->doThirdAction());
        $this->assertSame('', $characterActions->doFourthAction());
    }

    public function testDoThirdAction()
    {
        $mock = $this->getActionMock();
        $nullActionMock = $this->getNullActionMock();

        $characterActions = new CharacterActions($nullActionMock, $nullActionMock, $mock, $nullActionMock);

        $this->assertSame('', $characterActions->doPrimaryAction());
        $this->assertSame('', $characterActions->doSecondaryAction());
        $this->assertSame('action', $characterActions->doThirdAction());
        $this->assertSame('', $characterActions->doFourthAction());
    }

    public function testDoFourthAction()
    {
        $mock = $this->getActionMock();
        $nullActionMock = $this->getNullActionMock();

        $characterActions = new CharacterActions($nullActionMock, $nullActionMock, $nullActionMock, $mock);

        $this->assertSame('', $characterActions->doPrimaryAction());
        $this->assertSame('', $characterActions->doSecondaryAction());
        $this->assertSame('', $characterActions->doThirdAction());
        $this->assertSame('action', $characterActions->doFourthAction());
    }

    /**
     * @return IAction
     */
    private function getActionMock(): IAction
    {
        $mock = Mockery::mock(IAction::class);
        $mock->shouldReceive('do')
            ->andReturn('action');
        return $mock;
    }

    /**
     * @return IAction
     */
    private function getNullActionMock(): IAction
    {
        $nullActionMock = Mockery::mock(IAction::class);
        $nullActionMock->shouldReceive('do')
            ->andReturn('');
        return $nullActionMock;
    }
}
