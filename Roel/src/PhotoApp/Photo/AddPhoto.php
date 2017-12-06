<?php
namespace PhotoApp\Photo;

class AddPhoto
{
    public $location;
    public $camera;
    public $price;

    public function __construct($location, $camera, $price){
        $this->location = $location;
        $this->camera = $camera;
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getCamera() {
        return $this->camera;
    }
    public function getLocation() {
        return $this->location;
    }
    public function getFullDetails() {
        return trim(($this->getLocation() . ' ' ?? '')
                . ($this->getCamera() . ' ' ?? '')
                . ($this->getPrice() ?? ''));
    }
}
