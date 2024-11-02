<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
    <form action="" method="post" name="adresse" >
        <label for="nom"> Nom</label>
        <input type="text" id="nom" > <br>
        <label for="mail">Mail</label> 
        <input type="text" id="mail" name="email"> <br>




        <input type="submit" value="envoyer" name="envoyer" >

    </form>
    <?
    f ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n =($_POST['nom']);
        $m = ($_POST['mail']);
    }
echo " votre nom et .$n <br>" ; 
echo "votre mail et .$m <br>" ; 



?>
</body>
</html>