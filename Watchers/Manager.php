<?php

abstract class Manager
{
    private int $numberOfStates = 0;

    public function increase()
    {
        $this->numberOfStates++;
    }

    public function getNumberOfMoodStates(): int
    {
        return $this->numberOfStates;
    }
}