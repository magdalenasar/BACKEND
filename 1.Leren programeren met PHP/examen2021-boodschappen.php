<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$artikel = "";  #definieren van var(s)  ; lege "" alles wat geschrijven is, wordt opgevangd
$lijst = [];    # ass array

// INPUT DOOR DE GEBRUIKER
while ( true )  // kan ook: ($artikels !== q)
{
    $artikel =readline("Welk artikel?");  //bv. Bananen
    if ( $artikel == "q") break;

    $aantal = readline("Aantal?");   //bv.3
    $lijst[$artikel] = $aantal;                   
}

// OUTPUT GENEREREN
MagdalenaSarandeva($lijst);

function MagdalenaSarandeva($lijst)
{
    ksort($lijst);  //sorteren op artikels

    print "\n";
    print "------------BOODSCHAPPEN-------------\n";

    $totaal = 0;

    //alle artikels in de lijst overlopen
    foreach ( $lijst as $artikel => $aantal )
    {
        print Align( ucfirst($artikel),30) . Align( $aantal, 20, "R") . "\n";
        $totaal +=$aantal;
    }

    print "--------------------------------------\n";
    print Align("Aantal lijnen:" . count($lijst),30) . Align("Totaal:$totaal",20,"R") . "\n";
    print "--------------------------------------\n\n";
}

function Align($tekst, $breedte, $modus = "L")
{
    /**
     * Deze functie lijnt een opgegeven tekst uit op de opgegeven
     * breedte; de ruimte links of rechts van de tekst wordt opgevuld met spaties
     */
    #van de gewenste breedte de lengte van de tekst aftrekken
    $breedte = $breedte - strlen($tekst);

    #eerst een aantal spaties en dan de tekst zelf printen
    $spaties = "";
    for ( $x = 0; $x < $breedte; $x++)
    {
        $spaties .= "";
    }
    if ($modus == "L") $newtext = $tekst .$spaties;
    if ($modus == "R") $newtext = $spaties .$tekst ;

    return $newtext;
}
