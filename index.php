<?php
/**
 * index.php
 * Berfungsi merajut Data Layer dan Processing Layer serta merender tampilan HTML.
 */

// Memuat data dari Data Layer dan logika dari Processing Layer
require_once 'products.php';
require_once 'functions.php';

// Menghitung total nilai aset gudang menggunakan fungsi dari Processing Layer
$totalAsetGudang = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information System</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        header {
            margin-bottom: 25px;
            border-bottom: 2px solid #eaeaea;
            padding-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            color: #1a252f;
            margin-bottom: 5px;
        }

        p.subtitle {
            color: #7f8c8d;
            font-size: 14px;
        }

        .summary-card {
            background-color: #ebf5ff;
            border-left: 5px solid #3182ce;
            padding: 15px 20px;
            border-radius: 6px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .summary-card h3 {
            font-size: 14px;
            color: #2b6cb0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .summary-card .amount {
            font-size: 22px;
            font-weight: bold;
            color: #2c5282;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }

        th {
            background-color: #f7fafc;
            color: #4a5568;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        /* Highlight untuk baris stok kritis (< 3) */
        tr.stok-kritis {
            background-color: #fff5f5;
        }

        tr.stok-kritis:hover {
            background-color: #fed7d7 !important;
        }

        tr:hover {
            background-color: #f8fafc;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            font-size: 11px;
            font-weight: bold;
            border-radius: 4px;
            text-transform: uppercase;
        }

        .badge-danger {
            background-color: #e53e3e;
            color: white;
        }

        .badge-normal {
            background-color: #38a169;
            color: white;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #a0aec0;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Product Information System</h1>
        <p class="subtitle">Arsitektur 3-Tier Sederhana (Data, Processing, & Presentation Layer)</p>
    </header>

    <!-- Ringkasan Total Aset Gudang -->
    <div class="summary-card">
        <div>
            <h3>Total Nilai Aset Gudang</h3>
            <p style="font-size: 12px; color: #4a5568;">Akumulasi dari (Harga Satuan × Stok) seluruh produk</p>
        </div>
        <div class="amount">
            <?= formatRupiah($totalAsetGudang); ?>
        </div>
    </div>

    <!-- Tabel Daftar Produk -->
    <table>
        <thead>
            <tr>
                <th>Kode ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th class="text-right">Harga Satuan</th>
                <th class="text-center">Stok</th>
                <th>Status Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
                <?php 
                    // Evaluasi stok kritis (< 3) menggunakan fungsi dari functions.php
                    $isKritis = isStokKritis($item['stok']); 
                ?>
                <tr class="<?= $isKritis ? 'stok-kritis' : ''; ?>">
                    <td><strong><?= htmlspecialchars($item['id']); ?></strong></td>
                    <td><?= htmlspecialchars($item['nama']); ?></td>
                    <td><?= htmlspecialchars($item['kategori']); ?></td>
                    <td class="text-right"><?= formatRupiah($item['harga']); ?></td>
                    <td class="text-center"><strong><?= $item['stok']; ?></strong></td>
                    <td>
                        <?php if ($isKritis): ?>
                            <span class="badge badge-danger">Kritis (&lt; 3)</span>
                        <?php else: ?>
                            <span class="badge badge-normal">Aman</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($item['deskripsi']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <footer>
        Mini Project 1 - Product Information System &copy; <?= date('Y'); ?>
    </footer>
</div>

</body>
</html>