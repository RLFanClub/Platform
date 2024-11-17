<?php

namespace RLFanClub\Personnel;

class Team
{
    private array $players;
    private array $staff;
    private int $size = 0;
    public function __construct() {
    }
    public function getPlayers(): array {
        return $this->players;
    }
    public function getStaff(): array {
        return $this->staff;
    }
    public function addPlayer(Player $player): void {
        $this->players[$this->size] = $player;
        $this->size++;
    }
    public function addStaff(TeamStaff $staff): void {
        $this->staff[$this->size] = $staff;
        $this->size++;
    }
}