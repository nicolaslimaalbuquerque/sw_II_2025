<?php
    $pessoa = array("nome" => "Nicolas", "idade" => "17", "cidade" => "Ribeirão Pires");

    $pessoa["profissao"] = "Estudante";

    $amigos = ["Paulo", "Vinicius", "Tiago"];

    $dados = array_merge($pessoa, $amigos);
    print_r($dados);
?>