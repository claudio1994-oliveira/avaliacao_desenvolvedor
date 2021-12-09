<?php

$file = fopen('dados.txt', 'r');
$fields = [];

$count = -1;

while (!feof($file)){
    $linha = fgets($file);

    $fields[++$count] = explode( "    ",$linha);

   // echo $linha;

    foreach ($fields[$count] as $field){
        echo $field . PHP_EOL;
    }
}
/*
foreach ($fields[$count] as $field){
    echo $field;
} */

//var_dump($fields[0]);

fclose($file);

echo getenv('DBNAME');