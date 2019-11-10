<?php

namespace Phalcon\Init\Idea\Controllers\Api;
use Phalcon\Init\Idea\Request\FindByAuthorRequest;
use Phalcon\Init\Idea\UseCase\FindByAuthorUseCase;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Init\Idea\Repository\IdeaRepository;
use Phalcon\Init\Idea\UseCase\RateIdeaUseCase;
use Phalcon\Init\Idea\Request\RateIdeaRequest;
use Phalcon\Init\Idea\Response\RateIdeaResponse;

class IdeaController extends Controller{
    public function rateAction(){
        $request = new Request();
        $ideaId = $request->get("id");
        $ideaRating = $request->get("rating");

        $ideaRepository = new IdeaRepository();
        $useCase = new RateIdeaUseCase($ideaRepository);
        $response = $useCase->execute(new RateIdeaRequest($ideaId, $ideaRating));

        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setContent(json_encode($response));
        return $this->response;
    }
    public function ideaAction(){
        $request = new Request();
        $ideaAuthor = $request->get("author");
        $ideaRepository = new IdeaRepository();
        $useCase = new FindByAuthorUseCase($ideaRepository);
        $response = $useCase->execute(new FindByAuthorRequest($ideaAuthor));

        $this->view->disable();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setContent(json_encode($response));
        return $this->response;
    }
}