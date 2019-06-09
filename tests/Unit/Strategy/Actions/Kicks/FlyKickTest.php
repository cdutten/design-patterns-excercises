<?php

namespace Tests\Unit\Strategy\Actions\Kicks;

use PHPUnit\Framework\TestCase;
use Strategy\Actions\Kicks\FlyKick;

class FlyKickTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('fly kicks', (new FlyKick())->do());
    }
}
