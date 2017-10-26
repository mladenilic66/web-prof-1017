<?php


function dd($data){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	die;

}

$mail = trim(" john@mail.com ");


$new_mail = str_replace("john", "mike", $mail);

$srt1 = "Kad ce pauza?";

//echo str_repeat($srt1, 40);

$rez = substr($srt1, -3, -1);

round(3.1418, 2);



//dd($rez);

//dd($new_mail);

//koji su ulazni podaci
//sta mi se vraca

function nesto($val1, $val2, $val3 = "truc") {

}


nesto('ka', 'asdas', 'bla');

function obrce_stringove($string_za_obrnuti){
	return strrev($string_za_obrnuti);
}



echo obrce_stringove("ZikA");

