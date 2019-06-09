<?php

namespace Tests\Unit\Strategy\Actions\Jumps;

use Strategy\Actions\Jumps\SimpleJump;
use PHPUnit\Framework\TestCase;

class SimpleJumpTest extends TestCase
{
    public function testDo()
    {
        self::assertSame('jumps', (new SimpleJump())->do());
    }
}
