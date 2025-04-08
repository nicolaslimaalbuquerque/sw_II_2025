<?php
    $boletim = array("Nicolas" => "8", "Maria" => "9", "Pedro" => "8", "Paulo" => "7");
    $soma = 0;
    foreach ($boletim as $key => $value) {
        $soma += $value;
    }
    $media = $soma / count($boletim);
    echo "A média é " . $media;
?>