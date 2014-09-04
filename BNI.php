<?php
class BNI {

    private $saldo;

    public function __construct($pin) {
        // ceritanya cek PIN ke database
        if ($pin == '12345') {
            echo "Berhasil mengaktifkan Kartu BNI!\n";
        } else {
            $pesan = "PIN yang Anda masukkan salah :(";
            throw new Exception($pesan);
        }
    }

    private function catatTransaksi($jenis, $jumlah) {
        echo "Mencatat transaksi $jenis sejumlah $jumlah ke Buku Tabungan.\n";
    }

    public function kredit($jumlah) {
        $this->catatTransaksi('transfer keluar', $jumlah);
        $this->saldo -= $jumlah;
    }

    public function deposit($jumlah) {
        $this->catatTransaksi('deposit dana', $jumlah);
        $this->saldo += $jumlah;
    }

    public function cekSaldo() {
        return $this->saldo;
    }
}
