<?php

namespace Phalcon\Init\Idea\Controllers\Web;

use Phalcon\Mvc\Controller;

class IdeaController extends Controller
{
    public function indexAction()
    {
        $this->view->pick('idea/index');
    }

}