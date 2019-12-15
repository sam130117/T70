<?php

require_once('./Enums/MoodState.php');

class MoodStates
{
    private array $states;

    public function __construct()
    {
        $this->states = [MoodState::GOOD, MoodState::NORMAL, MoodState::BAD, MoodState::WORST];
    }

    public function getStates(): array
    {
        return $this->states;
    }

    public function addState(string $state)
    {
        $this->states[] = $state;
    }
}