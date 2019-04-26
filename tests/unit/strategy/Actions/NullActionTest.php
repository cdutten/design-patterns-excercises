<?php

namespace unit\strategy\Actions;

use Strategy\Actions\NullAction;
use PHPUnit\Framework\TestCase;

class NullActionTest extends TestCase
{

    public function testDo()
    {
        $this->assertSame('', (new NullAction())->do());
    }
}
