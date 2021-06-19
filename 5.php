<?php

function somaTudo() {
    $lista = func_get_args();
    $qntd = func_num_args();
    $total = 0;

    //for($x = 0; $x<qntd; $x++) {
    //    $total += $lista[$x];
    //}

    foreach($lista as $item) {
        $total += $item;    
    }

    echo "A soma de todos parâmetros é: " . $total;

}

somaTudo(1, 2, 3);

?>