<?php

namespace RLFanClub\Swiss;

use Bracket;

class SwissBracket extends Bracket
{
    public function __construct(string $name) {
        parent::__construct($name);
    }
    public function getTypeName() : string {
        return "Swiss";
    }
    public function push(SwissStage $stage) : void {
        $index = match ($stage->getRound()) {
            SwissRound::One => 0,
            SwissRound::Two => 1,
            SwissRound::Three => 2,
            SwissRound::Four => 3,
            SwissRound::Five => 4,
        };
        $this->matches[$index] = $stage;
    }
}