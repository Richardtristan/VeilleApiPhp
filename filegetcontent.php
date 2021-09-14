<?php

$id = 151;
$data = file_get_contents("https://pokeapi.co/api/v2/pokemon/$id/");
$json = json_decode($data);



var_dump($data);
echo '<h2>habilities</h2>';
foreach($json->abilities as $k) {
    echo $k->ability->name.'<br>';
}

echo '<h2>type</h2>';
echo $json->types[0]->type->name;

echo '<h2>image</h2>';
echo '<img src="'.$json->sprites->back_default.'" width="200">';
echo '<img src="'.$json->sprites->front_default.'" width="200">';




?>

