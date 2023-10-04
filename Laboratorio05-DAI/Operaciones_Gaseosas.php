<?php
    $precioGaseosa = $_POST['precioGaseosa'];   
    $unidades = $_POST['unidades']; 

    $precioActualizado = $precioGaseosa - ($precioGaseosa * 0.05);
    echo "Nuevo precio de la gaseosa 3 Litros: S/." . $precioActualizado."<br>";

    $importe = $precioActualizado * $unidades;
    $descuento = $importe * 0.07;

    $total = $importe - $descuento;
    $caramelos = $unidades * 2;

    echo "Total a pagar: S/." . $total ."<br>";
    echo "Cantidad de caramelos: " . $caramelos;
?>