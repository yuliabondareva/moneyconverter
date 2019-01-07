<?php

function allCurrencies() {

    global $db;

    $all_currencies = mysqli_query($db, "SELECT * 
        FROM currencies 
        WHERE `flag` = 1
        ORDER BY `currencies`");

    return $all_currencies;
}

$all_currencies = allCurrencies();

function allCurrence() {

    global $db;

    $all_currence = mysqli_query($db, "SELECT * 
        FROM currencies 
        ORDER BY `currencies`");

    return $all_currence;
}

$all_currence = allCurrence();