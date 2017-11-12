<?php
    include_once "functions/inputs.php";
    require_once "process.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>

    <div class="wrapper">
		<div class="content">

			<div class="image">
			<?php if (isset($_POST['submit'])): ?>
				<img src='<?=$img?>' alt='user-img'>
			<?php else: ?>
				<img src='./images/default.jpg' alt='user-img'>
			<?php endif; ?>
		    </div>

			<div class="form">
				<form action="" method="post" enctype="multipart/form-data">
	                <div class="inner file">
				        <input type="file" name="file" class="fa fa-upload custom-file-input" aria-hidden="true">
	                </div>
	                <div class="inner submit">
				        <input type="submit" name="submit" class="submit-btn">
				    </div>
				</form>
			</div>
		</div>

        <div class="msg">

		<?php if (isset($_POST['submit'])): ?>

			<?php foreach ($errors as $error): ?>
			    <p class="info"><?=$error?></p>
			<?php endforeach; ?>

			<div class="remove">
			    <i class="fa fa-times" aria-hidden="true"></i>
		    </div>

		<?php endif; ?>

		</div>
	</div>

</body>
</html>