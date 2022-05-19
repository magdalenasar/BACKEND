<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

#dit programma berekent hoeveel tegels er nodig zijn om de vloer van een kamer te betegelen
#voor een kamer en tegels met opgegeven afmetingen
$lengte_kamer = 7;
$breedte_kamer = 5;
$tegel_x = 0.3;
$tegel_y = 0.3;

$tegelsindelengte  = ceil( ($lengte_kamer * 100) / ($tegel_x * 100) );  // $tegelsindebreedte = 24
$tegelsindebreedte  = ceil( ($breedte_kamer * 100) / ($tegel_y * 100) ); //$tegelsindebreedte =  17

$aantal_tegels = $tegelsindelengte * $tegelsindebreedte;

$bericht = "Je moet %s tegels van %s x %s meter kopen voor een kamer van %s op %s meter.\n";
printf( $bericht, (int)$aantal_tegels, $tegel_x, $tegel_y, $lengte_kamer, $breedte_kamer);

print "In de lengte: $tegelsindelengte tegels\n";
print "In de breedte: $tegelsindebreedte tegels\n";
