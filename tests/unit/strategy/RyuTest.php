<?php
namespace Tests\Unit\Strategy;

use PHPUnit\Framework\TestCase;
use Strategy\Ryu;

class RyuTest extends TestCase
{
    public function testKick()
    {
        $ryu = new Ryu('Ryu');
        $this->assertSame('Ryu: fly kicks his opponent', $ryu->kick());
    }

    public function testRoll()
    {
        $ryu = new Ryu('Ryu');
        $this->assertSame('Ryu: fire rolls', $ryu->roll());
    }
}
