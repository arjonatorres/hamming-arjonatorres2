<?php

/**
 * @author Jose Carlos Arjona
 * @copyright Copyright (c) 2017 Jose Carlos Arjona
 * @license https://www.gnu.org/licenses/gpl.txt
 */

/**
 * Calcula la distancia Hamming entre dos hebras de ADN.
 * @param  string $a La primera hebra
 * @param  string $b La segunda hebra
 * @return int|null    El número de caracteres distintos,
 *                     o null si las hebras tienen distinta longitud.
 */
function distancia(string $a, string $b): ?int
{
    if (($len = mb_strlen($a)) !== mb_strlen($b)) {
        return null;
    }

    $tot = 0;

    for ($i=0; $i < $len; $i++) {
        if (mb_substr($a, $i, 1) !== mb_substr($b, $i, 1)) {
            $tot++;
        }
    }

    return $tot;
}
