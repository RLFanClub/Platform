<?php

namespace RLFanClub\Swiss;

enum SwissRound
{
    case One;
    case Two;
    case Three;
    case Four;
    case Five;
    public function count(): int
    {
        return match ($this->name) {
            "Three", "Two", "One" => 8,
            "Four" => 6,
            "Five" => 3,
            default => 0,
        };
    }
}