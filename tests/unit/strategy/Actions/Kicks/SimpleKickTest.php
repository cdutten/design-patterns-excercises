<?php

namespace unit\strategy\Actions\Kicks;

use Strategy\Actions\Jumps\SimpleJump;
use PHPUnit\Framework\TestCase;
use Strategy\Actions\Kicks\SimpleKick;

class SimpleKickTest extends TestCase
{
    public function testDo()
    {
        self::assertSame('kicks', (new SimpleKick())->do());
    }
}
