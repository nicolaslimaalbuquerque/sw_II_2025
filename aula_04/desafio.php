<?php
    $boletim = array("Nicolas" => "10", "Pedro" => "8", "Mario" => "6", "Nil" => "7");
    foreach ($boletim as $key => $value) {
        sort($value);
        $maior = $value[count($boletim) - 1];
    }
    echo "O maior é " . $maior;
?>