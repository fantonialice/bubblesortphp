<?php

//bubble sort

$size = (int)readline("enter the size of the array: ");

$numbers = [];

// filling the array
for($i=0; $i<$size; $i++){
    $numbers[$i] = (float)readline("enter a number: ");
}
// sorting
for($j=0; $j<$size; $j++)
{
    for($i=0; $i<$size-1; $i++)
    {
        if($numbers[$i+1] < $numbers[$i])
        {
            $aux = $numbers[$i];
            $numbers[$i] = $numbers[$i+1];
            $numbers[$i+1] = $aux;
        }
    }
}

// printing
for($i=0; $i<$size; $i++){
    echo("$numbers[$i]\n");
}