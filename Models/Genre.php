<?php

class Genre
{
    public string $name;
    // Ho reso $description private: la valorizzo nel costruttore ma non la leggo mai da fuori questa classe.
    private string $description;

    public function __construct(string $_name, $_description = "")
    {
        // Valorizzo le proprietà con i parametri ricevuti; la descrizione è opzionale.
        $this->name = $_name;
        $this->description = $_description;
    }
}
