<?php
    //fonction somme qui retourne un nombre entier (sans les virgules)
    function somme($nbr1, $nbr2, $nbr3):int{
        return $nbr1 + $nbr2 + $nbr3;
    }
    function moyenne($nbr1, $nbr2, $nbr3):int{
        return ($nbr1 + $nbr2 + $nbr3)/3;
    }
    function moyenneV2($nbr1, $nbr2, $nbr3):int{
        return somme($nbr1, $nbr2, $nbr3)/3;
    }
?>
