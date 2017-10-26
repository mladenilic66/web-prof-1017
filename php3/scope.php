<?php

$ime = "Zika";
$prezime = "Petrovic";

define('POREZ', '10%');


function nesto(){
	global $ime, $prezime;
	$godiste = 1980;

	echo $ime . " " . $prezime;
	echo POREZ;
	return $godiste;
}


//echo $ime2;
//nesto();

$ime2 = "Mika";


function nesto2($ime2) {
	global $ime2;
	echo $ime2;
	$ime2 = "Pera";
}

nesto2($ime2);
echo $ime2; 


/*
ZADATAK 1. 

Napisi jednostavnu funkciju koja ehuje "Zdravo strance" ako joj se ne posalje ni jedan parametar, a ako se posalje jedan parametar ($ime) da ehuje "Zdravo Ime"

ZADATAK 2. 

Napisi funkciju koja prima jedan parametar (broj godina) i u zavisnosti od broj a godina ispisuje poruke 

- 0 - 18 - zabranjeno ispijanje alkohola
- 19 - 65 - dozvoljeno napijanje
- preko 65 ne preteruj sa alkoholom


ZADATAK 3. 
Napisi funnkciju koja uzima bilo koji broj i ***vraca*** faktorijel od tog broja. Faktorijel je npr. od broja 5 = 5 * 4 * 3 * 2 * 1 tj 121

ZADATAK 4
Napisi fuinkciju koja prima array dana u nedelji sa temperaturom (u pitanju je asocijativni array). Funkcija zatim treba da odstampa na ekranu tabelu koja izgleda ovako
-----------------
Ponedeljak | 20C
Utorak     | 15C
-----------------

ZADATAK 5
Napisi funkciju koja prima iznos i zeljenu valutu (EUR ili RSD) i koja vraca konvertovano u tu drugu valutu










