<?php


class Book{


    protected $page_numbers;

    public function purchase(){

    }


    public function lend(){

    }

}

class AudioBook {

    public Book $book;

    public function listen(){

    }

    // not good practice at all 
    // public function lend(){
    //     return null;
    // }
}

class Ebook extends Book{


    public function read(){

    }
}