<?php

// main logic
if(isset($_POST['submit'])){

	$img_default = "./images/default.jpg";
	$errors = array();

    $file = $_FILES['file'];
    $file_name = file_validate($_FILES['file']['name']);
    $file_error = $_FILES['file']['error'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_allowed_size = 5242880;

    if (!empty($file_name)) {
		$path_info = pathinfo($file_name);
		$file_name = uniqid("user-image-",TRUE);
		$file_name .= ".".$path_info['extension'];
	}


    if($file_error !== 0){
        $errors[] = "Error while uploading";
        $img = $img_default;
    } elseif($file_size > $file_allowed_size) {
        $errors[] = "Max image size 5MB";
        $img = $img_default;
    } elseif($file_type !== "image/jpeg" && $file_type !== "image/jpg"){
    	$errors[] = "Only JPEG,JPG allowed";
    	$img = $img_default;
    } else {
        $move = move_uploaded_file($file_tmp,"./images/".$file_name);
        $img = "./images/".$file_name;
        $errors[] = "Uploaded Successfully";
    } 
}