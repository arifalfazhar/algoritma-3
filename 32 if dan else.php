<?php

//Contoh Penggunaan If
$umur = 20;

if ($umur >= 17) {
    echo "Kamu sudah cukup umur.";
    echo "<hr>";
}

//Contoh Penggunaan If dan Else
$umur = 16;

if ($umur >= 17) {
    echo "Kamu sudah cukup umur.";
} else {
    echo "Kamu belum cukup umur.";
    echo "<hr>";
}

//Kombinasi Dengan ElseIf
$suhu = 30;

if ($suhu < 20) {
    echo "Cuaca dingin.";
} elseif ($suhu <= 30) {
    echo "Cuaca biasa.";
    echo "<hr>";
} else {
    echo "Cuaca panas.";
}
echo "<p><strong>By:arif alfazhar";