<?php

namespace Tests\Unit\Strategy\Actions\Rolls;

use Strategy\Actions\Rolls\SimpleRoll;
use PHPUnit\Framework\TestCase;

class SimpleRollTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('rolls', (new SimpleRoll())->do());
    }
}
