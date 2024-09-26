<?php

$year = 44;
function isLeapYear($year) {
    if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

if (isLeapYear($year)) {
    echo "$year adalah tahun kabisat.";
} else {
    echo "$year bukan tahun kabisat.";
}