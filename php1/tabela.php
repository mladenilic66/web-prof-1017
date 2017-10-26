<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabela</title>
</head>
<body>

<h1>Ovo je nasa tabela korisnika:</h1>

<?php

$users = [
	[
		'name' => 'Lepa',
		'lastname' => 'Lukic',
		'email' => 'peva@gmail.com'
	],
	[
		'name' => 'Ana',
		'lastname' => 'Bekuta',
		'email' => 'bekuta@gmail.com'
	],
	[
		'name' => 'Miroslav',
		'lastname' => 'Lukic',
		'email' => 'miro@gmail.com'
	],
	[
		'name' => 'Aco',
		'lastname' => 'Lukas',
		'email' => 'kokain81@gmail.com'
	],
	[
		'name' => 'Aco',
		'lastname' => 'Pejovic',
		'email' => 'peja22@gmail.com'
	],
];

?>

<ul>
	<?php foreach($users as $user) : ?>
	<li>
		<?php
			echo $user['name'].' '.$user['lastname'].' - '.$user['email'];
		?>
	</li>
	<?php endforeach; ?>
</ul>





<table border="1">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Lastname</th>
		<th>Email</th>
	</tr>
	<?php foreach ($users as $key => $user) : ?>
		<tr>
			<td><?=$key?></td>
			<td><?=$user['name']?></td>
			<td><?=$user['lastname']?></td>
			<td><?=$user['email']?></td>
		</tr>
	<?php endforeach; ?>
</table>






<?php


$string = 'mazda, honda, toyota, ford, mercedes, lexus';

$array = explode(', ', $string);

?>

<pre><?=print_r($array)?></pre>

<?php
	echo implode(' | ', $array);
?>
	
</body>
</html>