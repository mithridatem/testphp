<?php
    $tab = [5, 11, 8, 22, 36, 42, 3, 78, 1, 29];
    //retourne la valeur minimale d'un tableau
    function minValue($tableau){
        $min = $tableau[0];
        foreach($tableau as $value){
            if($value<$min){
                $min = $value;
            }
            else{
                $min = $min;
            }
        }
        return $min;
    }
    //retourne la valeur maximale d'un tableau
    function maxValue($tableau){
        $max = 0;
        foreach($tableau as $value){
            if($value<$max){
                $max = $value;
            }
            else{
                $max = $max;
            }
        }
        return $max;
    }
    echo 'La valeur minimale est : '.minValue($tab).'<br>';    
    echo 'La valeur maximamle est : '.maxValue($tab).'<br>';    
?>
