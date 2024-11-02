<?php

$umur = 15;

if ($umur < 18 ){
    echo "Kamu tidak diizinkan membuka situs ini!";
    echo "<hr>";
} else {
    echo "Selamat datang di website kami!";
}

$umur = 19;

if ($umur < 18 ){
    echo "<p>Kamu tidak diizinkan membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
    echo "<hr>";
}
echo "<p><strong>By:arif alfazhar";
?>