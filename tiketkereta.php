<?php
// Set timezone ke Waktu Indonesia Barat (WIB)
date_default_timezone_set('Asia/Jakarta');

// Buat waktu dari tanggal 24 Desember 2021 dengan fungsi mktime()
$tanggal_keberangkatan = mktime(0, 0, 0, 12, 24, 2021);

// Hitung waktu 60 hari sebelum tanggal keberangkatan
$tanggal_beli = strtotime('-60 days', $tanggal_keberangkatan);

// Format tampilan tanggal menjadi "d F Y"
$tanggal_beli_format = date('d F Y', $tanggal_beli);

// Cetak tanggal pembelian tiket
echo "Anda harus membeli tiket minimal 60 hari sebelum keberangkatan pada tanggal $tanggal_beli_format.";
?>
