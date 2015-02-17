<?php
require_once 'PaymentMethod.php';

class Paypal extends PaymentMethod {

    private $balance;

    public function __construct($email, $password) {
        // Ceritanya ini akses ke database
        if ($email == "morgan@gmail.com" & $password == "12345") {
            $this->email = $email;
            echo "Berhasil login ke Paypal!\n";
        } else {
            $pesan = "User ada user dengan username/password tersebut :(";
            throw new Exception($pesan);
        }
    }

    private function kirimNotifikasi($pesan = "Informasi penting") {
        echo "Mengirim email notifikasi $pesan ke $this->email \n";
    }

    public function kredit($jumlah) {
        $this->kirimNotifikasi('pengeluaran dana');
        $this->balance -= $jumlah;
    }

    public function deposit($jumlah) {
        $this->kirimNotifikasi('penerimaan dana');
        $this->balance += $jumlah;
    }

    public function cekSaldo() {
        return $this->balance;
    }
}
