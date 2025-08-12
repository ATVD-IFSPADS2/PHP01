<?php
    $capital = $_GET['capital'];
    $taxa = $_GET['taxa'];
    $tempo = $_GET['tempo'];
    $valorJuros = $capital * $taxa * $tempo;
    echo "<h1>Valor total do juros: $valorJuros </h1>";
?>