<?php
    include './formHt.php';
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