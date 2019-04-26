<?php

namespace unit\strategy\Actions\Rolls;

use Strategy\Actions\Rolls\FIreRoll;
use PHPUnit\Framework\TestCase;

class FIreRollTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('fire rolls', (new FIreRoll())->do());
    }
}
