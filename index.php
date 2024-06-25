<?php
class Movie{

    private string $name;
    private string $type;
    private int $relase_date;
    private int $valutation;
    private int $duration;
    


    public function __construct($name,$type, $relase_date,$valutation,$duration)
    {
        $this->name = $name;
        $this->type = $type;
        $this->relase_date = $relase_date;
        $this->valutation = $valutation;
        $this->duration = $duration;
    }
    public function getName() : string {
        return $this->name;

    }
    public function getType() : string {
        return $this->type;

    }
    public function getRelaseDate() : int {
        return $this->relase_date;

    }
    public function getValutation() : int {
        return $this->valutation;

    }
    public function getDuration() : int {
        return $this->duration;

    }
    public function setName(string $name) : void {
         $this->name = $name ;

    }
    public function setType(string $type) : void {
         $this->type = $type ;

    }
    public function setRelaseDate($relase_date) : void {
        if($relase_date<1900 || $relase_date>2050){
            throw new Exception('la data deve essere compersa tra 1900 e 2050');
        }
        if(is_float($relase_date) === true){
            throw new Exception('la data deve essere  un numero intero');
        }
         $this->relase_date = $relase_date ;

    }
    public function setValutation( $valutation) : void {
         $this->valutation = $valutation ;

    }
    public function setDuration($duration) : void {
         $this->duration = $duration ;

    }
   

}

$list_movie =[
    $spiderman = New Movie('Spiderman','fantasy',2010,6,2.25),
    $superman = New Movie('Superman','fantasy',2008,6,1.50),
    $batman = New Movie('Batman','fantasy',2012.9,6,2.30),
    $flash = New Movie('Flash','fantasy',2017,6,1.25),
    $thor = New Movie('Thor','fantasy',2011,6,0.40),
    $supergirl = New Movie('Supergirl','fantasy',2020,6,2.00),
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>La mia lista di film</h1></header>
    <main>
        <ul>
            <?php foreach($list_movie as $film ){?>
                <li>
                    <?php echo $film->getName();?>
                    <ul>
                        <li>Genere:<?php echo $film->getName();?></li>
                        <li>Prima Uscita:<?php echo $film->getRelaseDate();?></li>
                        <li>Valutazione:<?php echo $film->getValutation();?></li>
                        <li>Durata Film:<?php echo $film->getDuration();?></li>
                    </ul>
                </li>
                
                <?php }?>
        </ul>
    </main>
    <footer></footer>
    
</body>
</html>