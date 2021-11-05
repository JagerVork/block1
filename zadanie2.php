<?php
$cars=array('Acura','Audi','BMW','Bugatti','Buick','Cadillac','Chery','Citroen','Acura','BMW','Cadillac');
$cars2=array_unique($cars);

print_r($videogame2);


rsort($cars2);
print_r($cars2);
echo "<br/>";


$videogame=array('CS:GO','CoD:MW','BF5','WWZ','GTA','LostArk','R6','WWZ','CoD:MW','LostArk','WWZ');
$videogame2=array_unique($videogame);

print_r($cars2);
echo "<br/>";

arsort($videogame2);
print_r($videogame2);
?>