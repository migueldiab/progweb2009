<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class html {
    public static function inicioHtml($titulo) {
        $code = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">';
        $code .= '<html>';
        $code .= '<head>';
        $code .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
        $code .= '<title>'.$titulo.'</title>';
        $code .= '</head>';
        return $code;
    }

    public static function finHtml() {
        $code = '</html>';
        return $code;
    }

    public static function cuerpoHtml($cuerpo) {
        $code = '<body>';
        $code .= $cuerpo;
        $code .= '</body>';
        return $code;
    }

    public static function encabezado($texto) {
        $code = '<h1>';
        $code .= $texto;
        $code .= '</h1>';
        return $code;
    }

    public static function parrafo($texto, $titulo) {
        $code = "<p>";
        if ($titulo!=null) {
            $code .= '<b>';
            $code .= $titulo;
            $code .= '</b> - ';
        }
        $code .= $texto;
        $code .= '</p>';
        return $code;
    }

    public static function link_a($link, $texto) {
        $code = "<a href=".$link.">";
        if ($texto!=null) {
            $code .= $texto;
        }
        else {
            $code .= $link;
        }
        $code .= '</a>';
        return $code;
    }
    
    public static function cita($texto) {
        $code = "<blockquote style='border-width:14; border-style:dotted;'><i>";
        $code .= '"'.$texto.'"';
        $code .= "</i></blockquote>";
        return $code;
    }

    public static function imagen($imagen, $alt) {
        $code = "<img src=".$imagen;
        if ($alt!=null) {
            $code = "alt='".$alt."'";
        }
        $code .= ">";
        $code .= "</img>";
        return $code;
    }
 }
?>
