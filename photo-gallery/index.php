<?php 

require '../photo-gallery/directory_reader.php';

$images = directoryReader('images');

if (!$images) {
    die('Could not load files!');
}

foreach ($images as $image) {
    echo '<img src="photo_gallery/' . $image . '" alt="Image">';
}