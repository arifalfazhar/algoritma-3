<?php

class jaket {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$apel = new jaket("Blouse", "hitam");
print_r($apel);

echo "<br><br><strong>By:arif alfazhar";