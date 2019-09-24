<?php
     $numeroSecreto = 453;
     if ($_POST['adivinha'] == $numeroSecreto) {
          echo "<p>Parabéns!</p>";  
     } else {
          echo "<p>Tente novamente!</p>";
     }
?>