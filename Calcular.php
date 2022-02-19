<?php

    if (isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

        $lados = $_POST['lado'];
        $apotemas = $_POST['apotema'];
        $area = null;

    if (!empty($lados) or !empty($apotemas)) {
        
        echo " <h2>Cálculo del área de un octágono: </h2>";

        $area = (($lados*8)*$apotemas) / 2;

        echo "<br>Lado: " . $lados;
        echo "<br>Altura: " . $apotemas;
        echo "<br>Área del octágono: " . $area;
        echo "<br>";
        echo "<a href='index.html'>Regresar</a>";
        }
    }
