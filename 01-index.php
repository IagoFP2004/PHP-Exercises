<?php

/*
 *1. Ejercicio mostrar cadena de caracteres

Usando como base el fichero ejercicios/mostrartexto.php vamos a realizar un script que muestre el nombre de usuario a partir del valor de la variable $s.

El nombre de usuario será el valor de la variable $s concatenada con _user. Por ejemplo:

$s = "rafa" ==> "rafa_user"

Debes mostrar por pantalla el texto usando las tres variantes que vimos en el fichero helloworld.php

    Con comillas simples
    Con comillas dobles
    Usando printf
 * */

$s="Iago";

echo '<p><strong>Comillas Simples: </strong>'.$s.'_user</p>';
echo "<p><strong>Comillas Dobles: </strong>{$s}_user</p>";
printf("<p><strong>Usando printf: </strong>%s_user</p>",$s);

