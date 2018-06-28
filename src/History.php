<?php

class History
{
    protected $store = [];

    public function push(Combo $combo): void
    {
        $this->store[] = $combo;
    }

    public function get(): array
    {
        return $this->store;
    }
}