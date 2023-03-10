<!-- 
-definire una classe ‘Movie’ al cui interno
   => sono dichiarate delle variabili d'istanza
   => è definito un costruttore
   => è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà  
-->

<?php

class Movie
{
    public $name;
    public $genre;

    public function __construct($_name, $_genre)
    {
        $this->name = $_name;
        $this->genre = $_genre;
    }

    public function description()
    {
        return $this->name . " è un film " . $this->genre;
    }
}

$sonatine = new Movie('Sonatine', 'Crime');
$fargo = new Movie('Fargo', 'Thriller');

echo $sonatine->description() . "<br>";
echo $fargo->description();

?>