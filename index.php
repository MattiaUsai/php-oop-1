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

$list_movie =[
    $spiderman = New Movie('Spiderman','fantasy',2010,6,2.25),
    $superman = New Movie('Superman','fantasy',2008,6,1.50),
    $batman = New Movie('Batman','fantasy',2012,6,2.30),
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
                    <?php echo $film->name;?>
                    <ul>
                        <li>Genere:<?php echo $film->type;?></li>
                        <li>Prima Uscita:<?php echo $film->relase_date;?></li>
                        <li>Valutazione:<?php echo $film->valutation;?></li>
                        <li>Durata Film:<?php echo $film->duration;?></li>
                    </ul>
                </li>
                
                <?php }?>
        </ul>
    </main>
    <footer></footer>
    
</body>
</html>