<?php
header('Content-type:Text/plain');
$matrix1=array(
    array(1,2),
    array(4,5),
    array(7,8));
$matrix2=array(
    array(1,2),
    array(4,5),
    array(7,8));
$rc=count($matrix1);
$cc=count($matrix1[0]);
echo "The First input matrix is : \n";
for($i=0;$i<$rc;$i++){
    for($j=0;$j<$cc;$j++)
        echo $matrix1[$i][$j]."\t";
    echo "\n";
}
$rc=count($matrix2);
$cc=count($matrix2[0]);
echo "\nThe Second input matrix is : \n";
for($i=0;$i<$rc;$i++){
    for($j=0;$j<$cc;$j++)
        echo $matrix2[$i][$j]."\t";
    echo "\n";
}
if(count($matrix1)==count($matrix2) && count($matrix1[0])==count($matrix2[0])){
    echo "\nThe sum of matrix is:\n";
    for($i=0;$i<$rc;$i++){
        for($j=0;$j<$cc;$j++)
            echo $matrix2[$i][$j]+$matrix1[$i][$j]."\t";
        echo "\n";
    }
}
else
    echo "Addition not possible";
?>