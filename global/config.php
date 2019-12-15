<?php
define ("KEY", "keytachbot");
define ("COD", "AES-128-ECB");

define ("SERVIDOR", "localhost");
define ("USUARIO", "root");
define ("PASSWORD", "");
define ("BD", "tachbot");
//define ("url", "http://localhost/Proyecto2/TIENDA2-master/TIENDA2-master");
define ("url", "http://localhost/proyecto/php/tienda2");


function test_input($cadena) {
    $dato = trim($cadena);
    $dato = strip_tags($cadena);
    $dato = htmlspecialchars($cadena);
    return $cadena;
}

?>