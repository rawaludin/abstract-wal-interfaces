<?php
class Pembeli {
    private $nama;
    private $payment;

    public function __construct($nama = "Seseorang", PaymentMethod $payment) {
        $this->nama = $nama;
        $this->payment = $payment;
    }

    public function beli($nama = "Barang", $harga = 0) {
        if ($this->payment->cekSaldo() < $harga) {
            echo "Uang tidak cukup\n";
        } else {
            $this->payment->kredit($harga);
            echo "Terima kasih $this->nama :)\n";
            echo "Berhasil melakukan pembelian $nama seharga Rp".number_format($harga).".\n";
        }
    }
}
