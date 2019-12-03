<?php
header('Content-Type:text/plain');
$matrix1=array(
    array(1,2),
    array(4,5),
    array(7,8));
$rc=count($matrix1);
$cc=count($matrix1[0]);
echo "The input matrix is :\n";
for($i=0;$i<$rc;$i++){
    for($j=0;$j<$cc;$j++)
        echo $matrix1[$i][$j]."\t";
    echo "\n";
}
echo "The Transpose matrix is :\n";
for($j=0;$j<$cc;$j++){
    for($i=0;$i<$rc;$i++)
        echo $matrix1[$i][$j]."\t";
    echo "\n";
}
?>