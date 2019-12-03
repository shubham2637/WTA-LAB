<?php
header('Content-type:Text/plain');
$matrix1=array(
    array(1,2),
    array(4,5),
    array(7,8));
$matrix2=array(
    array(1,2),array(4,5));
$rc1=count($matrix1);
$cc1=count($matrix1[0]);
echo "The First input matrix is : \n";
for($i=0;$i<$rc1;$i++){
    for($j=0;$j<$cc1;$j++)
        echo $matrix1[$i][$j]."\t";
    echo "\n";
}
$rc2=count($matrix2);
$cc2=count($matrix2[0]);
echo "\nThe Second input matrix is : \n";
for($i=0;$i<$rc2;$i++){
    for($j=0;$j<$cc2;$j++)
        echo $matrix2[$i][$j]."\t";
    echo "\n";
}
echo "\nMATRIX MULTIPLICATION\n";
if($cc1 != $rc2)
    echo "Error\n";
else{
    $res=[];
    for($i=0;$i<$rc1;$i++){
        for($j=0;$j<$cc2;$j++){
            $sum=0;
            for($k=0;$k<$cc1;$k++)
                $sum=$sum+$matrix1[$i][$k]+$matrix2[$k][$j];
            $res[$i][$j]=$sum;
        }
    }
    echo "\nThe Resultant input matrix is : \n";
for($i=0;$i<$rc1;$i++){
    for($j=0;$j<$cc2;$j++)
        echo $res[$i][$j]."\t";
    echo "\n";
}
}
?>