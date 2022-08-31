<?php
    function testNbr($nb1, $nb2){
        //test si nbr1 est le plus grand
        if($nb1>$nb2 AND $nb1 !=0 AND $nb2 !=0){
            echo 'Le nombre 1 est le plus grand';
        }
        else if($nb1 == $nb2){
            echo 'Les nombres 1 et 2 sont identiques';
        }
        else{
            echo 'Le nombre 2 est le plus grand';
        }
    }
    function dateToFrench($dateUs):string{
        //tableau qui contient les jours de la semaine
        $tab =['Lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'Samedi', 'Dimanche'];
        //instancier un objet DateTime
        $date = new DateTime($dateUs);
        return $tab[$date->format('N')-1].' '.$date->format('d-n-Y');
    }
    //pour utiliser la fonction dateToFrench
    //echo dateToFrench('2022-08-31'); ou
    //echo dateToFrench($_POST['date']); ou
    //echo dateToFrench($date);

    
?>  