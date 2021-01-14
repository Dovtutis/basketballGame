<?php

class Player
{
    protected $name;
    protected $lastname;
    protected $height;
    protected $position;
    protected $number;

public function __construct()
{
    $namesNumber = count(NAMES)-1;
    $this->name = NAMES[rand(0, $namesNumber)];

    $lastnamesNumber = count(SURNAMES)-1;
    $this->lastname = SURNAMES[rand(0, $lastnamesNumber)];

    $this->height = rand(177, 230);

    $positionsNumber = count(POSITION_TYPES)-1;
    $this->position = POSITION_TYPES[rand(0, $positionsNumber)];

    $this->number = rand(0,99);
}

    public function getName()
    {
        return $this->name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getNumber()
    {
        return $this->number;
    }

}

