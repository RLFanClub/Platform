<?php

namespace RLFanClub;

use RLFanClub\Personnel\Team;

class Matchup
{
    private int $orangeScore;
    private int $blueScore;
    public function __construct (private readonly int $firstTo, private Team $blueTeam, private Team $orangeTeam) {

    }
    public function getBestOf(): int {
        return ($this->firstTo - 1) + $this->firstTo;
    }
    public function submitGame() {

    }
    public function getBlueTeam(): Team {
        return $this->blueTeam;
    }
    public function getOrangeTeam(): Team {
        return $this->orangeTeam;
    }
}