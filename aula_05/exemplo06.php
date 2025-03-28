<?php
    $empregados = array('empregados' => array(
        array(
            'nome' => 'Enzo',
            'idade' => 17,
            'genero' => 'M'
        ),
        array(
            'nome' => 'Pedro',
            'idade' => 17,
            'genero' => 'M'
        ),
        array(
            'nome' => 'Nicolas',
            'idade' => 17,
            'genero' => 'M'
        )));
    $json_str = json_encode($empregados);
    echo "$json_str";
?>