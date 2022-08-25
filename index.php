<?php

$num=1;

while($num<11){
    echo "hebert <br>";
    $num++;
}
/*=============================*/
for($cont = 0; $cont < 10; $cont++){
    echo "hebert <br>";
}
/*=============================*/

do{
    echo "prof. bono <br>";
    $i++;
}while($i < 10);

/*=============================*/
if(5>10){
    echo "é";
}else{
    echo "não é";
}
/*=============================*/
$diaSemana = 0;

switch($diaSemana){

    case 0; 
        echo "Domingo";
        break;
    case 1; 
        echo "segunda";
        break;
    case 2; 
        echo "terça";
        break;
    case 3; 
        echo "quarta";
        break;
    case 4; 
        echo "quinta";
        break;
    case 5; 
        echo "sexta";
        break;
    case 6; 
        echo "sabado";
        break;
    default; 
        echo "numero invalido";    
}
/*
comentários
*/
//  
