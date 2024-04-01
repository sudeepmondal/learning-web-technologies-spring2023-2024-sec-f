<?php
$numbers = [10, 20, 30, 40, 50] ;
$searchElement = 50 ;

if (in_array($searchElement, $numbers)) 
{
    echo "$searchElement found.";
} 
else 
{
    echo "$searchElement not found.";
}

?>
