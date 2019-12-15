<?php

interface Mood
{
    public function changeMood(int $state, int $value): ?int;
}