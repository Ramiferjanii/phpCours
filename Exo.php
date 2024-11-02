<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo</title>
</head>
<body>
    <?php
echo " <h3> exercice 1 </h3> " ;
for ($x = 1; $x <= 20; $x++) {
    if  ($x % 2  == 0 )  {
        echo " $x est un numbre pairs <br>" ;

    
    }
    
}


echo " <h3> exercice 2 </h3>" ;
function pair($x) { 
if  ($x % 2  == 0 ) {
    return true ; 
} else {
    return false ; 
} 

}
for ($x = 1; $x <= 20; $x++) { 
    if (pair($x)) {
        echo " $x eest un numbre pairs<br> " ;
    } else { 
        echo " $x est un numbre inpairs <br>  " ; 
    }
}


$numbers= array(3, 2, 10, 5);
$sum = 0 ;
for ($i= 0 ; $i < count($numbers) ; $i++ ) {
    $sum += $numbers[$i] ; 
}
echo " la somme de l'array et : $sum" ;



    ?>
</body>
</html>