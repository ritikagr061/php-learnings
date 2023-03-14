<?php
echo 2+2;

$num=5;
echo "this is ".$num." hello";


function hey($x)
{
    echo "number passed is ".$x;
    return 2*$x;
}

$x=hey(50);
echo $x;

echo "<br>";

if($x>60)
{
    echo "the number is largge enough";

}
else
    echo "number is not large enough";
echo "hey";