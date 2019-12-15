<?php

class PhraseGenerator
{
    public static function generate(int $moodState): string
    {
        switch ($moodState) {
            case MoodState::GOOD:
                return 'Great job!';
            case MoodState::NORMAL:
                return 'Good job!';
            case MoodState::BAD:
                return 'Try harder!';
            case MoodState::WORST:
                return 'I am very disappointed!';
            default:
                return '';
        }
    }
}