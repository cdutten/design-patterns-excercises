<?php

namespace Tests\Unit\Strategy\Actions\Rolls;

use Strategy\Actions\Rolls\FireRoll;
use PHPUnit\Framework\TestCase;

class FIreRollTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('fire rolls', (new FireRoll())->do());
    }
}
