<?php

namespace MarsRover;

class MarsRover
{
    private $state;

    private $gps;

    private $obstacles = [];

    private function __construct(GeographicState $state, GPS $gps)
    {
        $this->state = $state;
        $this->gps = $gps;
    }

    public static function fromInitialState(GeographicState $state, GPS $gps)
    {
        return new self($state);
    }

    private function moveLeft()
    {

    }

    private function moveDown()
    {

    }

    private function moveRight()
    {
        $this->currentPosition = Position::fromXAndY(
            $this->currentPosition->x() === Position::MAX_X ? 0 : $this->currentPosition->x() + 1,
            $this->currentPosition->y()
        );
    }

    public function execute($commands)
    {
        foreach ($commands as $command) {
            $this->state = $this->gps->calculateState($this->state, $command);
        }
    }

    public function currentPosition()
    {
        return $this->currentPosition;
    }

    public function direction()
    {
        return $this->direction;
    }

    public function report()
    {
        $this->obstacles[] = $this->currentPosition;
    }

    public function getObstacleReport()
    {
        return $this->obstacles;
    }
}
