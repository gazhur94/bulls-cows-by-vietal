<?php

use Interfaces\PlayerInterface;

class CowsBulls
{
    protected $player;

    public function __construct(PlayerInterface $player)
    {
        $this->player = $player;
    }

    public function isStarted()
    {
        return true;
    }

    public function nextStep(Combo $combo): Result
    {
        $reciever = $this->getRecieverPlayer();
        $sendrer = $this->getSenderPlayer();

        $sendrer->attempt($combo);

        $result = new Result($combo, $reciever->getCombo());

        $this->incrementStep();

        return $result;
    }
}