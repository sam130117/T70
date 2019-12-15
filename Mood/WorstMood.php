<?php
require_once('./Mood/Mood.php');

class WorstMood implements Mood
{
    public function changeMood(int $currentState, int $value): ?int
    {
        if ($currentState == MoodState::WORST && $value == WorkState::SUCCESS) {
            return MoodState::BAD;
        }
        if ($currentState == MoodState::WORST && $value == WorkState::FAIL) {
            Event::trigger('reprimandIncrease');

            return MoodState::WORST;
        }

        return null;
    }
}