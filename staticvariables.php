<meta charset="utf-8"/>
<?php

function keep_track() { 
   STATIC $contator  = 0;
   $contator++;
   print $contator;
   print "<br>";
} 

keep_track();
keep_track();
keep_track(); 

?>