<?php

namespace unit\strategy\Actions\Rolls;

use Strategy\Actions\Rolls\SimpleRoll;
use PHPUnit\Framework\TestCase;

class SimpleRollTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('rolls', (new SimpleRoll())->do());
    }
}
