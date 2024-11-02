<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2</title>
</head>
<body>
    <?php 
echo " <h3> exercie 1</h3>" ; 
$array = array();
for ($i = 0; $i < 26; $i++) {
    $array[$i + 11] = chr($i + 65); 
}


echo "Lecture avec une boucle for:<br>";
for ($i = 11; $i <= 36; $i++) {
    echo "Indice: $i, Valeur: " . $array[$i] . "<br>";
}


echo "<h3>Lecture avec une boucle foreach:</h3><br>";
foreach ($array as $index => $value) {
    echo "Indice: $index, Valeur: $value<br>";
}

echo "  <h3> exercice 2 </h3> " ;


$numbers = array(3,2, 10, 5) ;
$sum = 0 ;
for ($i= 0 ; $i < count($numbers) ; $i++ ) {
    $sum += $numbers[$i] ; 
}
echo " la somme de l'array et : $sum" ;


$cars = array("Volvo", "BMW", "Toyota");



// with function 
echo " <h6>with function</h6>" ; 
function somme($number) {
    $sums = 0  ;
    for ( $i = 0 ; $i< count($number) ; $i++) {
        $sums += $number[$i] ; 

    }
    return $sums ;
}

$number = array (2 , 4 , 4 , 7) ; 
echo " la somme de l'array avec function et :" .somme($number) ; 







?>
</body>
</html>