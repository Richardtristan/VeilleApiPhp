<?php

$id = 151;
$data = file_get_contents("https://pokeapi.co/api/v2/pokemon/$id/");
$json = json_decode($data);
echo "<img src='{$json->sprites->front_default}'>";
echo $json->name."<br>";
$abilities = $json->abilities;
foreach ($abilities as $ability){
echo $ability->ability->name;
}

// var_dump($data);


