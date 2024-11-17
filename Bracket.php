<?php

abstract class Bracket
{
    protected array $matches;
    public function __construct (private readonly string $name) {
    }
    public function getName () : string {
        return $this->name;
    }
    public abstract function getTypeName() : string;
}