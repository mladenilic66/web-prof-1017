<?php

//echo time();

$rodjendan =  mktime(8,0,0, 9, 24, 1989);
$rodjendan = strtotime("Feb 23 1986");
$razlika = time() -  $rodjendan;

$uDanima = round($razlika / 60 / 60 / 24 / 365, 1);
//echo "Broj dana koji je prosao od tvog rodjenja je {$uDanima}";


$datum = strtotime("23 April 2018");
$gd = getdate($datum);

//echo date("l H:i");
echo "<pre>";
var_dump($gd);
?>
1. nadjite nacin da preko varijable ubacite datum u americkom formatu datuma (mesec/dan/godina) a da korisniku na ekranu ehujete srpski format tog istog datuma napravite malu funkciju koja ovo radi
Americko
08/23/2017
Srpski
23. 08. 2017.

2. Napravite funkciju koja ce da izlista sve ponedeljke u 2017 godini

3. Napravite funkciju koja ce da izlista datume svih kurseva Web Prof sa pretpostavkom da je kurs poceo 16. oktobra i da se odrzava ponedeljkom i sredom, i da traje 10 nedelja





