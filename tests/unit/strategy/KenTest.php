<?php
namespace Tests\Unit\Strategy;

use PHPUnit\Framework\TestCase;
use Strategy\Ken;

class KenTest extends TestCase
{
    public function testJump()
    {
        $ken = new Ken('Ken');
        $this->assertSame('Ken: lighting jump', $ken->jump());
    }
}
