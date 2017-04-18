<?php

function getLinks($link){
    $page = file_get_contents($link);
    
    //print_r("<b>Página principal: ".$link."</b><br/>");
    
    preg_match_all('/href=\"(.*?)\"/', $page, $matches);

    for ($i = 0; $i < count($matches[1]); $i++) {
        if (preg_match('/^(http:\/\/)[0-9]+/',$matches[1][$i])){
            print_r($matches[1][$i].'<br/>');
        }
    }
    
    //print("<hr><br><br><br>");
    
}

//$page = file_get_contents('http://servicioprofesionaldocente.sep.gob.mx/ms/evaluaciondiagnostica_2016/inicio/'); 

//show_source('http://servicioprofesionaldocente.sep.gob.mx/ms/evaluaciondiagnostica_2016/inicio/'); 

//$page = 'href="pilar"';

/*preg_match_all('/href=\"(.*?)\"/', $page, $matches);

for ($i = 0; $i < count($matches[1]); $i++) {
    $key = $matches[1][$i];
    $value = $matches[2][$i];
    $key = $value;
    print_r($matches[1][$i].'<br/>');
}*/

//print_r($matches);


$arreglo1=["http://servicioprofesionaldocente.sep.gob.mx/ms/permanenciadocentes2016_1/guias_academicas_planeacion/"];

for($i=0; $i<count($arreglo1); $i++){
    getLinks($arreglo1[$i]);
}



?>

