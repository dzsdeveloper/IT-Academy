
<?php
/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 1    ////////////////////////////
/////////////////////////////////////////////////////////////////////

/* EXERCICI 1
Programa la funció "resta" que, donats dos paràmetres ens retorni la resta dels dos números. */

function resta($num1, $num2)
{
    return $num1 - $num2;
}


/* EXERCICI 2
Programa una lògica que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell
o imparell mitjançant un missatge per pantalla. */
echo "<h3>N1 - EXERCICI 2: </h3>";

$edad = 30;
if ($edad % 2 == 0) {
    echo "El numero $edad es par.";
} else {
    echo "El numero $edad es impar.";
}


/* EXERCICI 3
Agafa la lògica de l'exercici 2 i encapsulala en una funció de nom parell_o_imparell.
Invoca aquesta funció per a comprovar que funciona correctament. */
echo "<h3>N1 - EXERCICI 3: </h3>";

function parell_o_imparell($num)
{
    if ($num % 2 == 0) {
        echo "El numero $num es par.";
    } else {
        echo "El numero $num es impar.";
    }
}
parell_o_imparell(30);


/* EXERCICI 4
Programa un bucle que compti fins a 10, mostrant cada número per pantalla. */
echo "<h3>N1 - EXERCICI 4: </h3>";

for ($i = 1; $i <= 10; $i++) {
    echo "<strong>$i</strong><br>";
}


/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 2    ////////////////////////////
/////////////////////////////////////////////////////////////////////

/* EXERCICI 1
Per jugar a "l'amagatall"  se'ns ha demanat un programa que compti fins a 10.
Però la persona que comptarà és una mica tramposa y ho farà comptant de dos en dos.
Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla. */
echo "<h3>N2 - EXERCICI 1: </h3>";

function amagatall()
{
    for ($i = 0; $i <= 10; $i += 2) {
        echo "<strong>$i</strong><br>";
    }
}
amagatall();


/* EXERCICI 2
Imagina't que volem que conti fins a un número diferent de 10.
Programa la funció per a que el final del compte estigui parametritzat. */
echo "<h3>N2 - EXERCICI 2: </h3>";

function amagatall2($final)
{
    for ($i = 0; $i <= $final; $i += 2) {
        echo "<strong>$i</strong><br>";
    }
}
amagatall2(16);


/* EXERCICI 3
Per a prevenir oblits al utilitzar la nostra meravellosa funció "amagatall" 
establirem un paràmetre per defecte a 10 en la funció que s'encarrega de fer aquest compte. */
echo "<h3>N2 - EXERCICI 3: </h3>";

function amagatall3($final = 10)
{
    for ($i = 0; $i <= $final; $i += 2) {
        echo "<strong>$i</strong><br>";
    }
}
amagatall3();


/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 3    ////////////////////////////
/////////////////////////////////////////////////////////////////////

/* EXERCICI 1
Ens han demanat un llistat amb tots els anys on es van produir jocs olímpics desde 1960(Roma) 
inclós fins al 2016(Río de Janeiro,també inclós).
Programa un bucle que mostri per pantalla els anys olímpics dins de l'interval esmentat. */
echo "<h3>N3 - EXERCICI 1: </h3>";

function olimpiades()
{
    $anyInici = 1960;
    $anyFins = 2016;
    for ($i = $anyInici; $i <= $anyFins; $i += 4) {
        echo "<strong>$i</strong><br>";
    }
}
olimpiades();

/* EXERCICI 2
Xocolata: 1 euro
Xiclets: 0.50 euros
Carmels: 1.50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus.
Per exemple, que si comprem:
2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total,
tal que així: funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2+0.5+1.5 */
echo "<h3>N3 - EXERCICI 2: </h3>";

/* Defino las constantes con los precios ya que no serán modificadas en la ejecución
del programa y de esta forma es mas sencillo modificarlos */
define('XOCOLATE', 1);
define('XICLET', 0.5);
define('CARMEL', 1.5);


/* Utilizo un array para preparar el programa para una futura ampliación de productos.
Se me ha ocurrido que es una forma más "bonita" de hacerlo :-P */
$arrayProductos = [
    "xocolates" => 2,
    "xiclets" => 1,
    "carmels" => 1
];

function xocolates($cantidad)
{
    return XOCOLATE * $cantidad;
}

function xiclets($cantidad)
{
    return XICLET * $cantidad;
}

function carmels($cantidad)
{
    return CARMEL * $cantidad;
}

function calcular_total($arrayProd)
{
    $total = 0.0;
    // Utilizo un operador nula para que sea más abreviado.
    $total += $arrayProd['xocolates'] ?? 0;
    $total += $arrayProd['xiclets'] ?? 0;
    $total += $arrayProd['carmels'] ?? 0;
    return $total;
}

echo 'El total es: ' . calcular_total($arrayProductos);


/* EXERCICI 3
Implementa la criba d'Eratóstenes dins d'una funció, 
de tal forma que poguem invocar la funció per a un número concret. */
echo "<h3>N3 - EXERCICI 3: </h3>";

function criba_eratostenes($num)
{
    $todos = array();
    $primo = 1;
    echo 2;
    for ($i = 3; $i <= $num; $i += 2) {
        if (!in_array($i, $todos)) {
            echo "<br>", $i;
            $primo++;
            for ($j = $i; $j <= ($num / $i); $j++) {
                array_push($todos, $i * $j);
            }
        }
    }
}

criba_eratostenes(30);

?>