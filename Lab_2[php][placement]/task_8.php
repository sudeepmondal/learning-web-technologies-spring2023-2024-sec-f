<?php
$array = 
[
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "The Array to Declare:\n" ;
foreach ($array as $row) 
{
    foreach ($row as $element) 
    {
        echo $element . " " ;
    }
    echo "\n";
}

echo "\nShapes to Print:\n";
for ($i = 3; $i >= 1; $i--) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo $j . " " ;
    }
    echo "\n" ;
}

echo "\nShapes to Print:\n" ;
$words = 'A' ;
for ($i = 0; $i < 3; $i++) 
{
    for ($j = 0; $j <= $i; $j++) 
    {
        echo $words++ . " " ;
    }
    echo "\n" ;
}

?>