<?php

$links = array(
"Web site Oficial do Apache" => "www.apache.org", 
"Web site Oficial do MySQL" => "www.mysql.com", 
"Web site Oficial do PHP" => "www.php.net");

echo "<b>Recursos Online</b>:<br />";
foreach($links as $title => $link) {
    echo "<a href=\"http://$link\">$title</a><br />";
    // usar \" ou '
}

?>