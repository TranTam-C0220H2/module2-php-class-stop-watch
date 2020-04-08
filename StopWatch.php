<?php


class StopWatch
{
    public $startTime;
    public $endTime;

    public function __construct()
    {
        $this->startTime = microtime(true);
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        $this->endTime = microtime(true);
    }

    public function getElapsedTime()
    {
        return $this->getEndTime() - $this->getStartTime();
    }
}