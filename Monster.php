
<?php

require_once('Actor.php');

class Monster extends Actor{

//!Propierties

private $_type;
private $_description;
private $_health;
private $_attack;

//! Methods

//? Construct
public function __construct($race){
  

        //! parent:: __construct

    $this->_description;
    $this->_health = 140;
    $this->_attack = 6;
}

//*Functions

public function hurt ($legolas){ //*CHECK

    $legolas->health  //get and set for health


    

}


public function loot (){ //* CHECK

}

}
?>