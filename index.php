
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




/////////////////////////////////////////////////////////////////////
//////////////////////////    NIVEL 3    ////////////////////////////
/////////////////////////////////////////////////////////////////////




?>