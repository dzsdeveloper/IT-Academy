
<?php
/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 1    ////////////////////////////
/////////////////////////////////////////////////////////////////////

/* EXERCICI 1
Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla. */

$int = 11; // variable de tipo integer
$double = 23.5; // variable de tipo double
$str = 'Hola'; // variable de tipo string
$bool = true; // variable de tipo boolean

var_dump($int, $double, $str, $bool);

/* EXERCICI 2
Crea una altra variable string. Després:
- Imprimeix per pantalla el tamany(longitud) del dos strings.
- Imprimeix per pantalla el dos strings però en ordre invers de caràcters.
- Imprimeix la concatenació dels dos strings. */

$str2 = 'que tal';

echo strlen($str); // tamaño de las dos variables
echo strlen($str2);

echo strrev($str); // impresión strings en orden inverso
echo strrev($str2);

echo $str . $str2; // impresión de strings concatenados

/* EXERCICI 3
Crea una constant que inclogui el teu nom i imprimeix-la per pantalla. */

define('NOMBRE', 'Daniel Zaplana'); // defino constante
echo NOMBRE; // imprimo constante por pantalla


/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 2    ////////////////////////////
/////////////////////////////////////////////////////////////////////

/* EXERCICI 1
Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers. */

$arrayIntegers1 = array(1, 2, 3, 4, 5);
$arrayIntegers2 = array(1, 2, 3);

/* EXERCICI 2
Afegeix un valor més a l'array que conté 3 integers. */

array_push($arrayIntegers2, 4);

/* EXERCICI 3
Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla. */
$arrayMezcla = array_merge($arrayIntegers1, $arrayIntegers2);
echo count($arrayMezcla);


/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 3    ////////////////////////////
/////////////////////////////////////////////////////////////////////

/* EXERCICI 1
Imprimeix per pantalla(valor a valor) l'array resultant del nivell anterior. */

foreach ($arrayMezcla as $value) { //recorro el array recuperando cada valor y mostrandolo por pantalla
    echo "<br>$value";
}

/* EXERCICI 2
Escriure un programa PHP que realitzi lo següent: 

declarar dues variables X e Y de tipus int, dues variables N i M de tipous double i assigna a cada una un valor.
A continuació, mostra per pantalla, per a X e Y:

El valor de cada variable
La suma 
La resta 
El producte  
La divisió 
El mòdul
per a N i M, lo mateix.

I per a totes les variables(X,Y,N,M):

El doble de cada variable
La suma de totes les variables
El producte de totes les variables */

$x = 9; // declaro cada variable y le asigno valor
$y = 8;
$n = 2.3;
$m = 7.2;

// Operaciones con X e Y
echo '<br>- Operaciones con las variables X e Y -';
echo "<br> El valor de cada variable: X=9,   Y=8";
echo '<br> La suma: ' . $x + $y;
echo '<br> La resta: ' . $x - $y;
echo '<br> El producte: ' . $x * $y;
echo '<br> La divisió: ' . $x / $y;
echo '<br> El mòdul: ' . $x % $y;

// Operaciones con N y M
echo '<br>- Operaciones con las variables N y M -';
echo "<br> El valor de cada variable: X=9,   Y=8";
echo '<br> La suma: ' . $n + $m;
echo '<br> La resta: ' . $n - $m;
echo '<br> El producte: ' . $n * $m;
echo '<br> La divisió: ' . $n / $m;
echo '<br> El mòdul: ' . $n % $m;

// Operaciones con todas las variables
echo '<br>- Operaciones con todas las variables (X,Y,N,M) -';
echo '<br> El doble de X es: ' . $x * 2;
echo '<br> El doble de Y es: ' . $y * 2;
echo '<br> El doble de N es: ' . $n * 2;
echo '<br> El doble de M es: ' . $m * 2;
echo '<br> La suma de totes les variables: ' . $x + $y + $n + $m;
echo '<br> El producte de totes les variables: ' . $x * $y * $n * $m;

?>