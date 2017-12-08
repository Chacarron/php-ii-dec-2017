# PHP-II CLASS NOTES Dec 2017

Left Off With: http://localhost:8888/#/3/74

## GENERAL NOTES
* Source code for "php1"?


## VM NOTES
* Setting up gedit to run PHP directly
  * Path to PHP: `/usr/bin/php`
  * For `Input` be sure to select `Current Document`

## Weds 6 Dec 2017
* Lab: Namespace
* Lab: Create a Class

## Fri 8 Dec 2017
* Lab: Create an Extensible Super Class
* Lab: Magic Methods

## Mon 11 Dec 2017
* Lab: Abstract Classes
  * Turn your superclass into an abstract class
  * Define an abstract method
  * Provide the implementation in the sub-class
* Lab: Interfaces
  * Something specific to what you're working on
* Lab: Type Hinting


## POSSIBLE THINGS TO CHANGE:
* http://localhost:8888/#/3/4: hightlight "use" and "as"
* http://localhost:8888/#/3/12: duplication between Use and Notes
* http://localhost:8888/#/3/22 - 23: Anonymous Classes should be presented at the END of the OOP module
* http://localhost:8888/#/3/42: descretion misspelled

# Wed 6 Dec 2017
http://collabedit.com/e7ykj

## LAB:Namespaces
- orderapp\controller
- orderapp\core
- orderapp\domain
- orderapp\form
- orderapp\model
Under core, each has its own namespace which is the name of the specific folder.


## LAB: Classes


## Lab: Create an Extensible Super Class

### Danny

### Roel
```
//Combination of the two labs:
//file: index.php
<?php
namespace PhotoApp\Photo;

define ('BASE', realpath(__DIR__ . '/../'));

spl_autoload_register(
    function($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require BASE . '/src/' . $file;
    }
);

$photos[] = new PhotoInfo('1', 'Panasonic_G3');
$photos[] = new PhotoInfo('2', 'Panasonic_G3');
$photos[] = new PhotoInfo('3', 'Panasonic_G3');
```

```
//file: Photo.php
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
```

```
//file: PhotoInfo.php
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

//erorr for __toString():
//$photo = new PhotoInfo('1', 'Panasonic_G3');
//echo $photo;

//error for __call() OR __get():
//$photo = new Photo;
//$photo->Photo('test', 'something');
//echo $photo->something;

foreach($photos as $product){
    echo $product->getFullDetails() . PHP_EOL;
}
var_dump($photos);
```

### Sravani

```
class Actor extends Movie
{

    public $name;
    public $gender


    public function getName(){
        return $this->name;
    }
}
```


```
class ActionMovie extends Movie
{

    public $genre;
    public function getGenre(){
    return $this->genre;

    }
}
```


## Lab: Magic Methods


### Danny

### Roel

### Sravani


# Fri 9 Dec 2017
http://collabedit.com/m3ec5

## OOP Discussion

### Returning $this
```
<?php
class Test
{
    protected $id;
    protected $name;
    protected $amount;
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}

$test = (new Test())->setId(123)->setName('Joe')->setAmount(99.99);

var_dump($test);

```


### Abstract Class + Interface Examples
* https://github.com/dbierer/zf3-examples/blob/master/guestbook/module/AuthOauth/src/Adapter/BaseAdapter.php
* https://github.com/dbierer/zf3-examples/blob/master/guestbook/module/AuthOauth/src/Adapter/GoogleAdapter.php
* https://github.com/dbierer/classic_php_examples/blob/master/oop/oop_typehint_using_interface.php
* Also see OrderApp\Core\Model\* and also OrderApp\Model\CustomersModel

