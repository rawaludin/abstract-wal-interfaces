<?php
require_once "Paypal.php";
require_once "Pembeli.php";

// Melakukan pembelian dengan paypal
try {
    $paypalSaya = new Paypal("rahmat.awaludin@gmail.com", "12345");
    $paypalSaya->deposit(12000000);
    $rahmat = new Pembeli("Rahmat Awaludin", $paypalSaya);
    $rahmat->beli("Buku Menyelami Framework Laravel", 250000);
    echo "Saldo terakhir Rp".$paypalSaya->cekSaldo()."\n";
    echo $paypalSaya->cekNamaPembayaran();
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
