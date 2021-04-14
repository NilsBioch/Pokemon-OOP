<?php

class Pokemon {
    public static $pokemonsAlive = 0;

    public function __toString() {
        return json_encode($this);
    }

    public function __construct($name, $energyType, $hitpoints, $health, $attack, $weakness, $resistance )
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$pokemonsAlive++;
    }

    public function returnHealth(){
        echo $this->name .' heeft '. $this->health.' hp </br>';
    }

    public static function getPopulation(){
        echo 'Aantal pokemons levend: '. self::$pokemonsAlive. '</br>';
    }

    public function attackPokemon($rival, $attack){
        if($this->health <= 0){
            echo 'Dode pokemons kunnen niet aanvallen </br> ';
        }else{
            echo $this->name.' valt '.$rival->name.' met '.$attack->name.'</br>';
            $damage = $attack->hitpoints;
            if($rival->weakness->energyType == $this->energyType){
                $damage = $attack->hitpoints * $rival->weakness->multiplier; 
            }else if($rival->resistance->energyType == $this->energyType){
                $damage = $attack->hitpoints = $attack->hitpoints - $rival->resistance->resistanceValue;
            }
            $rival->health = $rival->health - $damage;
            if($rival->health < 0){
                self::$pokemonsAlive--;
                echo $rival->name.' fainted </br>';
            }else{
                $rival->returnHealth();
            }
        }
        
    }
}