<?php

namespace Phalcon\Init\Idea\UseCase;
use Phalcon\Init\Idea\Repository\IdeaRepository;
use Phalcon\init\Idea\Request\RateIdeaRequest;

class RateIdeaUseCase{
    private $ideaRepository;

    public function __construct(IdeaRepository $ideaRepository){
        $this->ideaRepository = $ideaRepository;
    }

    public function execute(RateIdeaRequest $request){
        $idea = $this->ideaRepository->find($request->ideaId);
        $idea->addRating($request->rating);
        $this->ideaRepository->update($idea);
        return $idea;
    }
}