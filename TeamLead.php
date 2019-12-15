<?php
require_once('./PhraseGenerator.php');
require_once('./Mood/GoodMood.php');
require_once('./Mood/NormalMood.php');
require_once('./Mood/BadMood.php');
require_once('./Mood/WorstMood.php');

/**
 * Class PraiseManager - corresponds T-70
 */
class TeamLead
{
    private int $currentMood = 0;

    private array $availableMoodStates = [];

    public function __construct(array $moodStates)
    {
        $this->setAvailableMoodStates($moodStates);
    }

    public function setAvailableMoodStates(array $availableMoodStates)
    {
        $this->availableMoodStates = $availableMoodStates;
    }

    public function setMood(int $newMood)
    {
        if (in_array($newMood, $this->availableMoodStates)) {
            $this->currentMood = $newMood;
        }
    }

    public function changeMood(int $value)
    {
        switch ($this->currentMood) {
            case MoodState::GOOD:
                $this->setMood((new GoodMood())->changeMood($this->currentMood, $value));
                break;
            case MoodState::NORMAL:
                $this->setMood((new NormalMood())->changeMood($this->currentMood, $value));
                break;
            case MoodState::BAD:
                $this->setMood((new BadMood())->changeMood($this->currentMood, $value));
                break;
            case MoodState::WORST:
                $this->setMood((new WorstMood())->changeMood($this->currentMood, $value));
                break;
        }

        echo PhraseGenerator::generate($this->currentMood);
    }
}