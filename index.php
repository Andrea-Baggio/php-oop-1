<!-- 
-definire una classe ‘Movie’ al cui interno
   => sono dichiarate delle variabili d'istanza
   => è definito un costruttore
   => è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà  
-->

<?php
    class Movie {
        public $name;
        public $genre;
    }

    $sonatine = new Movie();
    $sonatine->name = 'Sonatine';
    $sonatine->genre = 'Crime';

    $fargo = new Movie(); 
    $fargo->name = 'Fargo';
    $sonatine->genre = 'Thriller';

?>