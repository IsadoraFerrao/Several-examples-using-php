<?php
    $links = array("www.mysql.com", "www.php.net", "www.apache.org", "www.utfpr.edu.br");
    echo "<b>Recursos Online</b>:<br />";
    foreach($links as $link) {
        echo "<a href=\"http://$link\">$link</a><br />";
    }
?>