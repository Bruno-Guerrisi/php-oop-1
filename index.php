<?php
/* Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

$ArrDescription = [
                    'Primo film della saga, uscito nel 2012, Hunger Games è ambientato in un futuro distopico dove, in seguito a una ribellione avvenuta settant’anni prima, ogni anno la popolazione viene punita sorteggiando ragazzi provenienti dai dodici Distretti che vengono costretti a partecipare agli Hunger Games, uno show in cui, giorno dopo giorno, i partecipanti si vedono costretti a lottare tra loro, fino a uccidersi. Solo uno è il vincitore di ogni edizione: colui che riesce a sopravvivere fino alla fine.',

                    'Secondo film della saga, Hunger Games  La ragazza di Fuoco (titolo originale The Hunger Games: Catching Fire) è uscito nelle sale cinematografiche nel 2013 e torna a raccontare le vicende di Katniss dopo la vittoria della 74ª edizione degli Hunger Games. Insieme a lei, inaspettatamente, è risultato vincitore anche Peeta Mellark e insieme i due sono costretti ad abbandonare coloro che amano per cominciare il “Tour dei Vincitori”. Mentre, però, a Capitol City sono in atto i preparativi per la nuova edizione dello show, la vincitrice capisce che il popolo è pronto a una nuova ribellione.',

                    'Terzo film della saga tratta dai romanzi di Suzanne Collins, Hunger Games  Il canto della rivolta parte I (titolo originale The Hunger Games: Mockingjay  Part 1) è arrivato nelle sale cinematografiche nel 2014 e segue ancora una volta le vicende di Katniss Everdeen, dopo che finalmente i giochi sono stati eleminati e nessun ragazzo proveniente dai Dodici Distretti è più costretto a prendervi parte. Dopo aver salvato alcuni dei partecipanti all’ultima edizione dello show, guidata dalla Presidente Coin e con l’aiuto dei suoi amici, Katniss parte per salvare Peeta e un Paese intero: ormai, infatti, la giovane è divenuta la leader di un popolo in ribellione.',

                    'Ultimo film della saga cinematografica degli Hunger Games, tratto dal terzo romanzo della saga letteraria scritta da Suzanne Collins, Hunger Games  Il canto della rivolta parte II (titolo originale The Hunger Games: Mockingjay  Part 2) conclude la storia di Katniss Everdeen, vedendo l’eroina lavorare non solo per il presente ma anche per il futuro della sua gente. Ormai simbolo della ribellione,  insieme ai suoi amici, in quest’ultimo film della saga Katniss lotta contro il Presidente Snow e contro Capitol City, mentre l’intera nazione è in guerra.',

                    "Army of the Dead, il film diretto da Zack Snyder, è ambientato a Las Vegas durante un'epidemia zombie e racconta la storia di una squadra di mercenari capitanata da Scott Ward (Dave Bautista), che decide di rischiare la vita e infiltrarsi nella città sotto quarantena per fare irruzione nel caveau di un grosso casinò e portare a segno la rapina più grande della storia.",
];




class Movie{
    public $title;
    public $genre;
    public $description;
    public $textVisible;
    public $date;
    public $rating;
    public $visible;

    function __construct (
                        $visible = true,
                        $title,
                        $genre,
                        $description,
                        $textVisible = 26, 
                        $date, 
                        $rating = 'Valore vuoto'
                        )

    {
        $this->visible = $visible;
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
        $this->textVisible = $textVisible;
        $this->date = $date;
        $this->rating = $rating;
    }

    public function showMovie(){
        if ($this->visible == true) {
            var_dump($this);
        } else {
            echo 'film not visible';
        }

    }
}

$MoviesOne = new Movie( true,
                        'Hunger Games',
                        'Drammatico - Azione - Fantascienza',
                        $ArrDescription[0],
                        2012,
                        4
                    );

$MoviesTwo = new Movie( true,
                        'Hunger Games - La ragazza di fuoco',
                        'Drammatico - Azione - Fantascienza',
                        $ArrDescription[1],
                        2013,
                        3
                    );

$MoviesThree = new Movie( true,
                        'Hunger Games - Il canto della rivolta parte 1',
                        'Drammatico - Azione - Fantascienza',
                        $ArrDescription[2],
                        2014,
                        5
                    );

$MoviesFour = new Movie( true,
                        'Hunger Games - Il canto della rivolta parte 2',
                        'Drammatico - Azione - Fantascienza',
                        $ArrDescription[3],
                        2015,
                        5
                    );

$MoviesFive = new Movie( false,
                        'Army of Death',
                        'Azione - Fantascienza',
                        $ArrDescription[4],
                        2021,
                        2,
                    );

$MoviesOne->showMovie();
echo '<hr>';
$MoviesTwo->showMovie();
echo '<hr>';
$MoviesThree->showMovie();
echo '<hr>';
$MoviesFour->showMovie();
echo '<hr>';
$MoviesFive->showMovie();
echo '<hr>';


?>