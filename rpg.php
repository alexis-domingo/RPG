<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function allowDrop(ev) {
        ev.preventDefault();
        }

        function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inventory</title>

</head>
<body>
<header>

        <h1>Inventory</h1>

</header>    
<main>
    <div id="test">
        <div class="grid">
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
        </div>
        
        <div class="row">
            <img id="hero" src="images/elfpaladin.jpg" alt="">
        </div>

        <div class="grid">
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
        </div>
    </div>

    <div id="test2">
            <div id="grid">
                <div class="row">
                    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
                    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
                </div>
            </div>
    </div>

    //*------
    <div id="test">
        <div class="grid">
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
        </div>
        
        <div class="row">
            <img id="hero" src="images/thor.jpg" alt="">
        </div>

        <div class="grid">
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            <div class="row">
                <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
        </div>
    </div>

    <div id="test2">
            <div id="grid">
                <div class="row">
                    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
                    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
                </div>
            </div>
    </div>
    //*------
        
        <!-- INVENTORY-->
        <div class="grid">
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag1" src="images/sword.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag2" src="images/shield.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag3" src="images/axe.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag4" src="images/sword2.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag5" src="images/chest2.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag6" src="images/chest1.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag7" src="images/chest2.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag8" src="images/chest3.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag9" src="images/chest4.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag10" src="images/chest5.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag11" src="images/pants1.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag12" src="images/pants2.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag13" src="images/pants3.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag14" src="images/pants4.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag15" src="images/pants5.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag16" src="images/gloves1.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag17" src="images/gloves2.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag18" src="images/gloves3.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag19" src="images/gloves4.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag20" src="images/gloves5.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag21" src="images/boots1.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag22" src="images/boots2.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag23" src="images/boots3.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag24" src="images/boots4.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag25" src="images/boots5.jpg" draggable="true" ondragstart="drag(event)" width="100%" height="100%"></div></div>
        </div>

    </div>

        
    </div> 
</main>
<footer></footer>
</body>
</html>




<?php
echo '<br>';
require_once 'Equipment.php';
require_once 'Character.php';
require_once 'Monster.php';
require_once 'Actor.php';



//! Characters
//!____________


$legolas = new Character('Elves');
$thor = new Character('Orcs');
$alexis = new Character('Human');

//! Monsters
//!____________

$elfHunter = new Monster ('Elves');


//! Equipment
//!____________

$sword = new Equipment('Sword', 'Death sword', 10, 0, 0);
$shield = new Equipment('Shield', 'Wood shield', 0, 5, 0);
//?--------------------------------------------------------
$helmet = new Equipment('Helmet', 'Steel helmet', 0, 5, 3);
$chest = new Equipment('Chest', 'Savaran Armor', 0, 5, 5);
$belt = new Equipment('Belt', 'Savaran Armor', 3, 5, 5);
$pants = new Equipment('Pants', 'Savaran Armor', 2, 2, 2);
$boots = new Equipment('Boots', 'Perland Leather Boots', 7, 5, 5);
//?--------------------------------------------------------
$ring = new Equipment('Ring', 'Rubi Ring', 8, 5, 0);
$necklace = new Equipment('Necklace', 'Dark Necklace', 8, 0, 5);


//* FUNCTIONS
//*____________

echo '<hr>';
echo $legolas->getStats();
echo '<hr>';
echo $thor->getStats();
echo '<hr>';
echo $alexis->getStats();
echo '<hr>';




//! Equipment Thor
//!____________
echo $thor->addEquipment($sword) . '<br>';
echo $thor->addEquipment($sword) . '<br>';
//*--------------------------------------------------------
echo $thor->addEquipment($helmet) . '<br>';
echo $thor->addEquipment($chest) . '<br>';
echo $thor->addEquipment($pants) . '<br>';

//! Equipment Legolas
//!____________
echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';
//*--------------------------------------------------------
echo $legolas->addEquipment($helmet) . '<br>';
echo $legolas->addEquipment($chest) . '<br>';
echo $legolas->addEquipment($belt) . '<br>';
echo $legolas->addEquipment($pants) . '<br>';
echo $legolas->addEquipment($boots) . '<br>';
//*--------------------------------------------------------
echo $legolas->addEquipment($ring) . '<br>';
echo $legolas->addEquipment($necklace) . '<br>';

//? Battle Legolas
//?____________

$elfHunter->hurt(50); // monster hurt
$legolas->hurt(10); // player is hurt
$elfHunter->hurt(100); /* The monster should be dead now*/

//! Equipment alexis
//!____________
echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';
//*--------------------------------------------------------
echo $legolas->addEquipment($helmet) . '<br>';
echo $legolas->addEquipment($chest) . '<br>';
echo $legolas->addEquipment($belt) . '<br>';
echo $legolas->addEquipment($pants) . '<br>';
echo $legolas->addEquipment($boots) . '<br>';
//*--------------------------------------------------------
echo $legolas->addEquipment($ring) . '<br>';
echo $legolas->addEquipment($necklace) . '<br>';


//echo $legolas->removeEquipment($sword);



//var_dump($legolas);
//var_dump($thor);

