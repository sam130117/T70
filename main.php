<?php
require_once('./MoodStates.php');
require_once('./WorkStates.php');
require_once('./Enums/WorkState.php');
require_once('./TeamLead.php');
require_once('./Mood/Mood.php');
require_once('./Watchers/PraiseManager.php');
require_once('./Watchers/ReprimandManager.php');
require_once('./Event.php');

$moodStates = new MoodStates();
$moodStateList = $moodStates->getStates();

$workStates = new WorkStates();
$workStateList = $workStates->getStates();

$teamLead = new TeamLead($moodStateList);
$praiseManager = new PraiseManager();
$reprimandManager = new ReprimandManager();

echo "\n";

$teamLead->changeMood(WorkState::SUCCESS);

echo "\n\n";

$teamLead->setMood(MoodState::WORST);
$teamLead->changeMood(WorkState::FAIL);
$teamLead->changeMood(WorkState::FAIL);

echo "\n\n";

$praiseNumber = $praiseManager->getNumberOfMoodStates();
echo "Praise number: $praiseNumber\n\n";

$reprimandNumber = $reprimandManager->getNumberOfMoodStates();
echo "Reprimand number: $reprimandNumber\n\n";


