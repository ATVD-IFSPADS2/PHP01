<?php
    $raio = $_GET['raio'];
    $pi = pi();
    $area = $pi*$raio*$raio;
    echo "<h1>Recebido: $raio </h1><br>";
    echo "<h1>Área: $area </h1>";
?>