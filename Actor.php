<?php

    require_once('Character.php');

//* Parent
//*____________________

    class Actor{
        //!Propierties
        protected $_race;
        protected $_attackPoints;
        protected $_defensePoints;
        protected $_healthPoints;
        protected $_warCry;
        protected $_equipments;

        public function __construct($race) //* CHECK // init the race
        {
            $this->_race = $race;

        }

    }

    

    

?>