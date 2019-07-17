
<?php

class Monster extends Actor{

//!Propierties
private $type;
private $description;
private $health;
private $attack;

//! Methods


//? Construct

public function __construct($type,$description,$health,$attack){


}


//*Functions

public function hurt ($hp){


}
    $player = new Character('Mountain Elf');
    $elfHunter = new Monster ('Seifer of the woods, 140')
    /* A monster is hurt */
    $elfHunter->hurt(50);
    /* Player is hurt */
    $player->hurt(10);
    $elfHunter->hurt(100); /* The monster should be dead now*/


}
?>