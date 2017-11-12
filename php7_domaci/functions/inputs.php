<?php

// //input validation
// function input_validate($data){
//     $data = trim($data);
//     $data = strip_tags($data);
//     $data = html_entity_decode($data);
//     $data = htmlspecialchars($data);

//     if (empty($data)){
//         return false;
//     }
//     return $data;
// }

//input file validation
function file_validate($data){
    $data = strtolower($data);
    $data = str_replace(" ","-",$data);
    $data = preg_replace("/[^A-Za-z0-9._]/","",$data);
    $data = preg_replace("/ +/","-",$data);

    if (empty($data)){
        return false;
    }
    return $data;
}