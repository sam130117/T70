<?php
require_once('./Watchers/Manager.php');


/**
 * Class PraiseManager - corresponds T-1001
 */
class PraiseManager extends Manager
{
    public function __construct()
    {
        Event::listen('praiseIncrease', function (){
            $this->increase();
        });
    }
}