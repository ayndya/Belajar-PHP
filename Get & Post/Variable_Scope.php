<?php

// Variable Scope / Lingkup Variable
$x = "20";

// global
function tampilx(){
    global $x;
    echo "$x";
}

tampilx();
echo "<br>";
echo $x;

?>