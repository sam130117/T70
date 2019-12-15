<?php
require_once('./Enums/WorkState.php');

class WorkStates
{
    private array $states;

    public function __construct()
    {
        $this->states = [WorkState::FAIL, WorkState::SUCCESS];
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