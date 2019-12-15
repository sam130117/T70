<?php
require_once('./Watchers/Manager.php');


/**
 * Class PraiseManager - corresponds T-1000
 */
class ReprimandManager extends Manager
{
    public function __construct()
    {
        Event::listen('reprimandIncrease', function (){
            $this->increase();
        });
    }
}