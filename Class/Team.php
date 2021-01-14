<?php

class Team
{
protected $coach;
protected $teamName;
protected $teamLogo;
protected $players = [];

    public function __construct()
    {
        $namesNumber = count(NAMES)-1;
        $lastnamesNumber = count(SURNAMES)-1;
        $this->coach = NAMES[rand(0, $namesNumber)] . ' ' . SURNAMES[rand(0, $lastnamesNumber)];

        $teamAdjectivesNumber = count(TEAM_ADJECTIVES)-1;
        $teamNounsNumber = count(TEAM_NOUNS)-1;
        $this->teamName = NAMES[rand(0, $teamAdjectivesNumber)] . ' ' . SURNAMES[rand(0, $teamNounsNumber)];

        $randLogoNumber = rand(0,120);
        $this->teamLogo = "./assets/logos/img-$randLogoNumber.svg";

        $playersCountInTeam = rand(5,8);
        for ($x=0; $x<$playersCountInTeam; $x++){
            $this->players[] = new Player();
        }
    }

    public function getCoachName()
    {
        return $this->coach;
    }

    public function getTeamName()
    {
        return $this->teamName;
    }

    public function getTeamLogo()
    {
        return $this->teamLogo;
    }

    public function getPlayersArray()
    {
        return $this->players;
    }


}