<?php

class Movie {

    public function __construct($_title, $_director, $_original_language, $_genres, $_lenght)
    {
        $this->setTitle($_title);
        $this->setDirector($_director);
        $this->setOriginalLanguage($_original_language);
        $this->setGenres($_genres);
        $this->setLength($_lenght);
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setOriginalLanguage($original_language) {
        $this->original_language = $original_language;
    }

    public function getOriginalLanguage() {
        return $this->original_language;
    }

    public function setGenres($genres) {
        $this->genres = $genres;
    }

    public function getGenres() {
        return $this->genres;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getLength() {
        return $this->length;
    }

    private string $title = '';
    private string $director = '';
    private string $original_language = '';
    private array $genres = [];
    private int $length = 0;

}

?>