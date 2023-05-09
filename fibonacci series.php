<?php  
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "Fibonacci series";  
echo "<br>";
echo $n1.' '.$n2.' ';  
while ($num < 8 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}

?> 