<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Player;
use CowsBulls;
use Combo;

class CowsBullsTest extends TestCase
{
    protected $game;

    protected $andrusha;

    public function setUp()
    {
        $combo = new Combo(1234);
        $this->andrusha = new Player('Andrusha', $combo);
        $this->game = new CowsBulls($this->andrusha);
    }

    /** @test */
    public function is_game_started_successfully()
    {
        $status = $this->game->isStarted();

        $this->assertEquals(true, $status);
    }

    /** @test */
    public function is_player_can_make_his_step()
    {
        $combo = new Combo(1234);

        $this->andrusha->attempt($combo);

        $firstStep = $this->andrusha->getHistory()[0];

        $this->assertEquals($combo, $firstStep);
    }

    /** @test */
    public function it_returns_answer_for_attepmt()
    {
        $result = $this->game->nextStep(new Combo(1256));

        $this->assertEquals(2, $result->getBulls());
        $this->assertEquals(0, $result->getCows());
    }
}