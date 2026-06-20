# Inventory Management System

Sistem Informasi Inventaris Barang berbasis Laravel untuk mengelola data barang, kategori, transaksi barang masuk, transaksi barang keluar, serta pembuatan laporan inventaris dalam format PDF.

## Deskripsi

Inventory Management System merupakan aplikasi berbasis web yang digunakan untuk membantu proses pengelolaan inventaris barang secara terstruktur dan efisien. Sistem ini menyediakan fitur manajemen data barang, kategori, transaksi barang masuk dan keluar, serta laporan inventaris yang dapat dicetak ke dalam format PDF.

## Fitur

- Dashboard Inventaris
- CRUD Kategori
- CRUD Barang
- Transaksi Barang Masuk
- Transaksi Barang Keluar
- Laporan Inventaris
- Export PDF
- Responsive Design
- Dark Theme Interface

## Teknologi

- Laravel 12
- PHP 8
- MySQL
- Bootstrap 5
- Chart.js
- DomPDF

## Instalasi

```bash
git clone https://github.com/username/inventory-system.git

cd inventory-system

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve
```

## Struktur Modul

### Master Data

- Kategori
- Barang

### Transaksi

- Barang Masuk
- Barang Keluar

### Laporan

- Laporan Inventaris
- Cetak PDF

## Screenshot

### Dashboard

Tambahkan screenshot dashboard di sini.

### Data Barang

Tambahkan screenshot data barang di sini.

### Barang Masuk

Tambahkan screenshot barang masuk di sini.

### Barang Keluar

Tambahkan screenshot barang keluar di sini.

### Laporan PDF

Tambahkan screenshot laporan PDF di sini.

## Author

Dibuat untuk memenuhi tugas Sistem Informasi Inventaris Barang menggunakan Laravel Framework.
