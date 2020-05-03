<?php 

$nombre = 'Juan Perez';
$edad = 18;

echo $nombre;

echo '<br>';

echo 'Hola <br> '. $nombre . ', La edad ingresada es: '. $edad . ' años';

//Estructura Condicional
if($edad >= 18){
	echo '<br>Es mayor de edad';
}
else{
	echo '<br>Es menor de edad';
}

//Estructura Condicional Anidada
if($edad < 18){
	echo '<br>Usted no cumple con le edad minima';
}else if($edad < 30 || $edad > 50){
	echo '<br>La edad ingresada no es valida';
}else{
	echo '<br>Gracias por ingresar su edad';
}

//CICLO FOR
echo '<br>';

echo '<h2> TABLA DE MULTIPLICAR</h2>';

$j = 1;
$resultado = 0;
for ($i=1; $i <= 10; $i++) { 
	$resultado = $i * $j;
	echo $i . ' x '. $j . ' = ' . $resultado . '<br>';
	$j++;
}
echo '<br>';

//USO DE ARRELGOS
$comunas = array('Providencia','Santiago','Ñuñoa','Las Condes');
echo '<br>';
echo '<h3>Ejemplo de foreach</h3>';
foreach ($comunas as $comuna) {
	echo $comuna . '<br>';
}

?>