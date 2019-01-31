<?php
    
    $alfabeto = "123456789ABCDEFGHIJKLMNOPQRSTUVXZ";
    $tamanho = 12;
    $letra = "";
    $resultado = "";

    for($i = 0; $i < $tamanho; $i++ ){
        $letra = substr($alfabeto, rand(0, 32), 1);
        $resultado .= $letra;
    }
    

    date_default_timezone_set('America/Recife');
    $agora = getdate();

    $codigo_data = $agora['year'] ."_". $agora['yday'];
    $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds'];

    echo "foto_". $codigo_data ."_". $resultado;
?>