<?php

namespace Phalcon\Init\Idea\Request;

class FindByAuthorRequest{
    public $ideaAuthor;

    public function __construct($author){
        $this->ideaAuthor = $author;
    }
}