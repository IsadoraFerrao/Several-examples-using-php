<?php
    $usernames = array("Epaminondas", "Bolutavicius", "Gertrudes", "Apneide", "Indefinido", "Edneia");
    for ($x=0; $x < count($usernames); $x++) {
        if ($usernames[$x] == "Indefinido") continue;
        echo "Membro da equipe: $usernames[$x] <br />";
    }
?>