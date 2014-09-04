<?php
include "BNI.php";

class Pembeli {
    private $nama;
    private $bni;

    public function __construct($nama = "Seseorang", BNI $bni) {
        $this->bni = $bni;
        $this->nama = $nama;
    }

    public function beli($nama = "Barang", $harga = 0) {
        $this->bni->kredit($harga);
        echo "Berhasil melakukan pembelian $nama seharga Rp$harga.\n";
        echo "Terima kasih $this->nama :)\n";
    }
}
