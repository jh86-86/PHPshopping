<?php  

$x=5;

function hello(){
    echo 'Hello';
    echo $GLOBALS['x'];  //supergloabls
}

hello();

?>