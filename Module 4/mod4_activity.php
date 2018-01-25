<?php
//if statement example
$t = date("H");

if ($t < 20) {
    echo nl2br("Have a good day!\n");
}

//else statement example
$t = date("H");

if ($t < 18) {
    echo nl2br("Have a good day!\n");
} else {
    echo nl2br("Have a good night!\n");
}


//elseif statement example
$t = date("H");

if ($t < 10) {
    echo "Have a good morning!";
} elseif ($t < 18) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

?>
