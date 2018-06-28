<?php

use Interfaces\PlayerInterface;

class Player implements PlayerInterface
{
    protected $name;

    protected $history;

    protected $combo;

    public function __construct(string $name, Combo $combo)
    {
        $this->name = $name;
        $this->history = new History();
        $this->combo = $combo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function attempt(Combo $attempt)
    {
        $this->history->push($attempt);
    }

    public function getHistory()
    {
        return $this->history->get();
    }

    public function getCombo()
    {
        return $this->combo;
    }
}