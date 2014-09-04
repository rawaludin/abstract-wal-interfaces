<?php
require_once "Pembeli-DI.php";

// Melakukan pembelian dengan BNI
try {
    $bniKu = new BNI('12345');
    $bniKu->deposit(20000000);
    $rudy = new Pembeli("Rudy", $bniKu);
    $rudy->beli("Buku Menyelami Framework Laravel", 250000);
    echo "Saldo terakhir Rp".$bniKu->cekSaldo()."\n";
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
