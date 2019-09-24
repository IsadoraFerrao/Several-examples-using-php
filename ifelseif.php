<?php
     $numeroSecreto = 453;
     $_POST['adivinha'] = 442;
     if ($_POST['adivinha'] == $numeroSecreto) {
          echo "<p>Parabéns!</p>"; 
     } elseif (abs ($_POST['guess'] - $numeroSecreto) < 10) {
          echo "<p>Você está chegando perto!</p>";
     } else {
          echo "<p>Tente novamente!</p>";
     }
?>