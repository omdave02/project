<?php  
function checkLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year)));  
}  
  
for($year=1991; $year<2016; $year++)  
{  
    If (checkLeap($year))  
    {  
        echo "$year : LEAP YEAR<br />\n";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />\n";  
    }  
}  
?>  


