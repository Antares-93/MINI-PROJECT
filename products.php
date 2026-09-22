<?php
/**
 * products.php
 * Bertindak sebagai mock database menggunakan Multidimensional Array PHP.
 */

$products = [
    [
        'id'        => 'PRD-001',
        'nama'      => 'Beras Premium 5kg',
        'kategori'  => 'Sembako',
        'harga'     => 75000,
        'stok'      => 15,
        'deskripsi' => 'Beras putih kualitas super pulen dan wangi.'
    ],
    [
        'id'        => 'PRD-002',
        'nama'      => 'Minyak Goreng 2L',
        'kategori'  => 'Sembako',
        'harga'     => 34000,
        'stok'      => 2, // Stok Kritis (< 3)
        'deskripsi' => 'Minyak goreng kelapa sawit murni kemasan isi ulang.'
    ],
    [
        'id'        => 'PRD-003',
        'nama'      => 'Gula Pasir 1kg',
        'kategori'  => 'Sembako',
        'harga'     => 17500,
        'stok'      => 8,
        'deskripsi' => 'Gula murni kristal putih pilihan.'
    ],
    [
        'id'        => 'PRD-004',
        'nama'      => 'Kopi Bubuk Robusta 250g',
        'kategori'  => 'Minuman',
        'harga'     => 28000,
        'stok'      => 1, // Stok Kritis (< 3)
        'deskripsi' => 'Kopi olahan biji kopi pilihan dengan aroma kuat.'
    ],
    [
        'id'        => 'PRD-005',
        'nama'      => 'Susu UHT Full Cream 1L',
        'kategori'  => 'Minuman',
        'harga'     => 19500,
        'stok'      => 12,
        'deskripsi' => 'Susu segar kaya kalsium dan vitamin.'
    ],
    [
        'id'        => 'PRD-006',
        'nama'      => 'Mie Instan Goreng (Kardus)',
        'kategori'  => 'Makanan',
        'harga'     => 112000,
        'stok'      => 0, // Stok Kritis (< 3)
        'deskripsi' => 'Satu dus isi 40 bungkus mie goreng lezat.'
    ]
];