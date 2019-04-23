<?php

namespace Tests\Unit\Strategy;

use PHPUnit\Framework\TestCase;
use Strategy\ChenLi;

class ChenLiTest extends TestCase
{
    public function testJump()
    {
        $chenLi = new ChenLi('ChenLi');
        $this->assertSame('ChenLi: lighting jump', $chenLi->jump());
    }

    public function testRoll()
    {
        $chenLi = new ChenLi('ChenLi');
        $this->assertSame('ChenLi: fire rolls', $chenLi->roll());
    }
}
