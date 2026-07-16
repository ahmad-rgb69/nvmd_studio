<div align="center">
  <br>
  <h1>🎬 Nevermind Studio</h1>
  <p>
    <strong>Video Editing Booking & Order Management System</strong><br>
    <em>Platform digital interaktif untuk memesan, memantau, dan mengelola jasa penyuntingan video profesional secara real-time.</em>
  </p>
  
  <p>
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
    <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
    <img src="https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white" alt="Alpine JS" />
    <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite" />
    <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  </p>
</div>

---

## 📖 Tentang Nevermind Studio

**Nevermind Studio** adalah aplikasi web berbasis *Laravel* yang dirancang sebagai sistem manajemen pemesanan (*booking*) dan pelacakan order penyuntingan video. Aplikasi ini menjembatani komunikasi antara *Client* (pembuat konten) dengan *Editor* secara praktis. Client dapat mengirimkan detail brief proyek, link materi mentah (seperti Google Drive/Dropbox), dan memantau status pengerjaan secara langsung. Di sisi lain, *Admin/Editor* dapat memperbarui status pengerjaan pesanan dan menyerahkan tautan video final setelah selesai diedit.

## ✨ Fitur Utama

- 🔒 **Role-based Authentication**: Hak akses yang terbagi tegas antara **Client** (akses untuk booking proyek baru dan melacak progres) dan **Admin** (kontrol penuh untuk pengelolaan pesanan).
- 📁 **Manajemen Booking Project (CRUD)**: Client memiliki kontrol penuh untuk memesan jasa edit baru, memodifikasi detail brief (selama status *pending*), dan membatalkan pesanan.
- 📊 **Dashboard Administrator**: Panel kendali terpusat bagi Admin untuk melihat daftar pesanan masuk, merubah status (*pending*, *in progress*, *completed*), dan menginput link video final yang sudah selesai.
- 🎨 **Galeri Portofolio Interaktif**: Galeri portofolio interaktif bergaya poster brutalist Jepang modern lengkap dengan slider custom scrollbar, efek parallax arsiran garis miring, pemutaran detail, serta rincian analitik video (views, likes, comments).
- 📱 **Desain Brutalist Modern & Responsif**: Tampilan antarmuka berestetika premium yang nyaman diakses melalui komputer maupun perangkat *mobile*.

## 🛠️ Tech Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Tailwind CSS, Alpine.js, Vanilla JS, Blade Components
- **Database**: SQLite / MySQL (Database Agnostic)
- **Asset Bundler**: Vite v6

---

## 🚀 Panduan Instalasi (Lokal)

Ikuti langkah-langkah di bawah ini untuk menjalankan project Nevermind Studio di komputer lokal Anda.

### Prasyarat
Pastikan komputer Anda sudah memiliki:
- [PHP](https://www.php.net/) >= 8.2
- [Composer](https://getcomposer.org/)
- [Node.js & NPM](https://nodejs.org/)
- Web Server lokal (seperti Laragon, XAMPP, atau Laravel Herd)

### Langkah-Langkah

1. **Clone Repository**
   ```bash
   git clone https://github.com/ahmad_rgb69/nvmd_studio.git
   cd nvmd_studio
   ```

2. **Instalasi Dependensi PHP**
   ```bash
   composer install
   ```

3. **Instalasi Dependensi Frontend**
   ```bash
   npm install
   ```

4. **Konfigurasi Environment**
   Salin file konfigurasi `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   *Catatan: Secara default, project ini dikonfigurasi menggunakan database SQLite. Jika menggunakan SQLite, pastikan konfigurasi di `.env` sudah mengarah ke file database SQLite kosong.*

5. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi Database & Seeder**
   Jalankan migrasi tabel database sekaligus mengisi data bawaan untuk testing:
   ```bash
   php artisan migrate --seed
   ```

7. **Kompilasi Aset Frontend**
   Kompilasi aset menggunakan Vite:
   ```bash
   npm run build
   ```

8. **Jalankan Server Lokal**
   ```bash
   php artisan serve
   ```
   Aplikasi Anda sekarang dapat diakses melalui browser di alamat `http://127.0.0.1:8000`.

---

## 🔑 Akun Uji Coba (Default Credentials)

Gunakan akun di bawah ini untuk masuk ke sistem setelah menjalankan database seeder:

*   **Administrator Account**
    *   Email: `admin@nevermind.com`
    *   Password: `password`
    *   *Role*: Akses dashboard admin untuk mengelola semua pesanan.

*   **Client Account**
    *   Email: `client@nevermind.com` (atau buat akun baru melalui menu register)
    *   Password: `password`
    *   *Role*: Mengajukan pesanan dan memantau status project pribadi.
