<?php

namespace RLFanClub\Swiss;

use RLFanClub\Matchup;

class SwissStage
{
    private array $matchups;
    public function __construct(private readonly SwissRound $round) {
        $this->matchups = [];
    }

    public function addMatchup(Matchup $matchup): void {
        $this->matchups[] = $matchup;
    }

    public function getRound(): SwissRound
    {
        return $this->round;
    }
}