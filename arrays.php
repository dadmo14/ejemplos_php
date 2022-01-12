<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<title>Arrays</title>
	<style>
		body{
			background-color: #85CDe7;
			font-family: Arial;
			font-size: 4em;
			padding: 60px;
		}
	</style>
</head>
<body>
<?php 
 $frutas = array("Platano","Mango","Pera", "Fresa");
 print_r($frutas). "<br>";

 echo $frutas[0]. "<br>";

 //contar valores de un array 

echo count($frutas) . " ELEMENTOS";
 echo "<br>";

 // recorrer un array y mostrarlo uno a uno

 for ($i=0; $i <count($frutas); $i++) { 
 	echo $frutas[$i] ."<br>";
 }


 // colocando idefitcadores ne la pisiscion de un vector

 $edad = array("David"=>28, "Adriana"=>25, "Juan C"=>6);
  print_r($edad);
echo "<br>";
echo $edad['David'];

echo "<br>";

// se puede reccorer un vector usando el key que seria el nombre y el valor que seria la edad solo vale para for ech
foreach ($edad as $key => $value) {
	echo $key ."Tiene el valor de: " . $value . "<br>";
}


 ?>
</body>
</html>