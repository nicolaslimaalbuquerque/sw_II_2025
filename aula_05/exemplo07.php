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

    //converte para uma string Json
    $json_str = json_encode($empregados);

    //exibe a string json
    echo "$json_str";
?>