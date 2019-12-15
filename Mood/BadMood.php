<?php
require_once('./Mood/Mood.php');

class BadMood implements Mood
{
    public function changeMood(int $currentState, int $value): ?int
    {
        if ($currentState == MoodState::BAD && $value == WorkState::SUCCESS) {
            return MoodState::NORMAL;
        }
        if ($currentState == MoodState::BAD && $value == WorkState::FAIL) {
            return MoodState::WORST;
        }

        return null;
    }
}