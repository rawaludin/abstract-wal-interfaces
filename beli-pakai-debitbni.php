<?php
require_once "DebitBNI.php";
require_once "Pembeli.php";

// Melakukan pembelian dengan DebitBNI
try {
    $paymentMethod = new DebitBNI("12345");
    $paymentMethod->deposit(20000000);
    $rahmat = new Pembeli("Rahmat Awaludin", $paymentMethod);
    $rahmat->beli("Buku Menyelami Framework Laravel", 250000);
    echo "Saldo terakhir Rp".number_format($paymentMethod->cekSaldo())."\n";
    echo $paymentMethod->cekNamaPembayaran();
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
