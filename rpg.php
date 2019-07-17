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

    
    <title>Document</title>

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

        <div class="grid">
            <div class="row">
                <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
                <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div> 
            </div>
            
        </div>
    </div>
        
        <div class="grid">
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag1" src="images/sword.jpg" draggable="true" ondragstart="drag(event)" width="70" height="70"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag2" src="images/shield.jpg" draggable="true" ondragstart="drag(event)" width="70" height="70"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag3" src="images/axe.jpg" draggable="true" ondragstart="drag(event)" width="70" height="70"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"><img id="drag4" src="images/sword2.jpg" draggable="true" ondragstart="drag(event)" width="70" height="70"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
        </div>
        <div class="row">
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
            <div class="box"><div class="inner" ondrop="drop(event)" ondragover="allowDrop(event)"></div></div>
        </div>

    </div>

        
    </div> 
    



</main>
<footer></footer>
</body>
</html>




<?php
echo '<br>';
require_once 'Character.php';
require_once 'Equipment.php';



$legolas = new Character('Elves');
$thor = new Character('Orcs');
$alexis = new Character('Human');


$sword = new Equipment('Sword', 'Death sword', 10, 0, 0);
$shield = new Equipment('Shield', 'Wood shield', 0, 5, 0);


$helmet = new Equipment('Helmet', 'Steel helmet', 0, 5, 3);
$chest = new Equipment('Chest', 'Savaran Armor', 0, 5, 5);
$belt = new Equipment('Belt', 'Savaran Armor', 3, 5, 5);
$pants = new Equipment('Pants', 'Savaran Armor', 2, 2, 2);
$boots = new Equipment('Boots', 'Perland Leather Boots', 7, 5, 5);

$ring = new Equipment('Ring', 'Rubi Ring', 8, 5, 0);
$necklace = new Equipment('Necklace', 'Dark Necklace', 8, 0, 5);


echo '<hr>';
echo $legolas->getStats();
echo '<hr>';
echo $thor->getStats();
echo '<hr>';

echo $thor->addEquipment($sword) . '<br>';
echo $thor->addEquipment($sword) . '<br>';
echo $thor->addEquipment($helmet) . '<br>';
echo $thor->addEquipment($chest) . '<br>';
echo $thor->addEquipment($pants) . '<br>';


echo $legolas->addEquipment($sword) . '<br>';
echo $legolas->addEquipment($shield) . '<br>';
echo $legolas->addEquipment($helmet) . '<br>';
echo $legolas->addEquipment($chest) . '<br>';
echo $legolas->addEquipment($belt) . '<br>';
echo $legolas->addEquipment($pants) . '<br>';
echo $legolas->addEquipment($boots) . '<br>';

echo $legolas->addEquipment($ring) . '<br>';
echo $legolas->addEquipment($necklace) . '<br>';




//echo $legolas->removeEquipment($sword);



//var_dump($legolas);
//var_dump($thor);

