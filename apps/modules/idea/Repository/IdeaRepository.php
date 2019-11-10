<?php

namespace Phalcon\Init\Idea\Repository;

use Phalcon\Init\Idea\Model\Idea;

class IdeaRepository{
    public function find($id){
        $temp=Idea::find($id);

        if(sizeof($temp))
        return Idea::find($id)[0];
        else return new Idea();
    }
    public function findByAuthor($author){
        return Idea::find($author);
    }

    public function update(Idea $idea){
        return $idea->save();
    }
}