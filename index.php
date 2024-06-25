<?php
class Movie{

    public string $name;
    public string $type;
    public int $relase_date;
    public int $valutation;
    public int $duration;
    


    public function __construct($name,$type, $relase_date,$valutation,$duration)
    {
        
        $this->name = $name;
        $this->type = $type;
        $this->relase_date = $relase_date;
        $this->valutation = $valutation;
        $this->duration = $duration;
    }
 
   

}

$list_movie=[
    $spiderman = New Movie('Spiderman','fantasy',2010,6,2.25),
    $superman = New Movie('Superman','fantasy',2008,6,1.50),
    $batman = New Movie('Batman','fantasy',2012,6,2.30),
    $flash = New Movie('Flash','fantasy',2017,6,1.25),
    $thor = New Movie('Thor','fantasy',2011,6,0.40),
    $supergirl = New Movie('Supergirl','fantasy',2020,6,2.00),
];


var_dump($list_movie);