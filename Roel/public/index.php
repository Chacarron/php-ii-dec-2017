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

//erorr for __toString():
$photo = new PhotoInfo('1', 'Panasonic_G3');
echo $photo;

//error for __call() OR __get():
$photo = new Photo;
$photo->Photo('test', 'something');
echo $photo->something;

foreach($photos as $product){
    echo $product->getFullDetails() . PHP_EOL;
}
var_dump($photos);

