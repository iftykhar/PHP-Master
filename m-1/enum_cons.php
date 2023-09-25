<?php

class Blogpost{
    public string $status;

    public function getStatus(): string{
        return $this->status;
    }

    public function setStatus(Status $status): void{
        $this->status = $status;
    }

     
}

// enum Status{
//     case DRAFT;
//     case PUBLISHED;
//     case UNDER_REVIEW;
// }


// enum beg 
enum Status: int{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case UNDER_REVIEW = 'under_review';
}

// final class Status{
//     public const DRAFT =  'draft';
//     public const PUBLISHED = 'published';
//     public const UNDER_REVIEW = 'under_review';
// }

$post = new Blogpost();

$post->setStatus(Status:: DRAFT);


// using  enum or enumaration (type)


if($post->getStatus() === STATUS::PUBLISHED){
    //logic
}

if($post->getStatus() === 'published'){
    //logic
}

