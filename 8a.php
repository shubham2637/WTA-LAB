<!DOCTYPE html>
<?php
$a="";
$b="";
$res="";
if(isset($_POST['sub'])){
    $a=$_POST['n1'];
    $b=$_POST['n2'];
    $oper=$_POST['sub'];
    if($oper == '+')
        $res=$a+$b;
    else if($oper == '-')
        $res=$a-$b;
    else if($oper == '*')
        $res=$a*$b;
    else if($oper == '/')
        $res=$a/$b;
}
?>
<html>
    <head>
        <title>Singh 8a</title>
    </head>
    <body>
        <form action="#" method="POST">
            Calculator
        </br>
        Number 1 : <input name="n1" value="<?php echo $a ?>">
        </br>
        Number 2 : <input name="n2" value="<?php echo $b ?>">
        </br>
        Result : <input name="res" value="<?php echo $res ?>">
        </br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="*">
        <input type="submit" name="sub" value="/">
        </form>
    </body>
</html>