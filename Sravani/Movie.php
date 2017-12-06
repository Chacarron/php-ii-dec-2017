<?php

class Movie 
{
    const TABLE = 'movie';
    public $title;
    public $year;
    public $director;
    public $language;

    public function __construct($title,$year,$director,$language)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director= $director;
        $this->language = $language;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }
}


$movie1 = new Movie ( 'Conjuring' , '2013','James','English' ); 
$movie2 = new Movie ( 'Race' , '2015', 'Krish', 'Hindi' ); 

echo $movie1->getTitle();

