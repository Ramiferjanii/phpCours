<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp0</title>
</head>
<body>

<h3> exercice 1</h3>
    <?php


// exercice 1
$x = "7 personnes";
$y = (integer) $x;
$x = "9E3";
$z = (double) $x;

echo "\$x vaut : $x<br>";
echo "\$y vaut : $y<br>";
echo "\$z vaut : $z<br>";
?>
<h3> exercice 2</h3>
<?php   // exercice 2

function bool($val)
{
if($val) echo "TRUE <br />";
else echo "FALSE <br />";
}

$a="0";
echo "\$a vaut : <br>",bool($a);
$b="TRUE";
echo "\$b vaut : <br>",bool($b);
$c=FALSE;
echo "\$c vaut : <br>",bool($c);
$d=($a OR $b);
echo "\$d vaut : <br>",bool($d);
$e=($a AND $c);
echo "\$e vaut : <br>",bool($e);
$f=($a XOR $b);
echo "\$f vaut : <br>",bool($f);
 ?>
<h3>exercice 3</h3>
<?php  // exercice 3 

$number = 15; 

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number est un multiple de 3 et de 5.<br>";
} else {
    echo "$number n'est pas un multiple de 3 et de 5.<br>";
}  ?>
<h3> exercice 4</h3>
<?php  // exrcice 4 
$sexe="F";
$age=43;
if($sexe=="F" and $age>=21 and $age <= 40)
{
echo "Bonjour Madame vous avez entré 21 et 40 ans <br>";
}
else
{
echo "Désolé, vous ne remplissez pas les conditions <br>";
}  ?>
<h3> exercice 5</h3>
<?php  // exercice 5
$compteur=0;
Do
{
$x=rand(0,1000);
$y=rand(0,1000);
$z=rand(0,1000);
$compteur++;
echo $x, "," , $y, "," , $z,"<br>";
}
while($x%2==0 OR $y%2==0 OR $z%2==0);
echo "Résultat obtenu en $compteur coups";
?>
<h3> exercice 6</h3>
<?php  // exercice 6




for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0) {
        echo "  $i multiple a 4 <br>";
    }
}



?>



</body>
</html>