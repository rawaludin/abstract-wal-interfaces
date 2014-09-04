<?php
require_once "DebitBNI.php";
require_once "Pembeli.php";

// Melakukan pembelian dengan DebitBNI
try {
    $bniKu = new DebitBNI("12345");
    $bniKu->deposit(20000000);
    $rahmat = new Pembeli("Rahmat Awaludin", $bniKu);
    $rahmat->beli("Buku Menyelami Framework Laravel", 250000);
    echo "Saldo terakhir Rp".$bniKu->cekSaldo()."\n";
    echo $bniKu->cekNamaPembayaran();
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
