<?php

$name = "echa";
$grade = 80;
$standar = 75;
$remidial = 60;

if($grade > $standar) {
    echo "Lulus\n";
}elseif($remidial > $standar) {
    echo "Lulus jalur Remedial\n";
}else{
    echo "Tidak Lulus\n";
}

// tugas 
// tambahkan logikan perbandingan
if($grade == $standar) {
    echo "Nilai $name standar\n";

}else{
    echo "Nilai $name tidak lulus\n"; 
}

if($grade != $standar) {
    echo "Nilai $name tidak lulus\n";
}else{
    echo "Nilai $name standar\n"; 
}

if($grade >= $standar) {
    echo "Nilai $name standar\n";
}else{
    echo "Nilai $name tidak lulus\n";
}
