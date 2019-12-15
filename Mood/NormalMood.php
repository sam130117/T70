<?php
require_once('./Mood/Mood.php');

class NormalMood implements Mood
{
    public function changeMood(int $currentState, int $value): ?int
    {
        if ($currentState == MoodState::NORMAL && $value == WorkState::SUCCESS) {
            return MoodState::GOOD;
        }
        if ($currentState == MoodState::NORMAL && $value == WorkState::FAIL) {
            return MoodState::BAD;
        }

        return null;
    }
}