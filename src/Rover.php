<?php

namespace MR;


class Rover
{
    /**
     * @var Point
     */
    private $point;

    /**
     * @var FacingDirection
     */
    private $facingDirection;

    /**
     * Rover constructor.
     *
     * @param Point           $point
     * @param FacingDirection $facingDirection
     */
    public function __construct(
        Point $point,
        FacingDirection $facingDirection
    ) {
        $this->point = $point;
        $this->facingDirection = $facingDirection;
    }

    public function moveNorth()
    {
        $this->point->setY(($this->point->getY() + 1) % Point::GRID_LIMIT);
    }

    public function moveSouth()
    {
        $this->point->setY(($this->point->getY() - 1) % Point::GRID_LIMIT);
    }

    public function moveEast()
    {
        $this->point->setX(($this->point->getX() + 1) % Point::GRID_LIMIT);
    }

    public function moveWest()
    {
        $this->point->setX(($this->point->getX() - 1) % Point::GRID_LIMIT);
    }

    public function faceWest()
    {
        $this->facingDirection->setDirection(FacingDirection::WEST);
    }

    public function faceEast()
    {
        $this->facingDirection->setDirection(FacingDirection::EAST);
    }

    public function faceNorth()
    {
        $this->facingDirection->setDirection(FacingDirection::NORTH);
    }

    public function faceSouth()
    {
        $this->facingDirection->setDirection(FacingDirection::SOUTH);
    }

    /**
     * @return Point
     */
    public function getCurrentPoint()
    {
        return $this->point;
    }

    /**
     * @return FacingDirection
     */
    public function getFacingDirection()
    {
        return $this->facingDirection;
    }
}
