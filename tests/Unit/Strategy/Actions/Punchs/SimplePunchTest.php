<?php

namespace Tests\Unit\Strategy\Actions\Punchs;

use Strategy\Actions\Punchs\SimplePunch;
use PHPUnit\Framework\TestCase;

class SimplePunchTest extends TestCase
{
    public function testDo()
    {
        $this->assertSame('punches', (new SimplePunch())->do());
    }
}
