<?php

namespace unit\strategy\Actions\Jumps;

use Strategy\Actions\Jumps\LightningJump;
use PHPUnit\Framework\TestCase;

class LightningJumpTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('lightning jumps', (new LightningJump())->do());
    }
}
