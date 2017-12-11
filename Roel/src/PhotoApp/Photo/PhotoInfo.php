<?php
namespace PhotoApp\Photo;

class PhotoInfo extends Photo
{
    //Construct Photo
    public function __construct($photoId, $camera){
        $this->camera = $camera;
        $this->photoId = $photoId;
    }

    //Properties Functions
    public function getCamera() {
        return $this->camera;
    }

    public function getPhotoId() {
        return $this->photoId;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getSize(){
        return $this->size;
    }

    //return Photo:
    public function getFullDetails() {
        // NOTE: this simulates a database lookup
        //       will revisit this later
        switch($this->getPhotoId()) {
            case '1':
                $this->location = 'Palenque, Mexico';
                $this->size = 'Original';
                $this->price = '120';
                break;
            case '2':
                $this->location = 'Grand Canyon, USA';
                $this->size = 'Original';
                $this->price = '100';
                break;
            case '3':
                $this->location = 'Azores, Portugal';
                $this->size = 'Original';
                $this->price = '100';
                break;
            default :
                echo 'Input Invalid';
                exit;
        }

        return trim(($this->getLocation() . ', ' ?? '')
                . ($this->getCamera() . ', ' ?? '')
                . ($this->getSize() . ', ' ?? '')
                . ($this->getPrice() ?? ''));
    }

}
