<?php

class Equipment
{
  private $_type;
  private $_description;
  private $_bonusAtk;
  private $_bonusDef;
  private $_bonusHealth;
  
  //?____________________
  //! Construct
  //?____________________
  public function __construct($type, $description, $atk, $def, $health)
  {
    $this->_type = $type;
    $this->_description = $description;
    $this->_bonusAtk = $atk;
    $this->_bonusDef = $def;
    $this->_bonusHealth = $health;
  }

  //?____________________
  //? Get
  //?____________________

  public function getType(){return $this->_type;}
  public function getBonusAtk(){return $this->_bonusAtk;}
  public function getBonusDef(){return $this->_bonusDef;}
  public function getBonusHealth(){return $this->_bonusHealth;}

  //?____________________
  //? Functions
  //?____________________
  public function __toString()
  {
    $string = 'Desc : ' . $this->_description . '<br>';
    $string .= 'Type : ' . $this->_type . '<br>';

    return $string;
  }

  
}
