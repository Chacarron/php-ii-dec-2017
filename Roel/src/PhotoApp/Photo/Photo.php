<?php

namespace PhotoApp\Photo;

class Photo
{
    protected $location;
    protected $size;
    protected $price;
    protected $camera;
    protected $photoId;
    private $someThing;

    //Messages to display when something goes wrong
    public function __toString() {
        return 'Information not as expected, please try again';
    }

    public function __call($name, $arg) {
        echo 'The ' . $name . ' request can not be processed correctly, we are sorry for the inconvenience';
        echo ' an email has been sent';
        exit;
    }

    public function __get($name) {
        echo 'The request can not be processed correctly, we are sorry for the inconvenience';
        exit;
    }

}
