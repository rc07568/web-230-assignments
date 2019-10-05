<?php

$string = 'This is a <img scr="image.jpg"> string.';
$string_slashes = htmlentities(addslashes($string));

echo $string_slashes;


?>