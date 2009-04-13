<?php
    include '../lib/html.php';
    $titulo = "El Ártico ha perdido el 14% de su hielo marino perene en un solo año.";
    
    echo html::inicioHtml($titulo);

    $cuerpo = html::encabezado($titulo);
    $texto = "El hielo perenne del Artico ";
    $texto .= html::link_a("http://www.nasa.gov", "NASA");
    $cuerpo .= html::parrafo($texto, "WASHINGTON.");

    $texto = "Segun el ";
    $texto .= html::link_a("http://www.jpl.gov", "JPL");
    $texto .= ", la perdida de blah blah... ";
    $cuerpo .= html::parrafo($texto, null);
    
    $texto = 'Los cambios...';
    $cuerpo .= html::cita($texto);

    echo html::cuerpoHtml($cuerpo);
    
    echo html::finHtml("El Ártico ha perdido el 14% de su hielo marino perene en un solo año.");
    
?>
