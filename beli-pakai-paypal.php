<?php
require_once "Paypal.php";
require_once "Pembeli.php";

// Melakukan pembelian dengan paypal
try {
    $paymentMethod = new Paypal("morgan@gmail.com", "12345");
    $paymentMethod->deposit(12000000);
    $pembeli = new Pembeli("Morgan", $paymentMethod);
    $pembeli->beli("Poster Smash Full Color", 100000);
    echo "Saldo terakhir Rp".number_format($paymentMethod->cekSaldo())."\n";
    echo $paymentMethod->cekNamaPembayaran();
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
