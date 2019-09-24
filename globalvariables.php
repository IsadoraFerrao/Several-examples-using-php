<?php

$algumaVariavel = 15;

function addit() { 
    GLOBAL $algumaVariavel;
    $algumaVariavel++; 
    print "algumaVariavel tem $algumaVariavel";
} 
addit();

?>