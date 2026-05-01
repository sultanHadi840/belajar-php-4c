<?php

//  kamu bukan siapa-siapa
function menghitungLuasPersegiPanjang(int $panjang, int $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

$luasPersegi = menghitungLuasPersegiPanjang(4,5);
echo "Luas pesegi panjang adalah: " . $luasPersegi;


// tugas membuat function untuk menghitung luas segitiga
function MenghitungLuasSegitiga(int $alas, int $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

$LuasSegitiga = MenghitungLuasSegitiga(4,7);
echo "Luas segitiga adalah: " . $LuasSegitiga;