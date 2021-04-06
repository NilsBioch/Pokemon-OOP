<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';

$pikachuAttack = new Attack('Enge Hoek', 60);
$pikachu = new Pokemon('Pikachu', 'Lightning', 60, 60, $pikachuAttack, 'weakness', 'resistance');

print_r('<pre>'. $pikachu . '</pre>');