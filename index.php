
        <?php
        // NIVEL 1

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

        ?>