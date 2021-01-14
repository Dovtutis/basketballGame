<?php

class Match
{
    private $teams = [];
    private $date;
    private $time;
    private $location;

public function __construct()
{
    $this->teams[] =
        [
          'team1' => new Team(),
          'team2' => new Team
        ];

    $randomMonth = rand(1,12);
    $randomDay = rand(1,31);
    $this->date = "2020-$randomMonth-$randomDay";

    $randomHour = rand(15,23);
    $this->time = "$randomHour:00";

    $locationsNumber = count(LOCATIONS)-1;
    $this->location = LOCATIONS[rand(0, $locationsNumber)];
}

    public function getTeams()
    {
        return $this->teams;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getLocation()
    {
        return $this->location;
    }

}

