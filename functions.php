<?php
/**
 * functions.php
 * Menyimpan seluruh fungsi logika bisnis (business logic) sistem.
 */

/**
 * Menghitung total nilai aset produk yang ada di gudang.
 * Rumus: Total Aset = Sum(Harga * Stok) untuk seluruh produk.
 * 
 * @param array $productsData Array multidimensi berisi data produk.
 * @return int Total nilai aset.
 */
function hitungTotalNilaiStok(array $productsData): int {
    $totalNilai = 0;

    foreach ($productsData as $item) {
        $totalNilai += ($item['harga'] * $item['stok']);
    }

    return $totalNilai;
}

/**
 * Mengevaluasi apakah stok suatu produk berada dalam kondisi kritis (< 3).
 * 
 * @param int $stok Jumlah stok produk.
 * @return bool True jika stok kritis, false jika tidak.
 */
function isStokKritis(int $stok): bool {
    return $stok < 3;
}

/**
 * Format angka ke format mata uang Rupiah.
 * 
 * @param int|float $angka
 * @return string
 */
function formatRupiah($angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}