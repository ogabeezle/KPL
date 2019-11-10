<?php

namespace Phalcon\Init\Idea\Model;

use Phalcon\Mvc\Model;

class Idea extends Model{
    protected $id;
    protected $title;
    protected $description;
    protected $rating;
    protected $ratingcount;
    protected $votes;
    protected $author;

    public function getratingcount()
    {
        return $this->ratingcount;
    }

    public function setratingcount($ratingcount)
    {
        $this->$ratingcount = $ratingcount;
    }

    public function setId($id){
        $this->id=$id;    
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getId(){
        return $this->id;
    }

    public function getRating(){
        return $this->rating;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getVotes(){
        return $this->votes;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }

    public function setVotes($votes){
        $this->votes = $votes;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function addRating($rating){
        $this->rating = ($this->rating*$this->ratingcount+$rating)/($this->ratingcount+1);
        $this->ratingcount+=1;
    }
}