<?php

trait Rateable
{

    public int $vote;

    public function setVote(int $_vote)
    {
        if ($_vote < 1 || $_vote > 10) {
            echo "Il voto deve essere tra 1 e 10, ricevuto: {$_vote}";
            return;
        }
        $this->vote = $_vote;
    }

    public function getRatingStars()
    {
        return isset($this->vote) ? "Valutazione: {$this->vote}/10" : "Non ancora valutato";
    }
}
