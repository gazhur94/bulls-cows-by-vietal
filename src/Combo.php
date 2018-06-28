<?php

class Combo
{
    protected $combo;

    public function __construct(int $combo)
    {  
        if (strlen((string) $combo) !== 4) {
            throw new InvalidArgumentException("Wrong combination was represented");
        }

        $this->combo = $combo;
    }
}