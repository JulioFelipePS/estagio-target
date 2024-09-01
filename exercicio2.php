<?php
function isFibonacci($num) {
    if ($num < 0) {
        return false;
    }

    $anterior = 0;
    $posterior = 1;

    while ($posterior <= $num) {
        if ($posterior == $num) {
            return true; 
        }

        $aux = $posterior;
        $posterior += $anterior;
        $anterior = $aux;
    }

    return false; 
}


$numero = 34;

if (isFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.";
} else {
    echo "O número $numero não pertence à sequência de Fibonacci.";
}
?>