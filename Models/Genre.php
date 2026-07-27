<?php

class Genre
{
    public string $name;
    public string $description;

    public function __construct(string $_name, $_description = "")
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}
