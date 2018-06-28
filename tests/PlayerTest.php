<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Player;
use Combo;

class PlayerTest extends TestCase
{
    /** @test */
    public function it_can_return_name()
    {
        $playerName = 'TestPlayer';

        $player = new Player($playerName, new Combo(1234));

        $this->assertEquals($playerName, $player->getName());
    }

    /** @test */
    public function it_contains_combination()
    {
        $combo = new Combo(1234);

        $player = new Player('TEst', $combo);

        $this->assertEquals($combo, $player->getCombo());
    }
}
