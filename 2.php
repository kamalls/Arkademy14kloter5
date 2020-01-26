<?php

function usernameValidity($name) {

    // Username harus diawali huruf kecil tidak boleh ada huruf besar, 
    // tidak boleh menggunakan special character kecuali '_' dan '.', 
    // minimal 8 karakter dan maksimal 12 karakter 
    $nameArr = str_split($name);
    $regex = preg_replace("/[a-zA-Z0-9\_\.]/", "", $name);

    if (
        $name != strtolower($name) ||
        $regex != "" ||
        count($nameArr) < 8 ||
        count($nameArr) > 12
    ) {
        return false;
    }

    return true;
}

function passwordValidity($password) {

     // merupakan 9 digit alphanumerik
     // minimal terdapat 1 simbol, 1 angka 
    $regexSimbol = preg_replace("/[a-zA-Z0-9]/", "", $password);
    $regexAngka = preg_replace("/[^0-9]/", "", $password);
    $regexHuruf = preg_replace("/[^A-Z]/", "", $password);

    if (
        count(str_split($password)) != 9 ||
        count(str_split($regexSimbol)) < 1 ||
        count(str_split($regexAngka)) < 1
    ) {
        return false;
    }

    return true;
}

var_dump(usernameValidity("arda.budi"));
echo ("<br>\n");
var_dump(passwordValidity("4RD4budis"));