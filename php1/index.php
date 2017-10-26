<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?php

    $ime = "Zika";

if($name >  "Bart") {
    echo "Hi Bart";
} else if ($name == "Marge") {
    echo "Hi Marge";
} else if ($name == "Hommer" ) {
    echo "hi Hommer";
} else {
    echo "Hi Stranger";
}

if($name >  "Bart") :
    echo "Hi Bart";
else if ($name == "Marge") :
    echo "Hi Marge";
endif;



switch($name) {
    case "Bart":
        echo "Hi Bart";
        break;
    case "Marge":
        echo "Hi Marge";
        break;
    case "Hommer":
        echo "Hi Hommer";
        break;
    default:
        echo "Hi Stranger";
        break;
}



    //dd($i );
    //echo "Kosrisnicko ime je {$ime}. \" Bas je lep dan danas";

    //echo 5;


//dd($ime);


function dd($expression) {
    echo "<pre>";
    var_dump($expression);
    echo "</pre>";
    die;


}


    ?></h1>

</body>
</html>