<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Combo;

class ComboTest extends TestCase
{
    /** @test */
    public function it_throw_error_on_invalid_combo()
    {
        $this->expectException('InvalidArgumentException');

        $combo = new Combo(12);
    }
}