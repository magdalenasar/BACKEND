<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

/* function AantalTegels ($lengte_kamer, $breedte_kamer, $tegel_x, $tegel_y) {
    $opptegel = $tegel_x * $tegel_y;
    $oppkamer = $lengte_kamer * $breedte_kamer;
    $aantaltegels = ceil($oppkamer / $opptegel);
    print "Je moet $aantaltegels tegels van $tegel_x x $tegel_y meter kopen voor een kamer van $lengte_kamer op $breedte_kamer meter. \n;
} */

function AantalTegels ($lengte_kamer,$breedte_kamer,$tegel_x,$tegel_y) {
    $aantaltegels = ceil($lengte_kamer/$tegel_x) * ceil($breedte_kamer/$tegel_y);
    print "Je moet $aantaltegels tegels van $tegel_x x $tegel_y meter kopen voor een kamer van $lengte_kamer op $breedte_kamer meter. \n";
}
AantalTegels(7, 5, .3, .3);
AantalTegels(7, 5, 1, 1);