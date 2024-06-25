<?php
class Movie{

    public $type;
    public $relase_date;


    function __construct($type, $relase_date)
    {
        $this->type = $type;
        $this->relase_date = $relase_date;
    }

}


$spiderman = New Movie('action',2020);

var_dump($spiderman);