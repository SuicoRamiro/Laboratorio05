<?php

    $nombre = $_POST['nombre'];
    $totalHijos = $_POST['totalHijos'];
    $comision = $_POST['comision'];

    echo "Nombre del vendedor:  " . $nombre ."<br>";
    $sueldoBruto = 600 + ($totalHijos * 50) + ($comision * 0.075);
    echo "El Sueldo Bruto es: S/." . $sueldoBruto."<br>";

    $total = $sueldoBruto - ($sueldoBruto * 0.11);
    echo "Total a pagar: S/." . $total;
?>