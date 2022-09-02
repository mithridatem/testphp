<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul TVA</title>
</head>
<body>
    <h3>Calculer le prix TTC:</h3>
    <form action="" method="post">
        <p>Saisir le prix HT :</p>
        <p><input type="text" name="prixHt"></p>
        <p>Saisir la quantité :</p>
        <p><input type="text" name="qtx"></p>
        <p>Saisir la tva : (saisir 1.2 pour 20%)</p>
        <p><input type="text" name="tva"></p>
        <p><input type="submit" value="calculer" name="calculer"></p>
    </form>
    <p id="result"></p>
</body>
</html>
<?php
    $message = "";
    //test si le bouton submit à été cliqué
    if(isset($_POST['calculer'])){
        //stocke la valeur des super globales POST
        $prixHT = $_POST['prixHt'];
        $qtx = $_POST['qtx'];
        $tva = $_POST['tva'];
        if(!empty($prixHT) AND $qtx !="" AND $tva !=""){
            $message ='Le prix TTC est égal à : '.ttc($prixHT,$qtx,$tva).' €';
        }
        //test si les champs ne sont pas tous remplies
        else{
           $message = 'Veuillez compléter l\'ensemble';
        }
    }
    //test bouton non cliqué
    else{
        $message = "Pour calculer le prix TTC cliquez sur calculer";
    }
    echo $message; 
    //affichage des erreurs
    //exemple de passage de variable de php à js
    /*echo '<script>
        console.log("'.$message.'");
        document.querySelector("#result").textContent = "'.$message.'";   
    </script>';*/

    //fonction calculer le prix TTC
    function ttc($hT,$quantite, $ttva){
        return $hT*$quantite*$ttva;
    }