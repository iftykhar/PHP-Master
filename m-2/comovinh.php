<?php


class Book{

    public function purchase(){

    }


    public function lend(){

    }

}

class AudioBook extends Book{


    public function listen(){

    }

    public function lend(){
        return null;
    }
}

class Ebook extends Book{

}