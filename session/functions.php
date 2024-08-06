<?php

function check($var){
    # delete spaces from input
    $var = trim($var);
    # delete tages from input like : <br> 
    $var = strip_tags($var);
    # delete slashes /
    $var = stripcslashes($var);
    return $var;
}

?>