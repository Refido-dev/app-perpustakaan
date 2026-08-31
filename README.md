# App Perpustakaan

Aplikasi manajemen perpustakaan digital untuk kampus, dikelola oleh petugas/admin untuk mengatur data buku, anggota, dan transaksi peminjaman.

## Tujuan

Membantu petugas perpustakaan mengelola data buku, anggota, dan peminjaman secara digital, menggantikan pencatatan manual yang rawan kesalahan dan sulit ditelusuri.

## Cara Menjalankan Project Secara Lokal

1. Clone repository ini: git clone https://github.com/Refido-dev/app-perpustakaan.git lalu cd app-perpustakaan
2. Install dependency PHP: composer install
3. Salin file environment dan generate app key: cp .env.example .env lalu php artisan key:generate
4. Sesuaikan konfigurasi database di file .env: DB_CONNECTION=mysql, DB_HOST=127.0.0.1, DB_PORT=3306, DB_DATABASE=db_perpustakaan, DB_USERNAME=root, DB_PASSWORD=
5. Buat database kosong bernama db_perpustakaan di MySQL/MariaDB.
6. Jalankan development server: php artisan serve
7. Buka http://127.0.0.1:8000 di browser.

## Perbedaan Model, View, dan Controller

Menurut pemahaman saya, Model bertanggung jawab atas data dan aturan bisnis di baliknya - ia yang tahu bagaimana struktur tabel di database dan bagaimana data itu diambil atau diubah. View murni bertugas menampilkan tampilan (HTML) ke pengguna tanpa perlu tahu logika bisnis yang rumit, ia hanya menerima data yang sudah disiapkan lalu menampilkannya. Controller berperan sebagai penghubung: menerima permintaan dari pengguna, memanggil Model untuk mengambil atau mengubah data, kemudian mengirim data tersebut ke View untuk ditampilkan kembali ke pengguna.
