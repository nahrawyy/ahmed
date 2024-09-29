<?php

class mido{


    function echo_name($name1 , $name2 , $name3) {
        echo "My name is: " . $name1 . "<br>";  // Added a line break
        echo "My second name is: " . $name2 . "<br>";  // Added a line break
        echo "My third name is: " . $name3 . "<br>";  // Added a line break
    }

    function numb(){
        echo "ahmed <br>";
    }
}

$s = new mido();

$s -> numb();
$s -> echo_name('ahmed','ammar','elnahrawy');

