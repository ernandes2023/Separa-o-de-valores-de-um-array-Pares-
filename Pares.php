<?php

echo '<h1 align = center> Números pares </h1>';

$vetor1 = [];
$pares = [];
$impares = [];
$j = 20;
$numero=rand();

for($i = 0; $i <= $j; $i++)

{

    $vetor[] = $i+$numero;

};
foreach($vetor as $n)
{
    if($n % 2 == 0 )
    {
        $pares[] = $n;
        foreach($pares as $m => $z){

            echo ' Posição: ' . $m . '   é par : ' . $z . '<br>';

        }  
    }
    /*else
    {
        $impares[] = $n;
        foreach($impares as $o => $p){

            echo ' Posição: ' . $o .  '   é impar : ' . $p . '<br>';

        }  
    }*/
}

?>