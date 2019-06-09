<?php

namespace Tests\Unit\Strategy;

use Mockery;
use PHPUnit\Framework\TestCase;
use Strategy\Character;
use Strategy\CharacterActions;

class CharacterTest extends TestCase
{
    public function testDoPrimaryAction()
    {
        $mock = Mockery::mock(CharacterActions::class);
        $mock->shouldReceive('doPrimaryAction')
            ->andReturn('PrimaryAction');
        $character = new Character('CharacterName', $mock);
        $this->assertSame('CharacterName: PrimaryAction', $character->doPrimaryAction());
    }

    public function testDoSecondaryAction()
    {
        $mock = Mockery::mock(CharacterActions::class);
        $mock->shouldReceive('doSecondaryAction')
            ->andReturn('SecondaryAction');
        $character = new Character('CharacterName', $mock);
        $this->assertSame('CharacterName: SecondaryAction', $character->doSecondaryAction());
    }

    public function testDoThirdAction()
    {
        $mock = Mockery::mock(CharacterActions::class);
        $mock->shouldReceive('doThirdAction')
            ->andReturn('ThirdAction');
        $character = new Character('CharacterName', $mock);
        $this->assertSame('CharacterName: ThirdAction', $character->doThirdAction());
    }

    public function testDoFourthAction()
    {
        $mock = Mockery::mock(CharacterActions::class);
        $mock->shouldReceive('doFourthAction')
            ->andReturn('FourthAction');
        $character = new Character('CharacterName', $mock);
        $this->assertSame('CharacterName: FourthAction', $character->doFourthAction());
    }
}
