<?php
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\gato;

$meuGato = new gato("Salém");

echo $meuGato->getNome();
?>

