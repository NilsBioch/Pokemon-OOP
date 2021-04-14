<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';


$pikachu = new Pokemon('Pikachu', 'Lightning', 60, 60, [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)], new Weakness('Fire', 1.5), new Resistance('Fighting', 20));
$charmeleon = new Pokemon('Charmeleon', 'Fire', 60, 60, [new Attack('Head Butt', 10), new Attack('Flare', 20)], new Weakness('Water', 2), new Resistance('Lightning', 10));

Pokemon::getPopulation();

$pikachu->attackPokemon($charmeleon, $pikachu->attack[0]);
$pikachu->attackPokemon($charmeleon, $pikachu->attack[0]);
$charmeleon->attackPokemon($pikachu, $charmeleon->attack[1]);

Pokemon::getPopulation();
