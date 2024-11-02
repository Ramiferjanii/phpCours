<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calcul de la TVA</title>
</head>
<body>
    <form method="post" action="">
        <label for="prix_ht">Prix HT :</label>
        <input type="text" id="prix_ht" name="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? $_POST['prix_ht'] : ''; ?>"><br><br>
        
        <label for="taux_tva">Taux de TVA (%) :</label>
        <input type="text" id="taux_tva" name="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? $_POST['taux_tva'] : ''; ?>"><br><br>
        
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prix_ht = floatval($_POST['prix_ht']);
        $taux_tva = floatval($_POST['taux_tva']);
        
        $montant_tva = $prix_ht * ($taux_tva / 100);
        $prix_ttc = $prix_ht + $montant_tva;
        
        echo '<br><br>';
        echo '<label for="montant_tva">Montant de la TVA :</label>';
        echo '<input type="text" id="montant_tva" value="' . $montant_tva . '" readonly><br><br>';
        
        echo '<label for="prix_ttc">Prix TTC :</label>';
        echo '<input type="text" id="prix_ttc" value="' . $prix_ttc . '" readonly>';
    }
    ?>
</body>
</html>
