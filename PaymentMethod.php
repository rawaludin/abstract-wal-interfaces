<?php
abstract class PaymentMethod {
    public function cekNamaPembayaran() {
        return "Anda melakukan pembayaran dengan ".get_class($this)."\n";
    }
    abstract public function kredit($jumlah);
    abstract public function deposit($jumlah);
    abstract public function cekSaldo();
}
