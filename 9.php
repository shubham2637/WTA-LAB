<?php
    $states="Mississippi Alabama Texas Massachusetts Kansas";
    $statesArray=[];
    $states1 = explode(' ',$states);
    foreach ($states1 as $state){
        if(preg_match('/xas$/',($state)))
            $statesArray[0]=($state);
    }
    foreach ($states1 as $state){
        if(preg_match('/^K.*s$/',($state)))
            $statesArray[1]=($state);
        }
        foreach ($states1 as $state){
            if(preg_match('/^M.*s$/',($state)))
                $statesArray[2]=($state);
            }
        foreach ($states1 as $state){
            if(preg_match('/s$/',($state)))
                $statesArray[3]=($state);
        }
        echo "\n The states that ends in xas: ".$statesArray[0];
        echo "<br>";
        echo "\n The states that begins with K and ends in s: ".$statesArray[1];
        echo "<br>";
        echo "\n The states that begins with M and ends in s: ".$statesArray[2];
        echo "<br>";
        echo "\n The states that ends in a: ".$statesArray[3];
        foreach ($statesArray as $element=>$value) {
            echo "<br>";
            print("\n".$value. " is the element ".$element);
        }
        
?>