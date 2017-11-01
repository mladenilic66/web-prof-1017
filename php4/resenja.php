<?php

function konverterDatuma($americkiDatum) {
    $timestamp = strtotime($americkiDatum);
    return date("d. F Y.", $timestamp);
}

//echo konverterDatuma("02/17/2017");

function izlistavanjePonedeljaka() {
    for($i = 0; $i < 60; $i++) {
        $ponedeljak_ts = strtotime("1st January 2017 Monday +{$i} week");
        if(date("Y", $ponedeljak_ts) == 2018) break;
        echo date("d. M. Y. l", $ponedeljak_ts). "<br>";
    }
}

//izlistavanjePonedeljaka();


function webProfDatummi(){
    for($i = 0; $i < 10; $i++) {
        $ts_mon = strtotime("16 October 2017 +{$i} week Monday");
        $ts_wed = strtotime("16 October 2017 +{$i} week Wednesday");

        echo date("d. m. Y l", $ts_mon) . "<br>" .date("d. m. Y l", $ts_wed) . "<br>";
    }
}

webProfDatummi();