<?php

namespace Phalcin\Init\Idea\Response;

use Phalcin\Init\Ide\Model\Idea;

class RateIdeaResponse{
    public $idea;

    public function __construct(Idea $idea){
        $this->idea = $idea;
    }
}