<!DOCTYPE html>
<html>
<head>
	<title>Condicionales</title>
	<style >
		body{
			font-family: Arial;
			background: #BDE86F;
		    }
		    div{
		    	background: white;
		    	padding: 20px;
		    	margin: 0 auto;
		    	width: 200px;
		       }
		       h1{
		       	font-size: 36px;
		       }
	</style>
</head>
<body>

	<!-- Operador IF-->
	<div>
		<?php 

		 $hora = 13;
		  if($hora > 6 && $hora < 12 ){
		  	 echo "<h1> Buenos dias  </h1>";
		  }elseif ( $hora > 12 && $hora <= 18) 
		  {
		  	echo "<h1> Buenas Tardes</h1>";
		  }else{
		  	 echo "<h1> Buenas Noches</h1>";
		  }
		  ?>
	</div>
</body>
</html>