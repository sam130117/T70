<?php
require_once('./Mood/Mood.php');

class GoodMood implements Mood
{
    public function changeMood(int $currentState, int $value): ?int
    {
        if ($currentState == MoodState::GOOD && $value == WorkState::SUCCESS) {
            Event::trigger('praiseIncrease');
            return MoodState::GOOD;
        }
        if ($currentState == MoodState::GOOD && $value == WorkState::FAIL) {
            return MoodState::NORMAL;
        }

        return null;
    }
}