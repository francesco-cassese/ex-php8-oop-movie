<?php

trait Rateable
{

    // Ho reso $vote protected: così sono obbligato a passare da setVote() per modificarlo,
    // e non posso più bypassare il controllo che ho scritto sul range 1-10.
    protected int $vote;

    public function setVote(int $_vote)
    {
        // Controllo che il voto ricevuto sia nel range consentito prima di assegnarlo.
        if ($_vote < 1 || $_vote > 10) {
            echo "Il voto deve essere tra 1 e 10, ricevuto: {$_vote}";
            return;
        }
        $this->vote = $_vote;
    }

    public function getRatingStars()
    {
        // Uso isset() perché $vote potrebbe non essere ancora stato impostato con setVote().
        return isset($this->vote) ? "Valutazione: {$this->vote}/10" : "Non ancora valutato";
    }
}
