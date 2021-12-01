<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



#deze functie bepaalt van een reeks getallen
# initialiseren
$lijst1 = [15, 17, 18, 22, 23, 29, 45, 56, 78, 79, 81, 92, 93];

$lijst2 = [100, 200, 310,350, 360, 390];



// Output


mediaan_MagdalenaSarandeva($lijst1) . "\n";
mediaan_MagdalenaSarandeva($lijst2) . "\n";


print "De median van $lijst1 is %f". "\n";
print "De median van $lijst2 is  %f". "\n";




function mediaan_MagdalenaSarandeva()
{
global $lijst1, $lijst2;

$num = count($ms_a);
$middleVal = floor(($num - 1) / 2);
    if($num % 2) {
        return $ms_a[$middleVal];
    } else {
        $lowMid = $ms_a[$middleVal];
        $highMid = $ms_a[$middleVal + 1];
        return (($lowMid + $highMid) / 2);
    }

}

