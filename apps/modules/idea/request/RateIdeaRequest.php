<?php

namespace Phalcon\Init\Idea\Request;

class RateIdeaRequest{
    public $ideaId;
    public $rating;

    public function __construct($ideaId, $rating){
        $this->ideaId = $ideaId;
        $this->rating = $rating;
    }
}