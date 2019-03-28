#!/usr/bin/php
<?PHP

instruction de maxence


malluin [17 h 25]
tu utilises preg_replace_callback

ca va te donner un array
avec case 0 ce qui match ta regex
case 1 ce que tu as mis en 1er en ( ) etc
si j'ecris "jambon-joan-42"
et que ma regex c'est
(jambon-)(joan)(-42)
ca va te renvoyer un tableau
[0] = jambon-joan-42
[1]= jambon-
[2]= joan
[3] = -42
donc avec ca tu peux transformer un des bouts que tas match en majuscule
et tu rattaches le reste en minuscule
?>
