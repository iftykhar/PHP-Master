<?php
// Composition Has-a

// Inheritance Is-a
// interface just declares the behavior but not define it

// traits not only declares but also define it once at least.


class Post{

    use Shareable;
}

class Comment{

}

// Traits is a unrelated behavior 
trait Shareable{
    
    public function share(){
        
        printf("shared to social media");
    }
}

// why not interface then



$post = new Post();
$post->share();




