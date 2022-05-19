<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

#waardes initialiseren
$artikel = "a";
$boodschappenlijst = [];


#artikelen in de booschappenlijst plaatsen
while ($artikel !== "q") {
    $artikel = readline("Welk artikel? ");
    if ($artikel == "q") {             #als q wordt ingevoerd springt hij uit de loop
        break;
    }
    $aantal = readline("Aantal? ");
    $boodschappenlijst[$artikel] = $aantal;          #key met value toevoegen aan de array boodschappen
}

#functie die mooi het lijstje toont
function CissyVerhaeghe($boodschappenlijst)
{
    $totaal_aantal = 0;
    ksort($boodschappenlijst);                                #array sorteren
    print "----------B O O D S C H A P P E N----------" . "\n";       #hoofdding printen
    foreach ($boodschappenlijst as $art => $aant) {                 #associative array overlopen
        Align("L", ucfirst($art), 21);                  #artikel links plaatsen en hoofdletter toevoegen
        Align("R", $aant, 21);                          #aantal rechts plaatsen
        print "\n";
        $totaal_aantal += $aant;                                  #Totaal bepalen van de artikelen
    }
    print "-------------------------------------------" . "\n";
    $aantal_lijnen = count($boodschappenlijst);                           #aantal lijnen bepalen
    Align("L", "Aantal lijnen: $aantal_lijnen", 21);   #aantal lijnen links plaatsen
    Align("R", "Totaal: $totaal_aantal", 21);
    print "\n" . "-------------------------------------------" . "\n";
}

#functie die links of rechts uitlijnt
function Align($modus, $tekst, $breedte)
{
    if ($modus == "L") {
        LinksUitlijnen($tekst, $breedte);
    }
    if ($modus == "R") {
        RechtsUitlijnen($tekst, $breedte);
    }
}

#functie die rechts uitlijnt
function LinksUitlijnen($tekst, $breedte)
{
    $lengte_woord = strlen($tekst);
    $aantal_spaties = $breedte - $lengte_woord;
    print $tekst;
    for ($i = 0; $i < $aantal_spaties; $i++) {
        print " ";
    }
}

#functie die links uitlijnt
function RechtsUitlijnen($tekst, $breedte)
{
    $lengte_woord = strlen($tekst);
    $aantal_spaties = $breedte - $lengte_woord;
    for ($i = 0; $i < $aantal_spaties; $i++) {
        print " ";
    }
    print $tekst;
}

CissyVerhaeghe($boodschappenlijst);
