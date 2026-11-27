<?php

declare(strict_types=1);

require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/PersegiPanjang.php';
require_once __DIR__ . '/Segitiga.php';
require_once __DIR__ . '/Email.php';
require_once __DIR__ . '/WhatsApp.php';
require_once __DIR__ . '/SMS.php';
require_once __DIR__ . '/kirimSemua.php';

$lingkaran = new Lingkaran(7);
$persegi = new Persegi(5);
$persegiPanjang = new PersegiPanjang(3, 4);
$segitiga = new Segitiga(6, 4, 6, 5, 5);

echo "=== Bangun Datar (Abstraction & Polymorphism) ===\n";
/** @var array<int, BangunDatar> $daftarBangun */
$daftarBangun = [$lingkaran, $persegi, $persegiPanjang, $segitiga];

foreach ($daftarBangun as $bangun) {
    echo $bangun->ringkasan() . "\n";
}

echo "\n=== Notifikasi (Interface & Polymorphism) ===\n";
$kanalNotifikasi = [
    new Email('novy@example.com'),
    new WhatsApp('081234567890'),
    new SMS('081234567890'),
];

$hasilKirim = kirimSemua($kanalNotifikasi, 'Jadwal kuliah PBO dimulai pukul 19.00 WIB.');
foreach ($hasilKirim as $baris) {
    echo $baris . "\n";
}
