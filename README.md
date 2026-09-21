# Mini Project 1: Product Information System

Sistem Informasi Produk sederhana yang dirancang menggunakan **PHP murni (Native)**. Proyek ini dibangun dengan tujuan pembelajaran dasar arsitektur perangkat lunak, khususnya penerapan **Arsitektur 3-Tier (Layered Architecture)** untuk memisahkan antara data, logika bisnis, dan antarmuka pengguna (*Separation of Concerns*).

## Arsitektur Sistem

Proyek ini tidak menggunakan *framework* dan membatasi interaktivitas untuk fokus pada alur logika PHP di sisi server (*Server-side rendering*). Sistem dipecah menjadi 3 file utama:

1. **`products.php` (Data Layer):** Bertindak sebagai *mock database*. Berisi kumpulan data produk yang disimpan dalam bentuk *Multidimensional Array* PHP.
2. **`functions.php` (Processing Layer):** Tempat di mana logika bisnis (*business logic*) dijalankan. Berisi fungsi seperti kalkulasi total nilai stok (`hitungTotalNilaiStok()`).
3. **`index.php` (Presentation Layer):** Antarmuka pengguna (UI). Berfungsi memuat data dari `products.php` dan fungsi dari `functions.php` (menggunakan `require_once`), lalu merendernya ke dalam struktur HTML.

# Master Blueprint: Product Information System

Dokumen ini merupakan cetak biru induk (master blueprint) yang mendefinisikan arsitektur, struktur komponen, serta alur logika eksekusi dari **Product Information System (Mini Project 1)**.

Silakan klik tautan di bawah ini untuk mengakses dokumentasi detail proyek:

1. **[PRD (Product Requirements Document (PRD).md)](<./Product Requirements Document (PRD).md>)**

2. **[Flowchart Logika Eksekusi (Flowchart.md)](./Flowchart.md)**

---

## Cara Menjalankan Proyek (Instalasi)

Karena ini adalah proyek PHP murni, Membutuhkan *local server* (seperti XAMPP, MAMP, atau Laragon) untuk menjalankannya.

1. **Clone atau Unduh** repositori ini ke komputer Anda.
2. Pindahkan folder proyek ke dalam direktori *web server* lokal Anda:
   - Jika menggunakan XAMPP: pindahkan ke folder `htdocs`.
   - Jika menggunakan MAMP: pindahkan ke folder `htdocs`.
   - Jika menggunakan Laragon: pindahkan ke folder `www`.
3. Buka *browser* pilihan Anda.
4. Akses proyek melalui URL lokal, contoh: 
   `http://localhost/nama-folder-proyek/index.php`

## Teknologi yang Digunakan

- **PHP 8.x** (Kompatibel dengan versi 7.4+)
- **HTML5 & CSS3** (Untuk struktur dan *styling* antarmuka)

---
*Dibuat untuk keperluan mini project dan pembelajaran arsitektur dasar PHP.*
