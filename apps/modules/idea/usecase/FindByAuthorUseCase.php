<?php

namespace Phalcon\Init\Idea\UseCase;
use Phalcon\Init\Idea\Repository\IdeaRepository;
use Phalcon\init\Idea\Request\RateIdeaRequest;

class FindByAuthorUseCase{
    private $ideaRepository;

    public function __construct(IdeaRepository $ideaRepository){
        $this->ideaRepository = $ideaRepository;
    }

    public function execute($author){
        $idea = $this->ideaRepository->findByAuthor($author);
        return $idea;
    }
}