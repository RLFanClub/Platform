<?php

namespace RLFanClub\Personnel;

class TeamStaff
{
    private array $ignHistory;
    public function __construct(private string $ign) {
        $this->ignHistory = [];
    }
    public function getIgn(): string {
        return $this->ign;
    }
    public function getIgnHistory(): array {
        return $this->ignHistory;
    }
    public function updateIgn(string $ign) : void {
        $ignHistory[] = $this->ign;
        $this->ign = $ign;
    }
}