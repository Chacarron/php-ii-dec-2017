<?php
namespace PhotoApp\Photo;

define ('BASE', realpath(__DIR__ . '/../'));

spl_autoload_register(
    function($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require BASE . '/src/' . $file;
    }
);

$photos[] = new AddPhoto('Mexico, Paleque', 'Panasonic_G3', '120');
$photos[] = new AddPhoto('USA, Grand Canyon', 'Panasonic_G3', '100');
$photos[] = new AddPhoto('Portugal, Azores', 'Panasonic_G3', '100');

foreach($photos as $product){
    echo $product->getFullDetails() . PHP_EOL;
}

var_dump($photos);
