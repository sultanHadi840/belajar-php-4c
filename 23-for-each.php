<?php

//Tugas lagi
// for each

$nama = ["Batang", "Hitam", "Kuat"];

foreach($nama as $name) {
    echo "Nama saya adalah : $name" . PHP_EOL;

}

// for each dengan key

$data = [
    "nama" => "Rizky Pratama",
    "Umur" => 200,
    "pekerjaan" => "CEO Keluarga Pratama"
];

foreach($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}