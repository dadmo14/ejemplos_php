<?php 
// funciones para strings

$mensaje = "Hoy            voy a                 aprender     mucho";

echo "$mensaje". "</br>";

// longitud
 echo strlen($mensaje). "</br>";

//Numero de palabras
  echo str_word_count($mensaje). "</br>";

// Reversa
 echo strrev($mensaje) . "</br>";

// Encontrar texto 
echo strpos($mensaje, "aprender"). "</br>";

// Remplazar texto
echo str_replace("aprender", "nada", $mensaje). "</br>";


// Covertir a minuscula

echo strtolower($mensaje). "</br>";

// Covertir a mAyusculas.

echo mb_strtoupper($mensaje). "</br>";

// comparar cadenas ( COMPARA LA CADENAS SEGUN EL ORDEL DEL ALABETO A ES MENOR QUE B )

echo strcmp("a", "b"). "</br>";

//  sustraer cadena ( espapcio )

echo substr($mensaje, 0, 7). "</br>";

// remover espacios en blancos

echo trim("Hola estoy     quitando        espacios en blancos"). "</br>";


 ?>