<?php

// $marko = array('mazda', 1, 3421, 3.2);
// $marko = ['mazda', 'mercedes', 'yugo', 'mazda'];
// $marko[1] = 'avion';
// // echo count($marko);


// echo '<pre>';
// var_dump($marko);
// echo '</pre>';

// array_push($marko, 'audi');
// array_push($marko, 'audi2');
// array_pop($marko);
// array_shift($marko);
// array_unshift($marko, 'suzuki');

// echo '<pre>';
// print_r($marko);
// echo '</pre>';


// $marko = [
// 	'mazda',
// 	'mercedes',
// 	'yugo',
// 	'mazda',
// 	'honda',
// 	'toyota',
// 	'ford',
// 	'lada',
// 	'lexus',
// 	'prius',
// 	'tesla',
// 	'rover'
// ];

// echo '<pre>';
// print_r($marko);
// echo '</pre>';


// array_splice($marko, 3, 3);


// echo '<pre>';
// print_r($marko);
// echo '</pre>';



// $rodjendani = [
// 	'milica' => '22.05.1984',
// 	'jovan' => '23.06.2001',
// 	'petra' => '18.10.2018'
// ];


// echo '<pre>';
// print_r($rodjendani);
// echo '</pre>';


// echo $rodjendani['marko'];


// $osoba = [
// 	'ime' => 'Pera',
// 	'prezime' => 'Peric',
// 	'zanimanje' => 'automehanicar'
// ];

// echo $osoba['ime'];

// unset($osoba['zanimanje']);

// echo '<pre>';
// print_r($osoba);
// echo '</pre>';




// $meni = [
// 	'hrana' => ['pizza', 'cevap', 'pljeskavica'],
// 	'pice' => []
// ];

// echo '<pre>';
// print_r($meni);
// echo '</pre>';

// echo $meni['hrana'][2];




// $automobili = [
// 	'mazda',
// 	'mercedes',
// 	'yugo',
// 	'mazda',
// 	'honda',
// 	'toyota',
// 	'ford',
// 	'lada',
// 	'lexus',
// 	'prius',
// 	'tesla',
// 	'rover'
// ];

?>



<ul>
	<?php foreach ($automobili as $automobil) : ?>	
	<li><?=$automobil?></li>
	<?php endforeach; ?>
</ul>




